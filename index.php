<?php
function debug($str) {
    echo "<pre>";
    print_r($str);
    echo "</pre>";
}

$string = "Привет!";
$reverse_string = "";

// разбиваем предложение на слова
$words = explode(" ", $string);


foreach ($words as $word) {
    $str_arr = array();

    // разбираем СЛОВО на БУКВЫ
    for($i=0; $i <= strlen($word)-1; $i++) {    

        $symbol = mb_substr($word, $i, 1, "UTF-8");
        
        // если символ в верхнем регистре
        if (ctype_upper($symbol)) {
            $upper_index = $i; // индекс символа, который был в верхнем регистре
            $symbol = mb_strtolower($symbol);
        }
    
        // если символ, это знак препинания
        if (ctype_punct($symbol)) {
            array_push($str_arr, $symbol); // в конец
        } else array_unshift($str_arr, $symbol); // в начало
    }
    
    // если в слове была буква в верхнем регистре
    if (isset($upper_index)) {
        $str_arr[$upper_index] = mb_strtoupper($str_arr[$upper_index]);
        unset($upper_index);
    }
    
    // пробел между словами
    array_push($str_arr, " ");
    

    $reverse_string .= implode($str_arr);
}

debug(trim($reverse_string));    
exit;





require_once('vendor/autoload.php');

$converter = new Converter();
$reverse_string = $converter->reverseString("Обратная строка!!!");

echo $reverse_string;


