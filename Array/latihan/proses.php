<?php
if(isset($_POST['save'])){
    $nama =$_POST['nama'];
    $asalsekolah =$_POST['asalsekolah'];
    $indonesia =$_POST['indonesia'];
    $matematika =$_POST['matematika'];
    $inggris =$_POST['inggris'];
    $ipa =$_POST['ipa'];

    // echo "<pre>";
    // var_dump($kelas);
    // echo "</pre>";


}
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
    <fieldset>
    <legend>Data Siswa</legend>
    <table border=1 width=100%>
    <tr>
    <th>Nomor</th>
    <th>Nama</th>
    <th>Asal Sekolah</th>
    <th>Bahasa Indonesia</th>
    <th>Bahasa Inggris</th>
    <th>Matematika</th>
    <th>Ilmu Pengetahuan Alam</th>
    <th>Jumblah Nilai</th>
    <th>Rata - Rata</th>
    <th>Keterangan</th>
    </tr>
    <?php
    $no =1;
    for($i=0; $i <count($nama); $i++){?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $nama[$i]; ?></td>
        <td><?php echo $asalsekolah[$i]; ?></td>
        <td><?php echo $indonesia[$i]; ?></td>
        <td><?php echo $inggris[$i]; ?></td>
        <td><?php echo $matematika[$i]; ?></td>
        <td><?php echo $ipa[$i]; ?></td>
        <td><?php 

        $totalnilai[$i] = (($ipa[$i] + $matematika[$i]) + ($indonesia[$i] + $inggris[$i]));
        $ratarata[$i] = (($totalnilai[$i]/ 4));
        echo $totalnilai[$i]; ?></td>
        <td><?php echo $ratarata[$i]; ?></td>
        <td><?php 
        $keterangan=340;
        if ($totalnilai[$i]>=$keterangan) {
            echo "Diterima";
        } elseif ($totalnilai[$i]<=$keterangan) {
            echo "Tidak Diterima";
        }

          ?></td>
        
    </tr>

   <?php 
    }
    ?>
    </table>
    </fieldset>
</body>
</html>