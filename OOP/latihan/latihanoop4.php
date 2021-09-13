<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Aritmatika</legend>
            <table>
                <tr>
                    <td>Bilangan 1 </td>
                    <td>:</td>
                    <td><input type="number" name="bil1"></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td>:</td>
                    <td><input type="number" name="bil2"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><br><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    class aritmatika
    {

        public function __construct($bil1, $bil2)
        {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }
        public function penjumlahan()
        {
            return ($this->bil1 + $this->bil2);
        }
        public function pengurangan()
        {
            return ($this->bil1 - $this->bil2);
        }
        public function perkalian()
        {
            return ($this->bil1 * $this->bil2);
        }
        public function pembagian()
        {
            return ($this->bil1 / $this->bil2);
        }
        public function modulus()
        {
            return ($this->bil1 % $this->bil2);
        }
    }
    echo "<fieldset><label>Hasilnya</label><hr>";
    $hasil = new aritmatika($bil1, $bil2);
    echo "penjumlahan dari $bil1 + $bil2 : <b>" . $hasil->penjumlahan() . "</b><br>";
    echo "pengurangan dari $bil1 - $bil2 : <b>" . $hasil->pengurangan() . "</b><br>";
    echo "perkalian dari $bil1 x $bil2 : <b>" . $hasil->perkalian() . "</b><br>";
    echo "pembagian dari $bil1 / $bil2 : <b>" . $hasil->pembagian() . "</b><br>";
    echo "sisa bagi dari $bil1 % $bil2 : <b>" . $hasil->modulus() . "</b><br>";
    echo "</fieldset>";
}
?>