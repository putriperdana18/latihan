<?php

$datajson = '{
  "nama": "Ujang",
  "domisili": "Bandung",
  "usia": 23,
  "wni": true,
  "hobi": [
    "Futsal", "Main Game", "Main Kelerenmg"
  ]
}';

$data = json_decode($datajson);

echo "Nama:". $data->nama. "<br>";
echo "Usia:  {$data->usia} <br>";
echo "Domisili: {$data->domisili} <br>";
echo "WNI: {$data->wni == 1 ? "Indonesia" : "bukan WNI";} <br>";
echo "Hobi: " . implode(", ", $data->hobi);
