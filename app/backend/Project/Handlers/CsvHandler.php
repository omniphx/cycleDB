<?php namespace Project\Handlers;

use Illuminate\Routing\UrlGenerator;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class CsvHandler {
    /**
     * Convert a csv file into an array
     * @param  .csv $csv
     * @return Array $array
     */
    public function toArray($csv)
    {
        $lexer = new Lexer(new LexerConfig());
        $interpreter = new Interpreter();

        $array = array();

        $interpreter->addObserver(function(array $row) use (&$array) {
            $array[] = $row;
        });

        $lexer->parse($csv, $interpreter);

        return $array;
    }

    public function toAssociative($array)
    {
        $header = array_shift($array);
        $associativeArray = array();
        foreach ($array as $row) {
          $associativeArray[] = array_combine($header, $row);
        }

        return $associativeArray;
    }
}