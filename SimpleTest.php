<?php
//ata kunci use memiliki dua tujuan: memberi tahu kelas untuk mewarisi sifat dan memberikan alias ke namespace
use PHPUnit\Framework\TestCase;
// require_once berfungsi untuk memanggil satu kali sebuah class atau file agar class tesebut dapat digunakan
require_once ("Wordcount.php");

//extend merupakan menunjukkan sebuah pewarisan
class SimpleTest extends TestCase{
    public function testCountWords(){
        $Wc= new WordCount();

        $TestSentence = "My name is iqbal";
        $WordCount = $Wc->countWords($TestSentence);
        //$this adalah variable khusus yang menunjukkan bahwa itu merupakan variabel dari class parent 
        $this->assertEquals(4, $WordCount);
    }
}
?>