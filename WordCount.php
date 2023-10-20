<?php
//metode untuk menghitung jumlah kata dalam sebuah kalimat
class WordCount
{
    public function countWords($sentence)
    {
        //explode berfungsi untuk memecah kalimat
        //count berfungsi menghitung jumlah elemen dalam array 
        return count (explode(" ",$sentence));
    }
}
?>