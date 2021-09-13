<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset> <legend>Form Data</legend>
    <form action="" method="post">
<tr>
            <th>Nama </th>
            <td> : </td>
            <td><input type="text" name="nama"></td><br><br>
        </tr>
        <tr>
            <th>Jenis kelamin</th>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >laki-laki
            <input type="radio" name="kelamin" value="perempuan"> Perempuan</td><br><br>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td> : </td>
            <td><input  type="date" name="tanggallahir"></td>
        </tr><br><br>
        <tr>
            <th>Agama</th>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td><br><br>
        </tr>
        <tr>
            <th>Alamat</th>
            <td> : </td>
            <td><textarea name="alamat" ></textarea></td><br><br>
        </tr>
        <tr>
            <th>Hobi</th>
            <td> : </td>
            <td><input type = "checkbox" name="hobi[]" value = "bermain Futsal">bermain futsal</checkbox></td>
            <td><input type = "checkbox" name="hobi[]" value = "memasak">memasak</checkbox></td>
            <td><input type = "checkbox" name="hobi[]" value = "menulis">menulis</checkbox></td>
            <td><input type = "checkbox" name="hobi[]" value = "membaca">membaca</checkbox></td>
            <td><input type = "checkbox" name="hobi[]" value = "menyanyi">menyanyi</checkbox></td>
        </tr>
</table>
 <br><br><input type="submit" name="save" value= "save">
 </fieldset>
 </form>
 <?php
 
 if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $tanggallahir = $_POST['tanggallahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    function biodata($nama = " ",$kelamin= " ",$tanggallahir = " ",
    $agama= " ",$alamat= " ",$hobi= " ")
    {
    $hasil = "Nama : $nama <br>";
    $hasil .= "Kelamin : $kelamin <br>";
    $hasil .= "Tanggal Lahir : $tanggallahir <br>";
    $hasil .= "Agama : $agama <br>";
    $hasil .= "Alamat : $alamat <br>";
    $hasil .= "Hobi :" . implode(" , ", $hobi);
    return $hasil; 
    }
   echo biodata($nama, $kelamin, $tanggallahir, $agama, $alamat, $hobi);
 }
   
   ?>

</body>
</html>
