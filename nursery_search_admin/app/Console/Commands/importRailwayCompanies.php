<?php

namespace App\Console\Commands;

use App\Model\RailwayCompany;
use DB;
use Excel;
use Illuminate\Console\Command;

class importRailwayCompanies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nursery:import:railway_companies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '鉄道事業者マスターをインポートします';

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
        DB::table('railway_company_m')->truncate();

        $this->info('import database/seeds/railway_company_m.csv');
        $path = 'database/seeds/railway_company_m.csv';
        Excel::load($path, function ($reader) {
            $rows = $reader->toArray();
            foreach ($rows as $row) {
                foreach ($row as $item) {
                    $obj = new RailwayCompany($item);
                    $obj->name_kana = mb_convert_kana($obj->name_kana, "KV");
                    $obj->save();
                    $this->info($obj->name);
                }
            };
        });
    }
}
