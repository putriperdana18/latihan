<?php 
{
    // mendefinisikan sebuah class
    class segitiga
     {
        //membuat property atau atribute
        public $alas = 10;
        public $tinggi = 20;
        public $a, $b, $c;
        //membuat method atau behaviour
        public function luassegitiga()
        {
            
            return ($this-> alas * $this-> tinggi / 2);
        }
        public function kelilingsegitiga()
        {
            
            return ($this-> a + $this-> b + $this-> c );
        }
    }
    //membuat object instalasi object 
    $segitiga1 = new segitiga();
    echo "alas : ".$segitiga1 -> alas. "<br>";
    echo "tinggi : ".$segitiga1 -> tinggi. "<br>";
    echo "segitiga : ".$segitiga1 -> a = 10 . "<br>";
    echo "segitiga : ".$segitiga1 -> b =  20 . "<br>";
    echo "segitiga : ".$segitiga1 -> c = 5 . "<br>";
    echo "luas segitiga : ".$segitiga1 -> luassegitiga(). "<br>";
    echo "keliling segitiga : ".$segitiga1 -> kelilingsegitiga(). "<br>";
    echo "<hr>";
    
}
?>