<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>progam peminjaman mobil</title>
</head>
<body>
<form action= "halaman2.php" method="post">
    <fieldset><h3><center>progam peminjaman mobil</center></h3><br>
    <table border="0" align="center">
    <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nomor induk kependudukan</td>
            <td> : </td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >
            laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Mobil</td>
            <td> : </td>
            <td><input  name="namamobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil </td>
            <td> : </td>
            <td><select name="jenismobil">
            <option value= MobilSUV >Mobil SUV</option>
            <option value= MobilConvertible>Mobil Convertible</option>
            <option value= MobilSport >Mobil Coupe</option>
            <option value= MobilMPV>Mobil MPV</option>
            </select></td>
        </tr>
        <tr>
            <td>Merek Mobil </td>
            <td> : </td>
            <td><select name="merek">
            <option value= "Toyota" > Toyota</option>
            <option value= "Daihatsu" > Daihatsu</option>
            <option value= "Honda" > Honda</option>
            <option value= "Suzuki" > Suzuki</option>
            </select></td>
        </tr>
        <tr>
            <td>NO Plat Mobil</td>
            <td> : </td>
            <td><input type="text" name="nomobil"></td>
        </tr>
        <tr>
            <td>Tanggal Peminjaman</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpeminjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td> : </td>
            <td><input  type="date" name="tanggalkembali"></td>
        </tr>
        <tr>
            <td>Penjamin </td>
            <td> : </td>
            <td><select name="penjamin">
            <option value= "KTP" > KTP</option>
            <option value=  "FC SIM" > fc sim</option>
            <option value= "FC KK" > fc kk</option>
            </select></td>
        </tr>
        <tr>
            <td>Menggunkan Supir </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= Ya > Ya</option>
            <option value= Tidak > Tidak</option>
            </select></td>
        </tr>
        <tr>
        <td></td><td></td>
            <td><br><input type="submit" name="proses">
            <input type="reset" value="reset"></td>
        </tr>
</table>
    </fieldset>
</body>
</html>