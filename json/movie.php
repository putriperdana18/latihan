<?php
$datam ='{
    "intruksi": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Relased": "22 dec 1967",
    "waktu": " 106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting
    great things from him. at his \"homecoming\" party, MRS. Robison, the wife of his
    fathers bussines patner, has Been drive her home, whic leads to an afair between the two
    the affair eventually ends, but comes back to haunt him when he finds himself falling for 
    elaine, Mrs. Robinsons daugher." 
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "Poster": 
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body> 
  <?php $da= json_decode($datam);?>
  <center>Data Film
  <?php echo "<b> {$data->title}</b><br>"?>
  <img width=600 height=500 src= $da->Poster>;
  </center>
 
  <table>"
   <tr>;
  <?php echo "<td></td><td></td><td>{$da->intruksi}</td>"; ?>
 </tr>

<tr>
  <th> Tahun Rilis";
  <td> : </td>
  <td><?php $da->Year; ?></td>
</tr>

  <tr>
  <th> Tanggal Rilis
  <td> :" </td>
  <td><?php echo $da->Relased;?></td>
</tr>

  <tr>
  <th> Durasi Film
  <td> :" </td>
  <td><?php echo $da->waktu;?></td>
</tr> 

<tr>
  <th> Genre
  <td> :" </td>
  <td><?php echo "<li>" .implode("<li> ", $da->Genre )."<br>"; ?></td>
</tr>

<tr>
  <th> Director
  <td> :" </td>
  <td><?php echo $da->Director; ?></td>
</tr>

<tr>
  <th> penulis
  <td> :" </td>
  <td><?php echo "<li>" .implode("<li> ", $da->writers )."<br>"; ?></td>
</tr>

<tr>
  <th> Pemeran
  <td> :" </td>
  <?php echo "<li>" .implode("<li> ", $da->Actors )."<br>"; ?>
</tr>

<tr>
  <th> Bahasa
  <td> :" </td>
  <td><?php echo $da->Language; ?></td>
</tr>

<tr>
  <th> Negara
  <td> :" </td>
  <td><?php echo $da->Country; ?></td>
</tr>

<tr>
  <th> Penghargaan
  <td> :" </td>
  <td><?php echo $da->Awards; ?></td>
</tr>



  