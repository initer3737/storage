<?php
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
use wordowarudo\CountingWord;
require_once 'countingWord.test.php';
// Class untuk run Testing.
    /**@test */
class Tests extends TestCase
{
    public function testCountWords()
    {
        // Kita pakai class yang mau kita test.
        $Wc = new CountingWord();

        // Kita masukan parameter 17 kata, yang harusnya dapat output 17.
        $TestSentence = "watashi no namae wa yotsusan machi watashi wa baku endo to furontu endo soshite furusutaku ni natteimasu"; // 17 Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        // Kita assert equal, ekspektasi nya harus 17, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals(17, $WordCount); 
            //run command ./vendor/bin/phpunit tests.php
    }
}