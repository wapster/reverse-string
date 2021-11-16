<?php
use \PHPUnit\Framework\TestCase;

require_once('vendor/autoload.php');


class ConverterTests extends TestCase
{
    protected $string;

    
    protected function setUp(): void 
    {
        $this->converter = new Converter();
        $this->string = "Обратная строка!";
    }


    protected function tearDown(): void
    {
        $this->converter = NULL;
        $this->string = NULL;
    }


    public function testReverseString()
    {
        $etalon = "!акортс яантарбО";
        $reverse_string = $this->converter->reverseString($this->string);
        $this->assertEquals($reverse_string, $etalon);
    }
}