<?php
// mengedintefikasi sebuah kelas
class Kucing
{
    //property atau atribute
    public $warna;

    //membyat method
    public function __construct($a)
    {
        $this->warna = $a;
    }
    //membuat method behaviour
    public function bersuara()
    {
        return "meowng....meowng.....meowng";
    }
    public function berburu()
    {
        return "Berburu Ikan";
    }
}
//membuat intasi object
$kucing1 = new Kucing("Hitam");
echo "Warna Kucing 1: " . $kucing1->warna . "<br>";
$kucing2 = new Kucing("Oren");
echo "Warna Kucing 2: " . $kucing2->warna . "<br>";
