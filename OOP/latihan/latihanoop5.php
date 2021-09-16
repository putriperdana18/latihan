<?php
class login
{
    public $nama = " Putri Perdana";
    protected $user = "MyAdmin";
    private $pass = "180105";

    public function login()
    {
        $a = $this->user;
        $b = $this->pass;
        if ($a == "MyAdmin" && $b == "180105") {
            $c = "Login Berhasil";
        } else {
            $c = "Login gagal";
        }
        return $c;
    }

}

$admin = new login();
echo "User : " . $admin->nama . "<br>";
echo "Password : " . "<br>";
echo "Info : " . $admin->login() . "<hr>";
