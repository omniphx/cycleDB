<?php

class HomeController extends BaseController {

	public function index()
	{
        $categories = $this->category->get();

        return View::make('home.index', compact('categories'));
	}

    public function loader()
    {
        $categories = $this->category->get();

        return View::make('home.loader', compact('categories'));
    }

    public function store()
    {
        $csv = Input::file('csv');
        $table = Input::get('table');

        $csvArray = CsvHandler::toArray($csv);
        $csvAssociative = CsvHandler::toAssociative($csvArray);

        if (Schema::hasTable(str_plural($table))){
            foreach($csvAssociative as $row){
                $model = $table::firstOrNew(array('name' => $row['Name']));
                foreach ($row as $key => $value){
                    if (!Schema::hasColumn(str_plural($table),strtolower($key))){
                        $parent = $key::where('name',$value)->first();
                        $name = strtolower($key);
                        $model->$name()->associate($parent);
                        unset($row[$key]);
                    } else {
                        $model->$key = $value;
                    }
                }
                
                $model->save();
            }
        }

        return $table::get();
    }
}
