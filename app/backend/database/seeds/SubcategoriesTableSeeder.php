<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubcategoriesTableSeeder extends BaseSeeder {

    public function __construct(Subcategory $subcategory)
    {
        $this->table = 'subcategories';
        $this->model = $subcategory;
        $this->filename = app_path().'/database/seeds/csvs/subcategories.csv';
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