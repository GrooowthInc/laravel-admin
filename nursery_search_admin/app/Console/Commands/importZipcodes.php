<?php

namespace App\Console\Commands;
use DB;
use Illuminate\Console\Command;

class importZipcodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nursery:import:zipcodes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '郵便番号辞書をDBにインポートします';

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
        try {
            DB::table('zipcode')->truncate();
            // import from csv
            $this->info('import database/seeds/ken_all.kogaki.utf8.csv');
            $fp = fopen(base_path('database/seeds/ken_all.kogaki.utf8.csv'), 'r');
            $line = 0;
            while (!feof($fp)) {
                $csv = fgetcsv($fp);
                if (count($csv) == 15) {
                    DB::insert('insert into zipcode (official_code,zipcode_old,zipcode,kana_pref,kana_city,kana_town,pref,city,town,flag_doubleCode,flag_banchi,flag_chome,flag_double_area,flag_update,flag_update_reason) values (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?)', $csv);
                    $line++;
                    if ($line % 1000 == 0) {
                        $this->info('import ' . $line . ' lines.');
                    }
                }
            }
            fclose($fp);
            $this->info('import ' . $line . ' lines.');

        } catch (¥Exception $ex) {
            return $this->error("exception:¥n" . $ex->getMessage());
        }
        return $this->info('operation finished.');
    }
}
