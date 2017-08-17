<?php

namespace App\Console\Commands;

use App\Model\Station;
use DB;
use Excel;
use Illuminate\Console\Command;

class importStations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nursery:import:stations';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '駅マスターをインポートします';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('station_m')->truncate();

        $this->info('import database/seeds/station_m.csv');
        $path = 'database/seeds/station_m.csv';
        Excel::load($path, function ($reader) {
            $rows = $reader->toArray();
            foreach ($rows as $row) {
                foreach ($row as $item) {
                    //緯度経度情報の正規化
                    $item['location'] = $this->string_to_lat_lon($item['location']);
                    $obj = new Station($item);
                    $obj->name_kana = mb_convert_kana($obj->name_kana, "KV");
                    $obj->save();
                    $this->info($obj->name);
                }
            };
        });
    }

    function string_to_lat_lon(string $value)
    {
        $value = substr($value, strlen('POINT('), strlen($value) - (strlen('POINT(') + 1));
        $value = explode(" ", $value);
        $ret = [];
        $ret['lat'] = $value[0];
        $ret['lng'] = $value[1];

        return $ret;
    }
}
