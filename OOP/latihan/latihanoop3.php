<?php 
{
    // mendefinisikan sebuah class
    class persegi
     {
        //membuat property atau atribute
        public $panjang = 10;
        public $lebar = 20;
        //membuat method atau behaviour
        public function luaspersegi()
        {
            
            return ($this-> panjang * $this-> lebar);
        }
        public function kelilingpersegi()
        {
            
            return ( $this-> panjang * 2 + $this-> lebar * 2);
        }
    }
    //membuat object instalasi object 
    $persegi1 = new persegi();
    echo "panjang : ".$persegi1 -> panjang. "<br>";
    echo "lebar : ".$persegi1 -> lebar. "<br>";
    echo "luas persegi : ".$persegi1 -> luaspersegi(). "<br>";
    echo "keliling persegi : ".$persegi1 -> kelilingpersegi(). "<br>";
    echo "<hr>";
    
}
?>