<?php

class CategoriesTableSeeder extends BaseSeeder {

    public function __construct(Category $category)
    {
        $this->table = 'categories';
        $this->model = $category;
        $this->filename = app_path().'/database/seeds/csvs/categories.csv';
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