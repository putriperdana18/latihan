<html>
    <head><title>sa</title></head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td>:</td>
                    <td><input type="text" name="warna"></td>
                </tr>
                <tr>
                    <td>jumlah kaki kucing</td>
                    <td>:</td>
                    <td><input type="number" name="kaki"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="input"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $nama;
        public $warna;
        public $kaki;

        public function cat($kaki)
        {
            if ($kaki == 4) {
                echo "<br>jumlah : $kaki";
                echo "<br>Keterangan : Normal";
            } else if ($kaki < 4) {
                echo "<br>jumlah : $kaki";
                echo "<br>Keterangan : Cingked";
            } else if ($kaki > 4) {
                echo "<br>jumlah : $kaki";
                echo "<br>Keterangan : Siluman";
            }

        }

    }

    $kucing1 = new kucing();
    echo "nama : $nama <br>";
    echo "warna : $warna";
    echo $kucing1->cat($kaki);
}

?>
