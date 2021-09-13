<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset> <legend>Form Gaji Putri</legend>
    
    <form action="soal4proses.php" method="post">
    Nama : <input type="text" name="nama">
 <br>Jenis kelamin : 
    <input type="radio" name="kelamin" value="laki-laki" >
laki-laki
 <input type="radio" name="kelamin" value="perempuan"> 
Perempuan<br>
Agama : <select name="agama">
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Katolik">Katolik</option>
 <option value="Hindu">Hindu</option>
 <option value="Buddha">Buddha</option>
 <option value="Konghucu">Konghucu</option>
 </select>
 <br>Golongan : <select name="golongan">
 <option value= 1 > 1</option>
 <option value= 2 > 2</option>
 <option value= 3 > 3</option>
 <option value= 4 > 4</option>
 </select>
 <br>
 Jumlah jam : <input type="number" name="jam">
 <br><br><input type="submit" value="Proses" name="proses">
 <input type="reset" value="hapus">
 </fieldset>
 </form>
</body>
</html>