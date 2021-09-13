<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Perpangkatan</title>
</head>
<body>
<fieldset> <legend>Masukan Angka</legend>
    <form action="" method="post">
        <br>masukan bilangan : <input type="number" name="bilangan"><br><br>
         masukan pangkat : <input type="number" name="pangkat"><br><br>
        <input type="submit" name="save">
    </form>
    <?php
  if (isset($_POST['Input'])) {
    $bilangan = $_POST['bilangan'];
    $pangkat = $_POST['pangkat'];
   }echo "<br>hasil dari perkalian     ";
   
   function faktorial($bilangan,$pangkat){
       if($pangkat>1){
          // return $hasil=$bilangan ** $pangkat;
           return $bilangan *faktorial($bilangan,$pangkat-1);
           $bagi= $bilangan /= $pangkat;
       }else{
           return $bilangan;
       }
   }
   for ($i=1; $i <=$pangkat ; $i++) { 
       echo "$bilangan  ";
       if($i <$pangkat){
           echo" x ";
       }
   }
   echo" = ";
   echo faktorial($bilangan,$pangkat);
    ?>
</fieldset>
</body>
</html>