<?php

$url = "https://api.kawalcorona.com/";
//persiapkan curl unit
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return de tranfer as string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output constain teh output string
$dataCovid =curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
// echo $datacovid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <nav>
    <a href="json-api.php">Data Covid</a>
        <a href="json-indonesia.php">Data Indonesia</a>
        <a href="json-provinsi.php">Data Covid Provinsi </a>
        <a href="json-globalpositif.php">Globalpositif</a>
        <a href="api-meninggal.php">Meninggal</a>
    </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
            </tr>
            <?php
            $data= json_decode($dataCovid);
            foreach ($data as $covid){
                ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $covid->attributes->Country_Region;?></td>
                <td><?php echo $covid->attributes->Confirmed;?></td>
                <td><?php echo $covid->attributes->Deaths;?></td>
                <td><?php echo $covid->attributes->Recovered;?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </fieldset>
</body>
</html>