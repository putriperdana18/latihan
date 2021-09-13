<?php 
{
    // mendefinisikan sebuah class
    class kucing
     {
        //membuat property atau atribute
        public $warna = "coklat";
        public $jumblahkaki = 4;
        public $jenisbulu = "panjang";
        public $makananfav = "ikan pindang";
        //membuat method atau behaviour
        public function bersuara()
        {
            return "meong...meong...meong";
        }
        public function berburu()
        {
            return "berburu ikan";
        }
    }
    //membuat object instalasi object 
    $kucing1 = new kucing();
    echo "warna kucing : ".$kucing1 -> warna. "<br>";
    echo "suara kucing : ".$kucing1 -> bersuara(). "<br>";
    echo "<hr>";
    $kucing2 = new kucing();
    echo "warna kucing : ".$kucing2 -> warna = "oren" . "<br>";
    echo "suara kucing : ".$kucing1 -> bersuara(). "<br>";
}
?>