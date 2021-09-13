<?php 
{
    // mendefinisikan sebuah class
    class komputer
     {
        //membuat property atau atribute
        public $warna = "hitam";
        public $ukuranlayar = "22 inc";
        public $merk = "philips";
        public $ram = "40 gb";
        public $pemilik = "Putri";
        //membuat method atau behaviour
        public function hidup()
        {
            return "nyalakan komputer";
        }
        public function matikan()
        {
            return "matikan komputer";
        }
    }
    //membuat object instalasi object 
    $komputer1 = new komputer();
    echo "pemilik : ".$komputer1 -> pemilik. "<br>";
    echo "warna : ".$komputer1 -> warna. "<br>";
    echo "merk : ".$komputer1 -> merk. "<br>";
    echo "ukuran layar : ".$komputer1 -> ukuranlayar. "<br>";
    echo "ram : ".$komputer1 -> ram. "<br>";
    echo "hidupkan : ".$komputer1 ->hidup(). "<br>";
    echo "<hr>";
    
}
?>