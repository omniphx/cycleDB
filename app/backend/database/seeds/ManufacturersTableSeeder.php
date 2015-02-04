<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ManufacturersTableSeeder extends BaseSeeder {

    public function __construct(Manufacturer $manufacturer)
    {
        $this->table = 'manufacturers';
        $this->model = $manufacturer;
        $this->filename = app_path().'/database/seeds/csvs/manufacturers.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        // DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::table($this->table)->truncate();


        parent::run();
    }

}