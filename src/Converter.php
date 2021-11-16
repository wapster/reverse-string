<?php

class Converter 
{
    public $string;

    public function reverseString($string): string 
    {
        $strrev = "";
        
        for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
            $strrev .= mb_substr($string, $i, 1, "UTF-8");
        }
        
        return $strrev;
    }

}