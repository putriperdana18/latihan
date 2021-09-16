<?php
class laptop
{
    public $pemilik;

    public function hidupkanlaptop()
    {
        return "Hidupkan Laptop";
    }
}
$laptopAnto = new Laptop();
$laptopAnto->pemilik = "anto";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanlaptop();
