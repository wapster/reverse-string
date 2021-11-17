<?php
require_once('vendor/autoload.php');

$converter = new Converter();
$reverse_string = $converter->reverseString();

echo $reverse_string;


