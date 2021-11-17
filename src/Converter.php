<?php

class Converter 
{
    public $string;

    public function reverseString(string $string = "Привет! Давно не виделись."): string 
    {
        $reverse_string = "";

        // разбиваем предложение на слова
        $words = explode(" ", $string);

        foreach ($words as $word) {
            $str_arr = array();

            // разбираем СЛОВО на БУКВЫ
            for($i=0; $i <= mb_strlen($word, "UTF-8")-1; $i++) {    

                $symbol = mb_substr($word, $i, 1, "UTF-8");
                
                // если символ в верхнем регистре
                if( IntlChar::isupper($symbol) ) {
                    $upper_index = $i; // индекс символа, который был в верхнем регистре
                    $symbol = mb_strtolower($symbol, "UTF-8");
                }
                
                // является ли символ знаком препинания
                if (IntlChar::ispunct($symbol)) {
                    array_push($str_arr, $symbol); // в конец
                } else array_unshift($str_arr, $symbol); // в начало

            }

            // если в слове была буква в верхнем регистре
            if (isset($upper_index)) {
                $str_arr[$upper_index] = mb_strtoupper($str_arr[$upper_index], "UTF-8");
                unset($upper_index);
            }
            
            // пробел между словами
            array_push($str_arr, " ");
            

            $reverse_string .= implode($str_arr);
        }

        return trim($reverse_string);
    }

}