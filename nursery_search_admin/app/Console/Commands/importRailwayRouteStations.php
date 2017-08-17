<?php

namespace App\Console\Commands;

use App\Model\RailwayCompany;
use App\Model\RailwayRouteStation;
use DB;
use Excel;
use Illuminate\Console\Command;

class importRailwayRouteStations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nursery:import:railway_route_station';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '路線と駅の関連マスターをインポートします';

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
        DB::table('railway_route_station_m')->truncate();

        $this->info('import database/seeds/railway_route_station_m.csv');
        $path = 'database/seeds/railway_route_station_m.csv';
        Excel::load($path, function ($reader) {
            $rows = $reader->toArray();
            foreach ($rows as $row) {
                foreach ($row as $item) {
                    $obj = new RailwayRouteStation($item);
                        $obj->save();
                    $this->info($obj->station_m_id);
                }
            };
        });
    }
}
