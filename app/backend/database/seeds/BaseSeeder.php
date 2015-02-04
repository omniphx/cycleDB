<?php

class BaseSeeder extends Seeder {

    /**
    * DB table name
    *
    * @var string
    */
    protected $table;
     
    /**
    * Model name
    *
    * @var string
    */
    protected $model;

    /**
    * CSV filename
    *
    * @var string
    */
    protected $filename;
     
    /**
    * Run DB seed
    */
    public function run()
    {
        $seedData = $this->seedFromCSV($this->filename);
        // DB::table($this->table)->insert($seedData);
        foreach($seedData as $row){
            $this->model->create($row);
        }
        
    }
     
    /**
    * Collect data from a given CSV file and return as array
    *
    * @param $filename
    * @param string $deliminator
    * @return array|bool
    */
    private function seedFromCSV($filename, $deliminator = ",")
    {
        if(!file_exists($filename) || !is_readable($filename))
        {
            return FALSE;
        }
         
        $header = NULL;
        $data = array();
         
        if(($handle = fopen($filename, 'r')) !== FALSE)
        {
            while(($row = fgetcsv($handle, 1000, $deliminator)) !== FALSE)
            {
                if(!$header) {
                    $header = $row;
                } else {
                    $model = array_combine($header, $row);
                    $data[] = array_change_key_case($model, CASE_LOWER);

                }
            }
            fclose($handle);
        }

        return $data;
    }

}