<?php
class Admin
{
    public $nama = " nancy";
    protected $norek = "29383y";
    private $pass = "001122";

    public function getinfo()
    {
        $a = $this->norek;
        $b = $this->nama;
        if = $c = "nomor atm : "...$a..." pemilik "...$b";
        } else {
            $c = "Login gagal";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->user;
        $b = $this->nama;
        $c = "User : " . $a . "<br>Nama :  " . $b;
        return $c;
    }
}

$admin = new Admin();

echo "User : " . $admin->nama . "<br>";
echo "Password : " . "<br>";
echo "Info : " . $admin->login() . "<hr>";
echo "Info : " . $admin->info() . "<hr>";

