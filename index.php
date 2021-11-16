<?php
require_once('vendor/autoload.php');

$converter = new Converter();
$reverse_string = $converter->reverseString("Обратная строка!!!");

echo $reverse_string;