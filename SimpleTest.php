<?php
//import PHPUnit
use PHPUnit\Framework\TestCase;
require_once "WordCount.php";
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        //membuat objek class
        $Wc = new WordCount();
        $TestSentence = "My name is Donny"; // 4 Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        //melakukan pengujian apakah hasil yang dikembalikan oleh `countWords` sama dengan 4
        $this->assertEquals(4, $WordCount);
    }
}
?>