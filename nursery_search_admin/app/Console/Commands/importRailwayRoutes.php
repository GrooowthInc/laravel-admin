<?php

namespace App\Console\Commands;

use App\Model\RailwayRoute;
use DB;
use Excel;
use Illuminate\Console\Command;

class importRailwayRoutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nursery:import:railway_routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '路線情報マスターをインポートします';

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
        DB::table('railway_route_m')->truncate();

        $this->info('import database/seeds/railway_route_m.csv');
        $path = 'database/seeds/railway_route_m.csv';
        Excel::load($path, function ($reader) {
            $rows = $reader->toArray();
            foreach ($rows as $row) {
                foreach ($row as $item) {
                    $obj = new RailwayRoute($item);
                    $obj->route_name_1_kana_bracket = mb_convert_kana($obj->route_name_1_kana_bracket, "KV");
                    $obj->route_name_1_kana = mb_convert_kana($obj->route_name_1_kana, "KV");
                    $obj->route_name_2_kana_bracket = mb_convert_kana($obj->route_name_2_kana_bracket, "KV");
                    $obj->route_name_2_kana = mb_convert_kana($obj->route_name_2_kana, "KV");
                    $obj->save();
                    $this->info($obj->route_name_1);
                }
            };

        });
    }
}
