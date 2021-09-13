<?php

$dataMhs = '{
    $example = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Putri Perdana",
            "MataKuliah" => [
            ["MataKuliah" => "Sejarah Indonesia"],
            ["MataKuliah" => "Pendidikan pancasila dan Kewarnegaraan"],
            ["MataKuliah" => "Bahasa Inggris"]
        ],

            "Hobi" => [
            ["Hobi" => "Memasak"],
            ["Hobi" => "Menonton Film"]
        ]
    ],

            [ "nama" => "Kim Soo Hyun",
            "MataKuliah" => [
            ["MataKuliah" => "Bahaa Indonesia"],
            ["MataKuliah" => "Pendidikan Agama Islam"],
            ["MataKuliah" => "Ilmu Pengetahuan Alam"]],
            
            "Hobi" => [
            ["Hobi" => "Membaca"],
            ["Hobi" => "Menulis"]
        ]
    ],

            [ "nama" => "Shin Hae Sun",
            "MataKuliah" => [
            ["MataKuliah" => "Informatika"],
            ["MataKuliah" => "Seni Budaya"],
            ["MataKuliah" => "Bahasa Korea"]],

            "Hobi" => [
            ["Hobi" => "Berakting"],
            ["Hobi" => "Melukis"]]],
        ]
    ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Putri Perdana",
            "MataKuliah" => [
            ["MataKuliah" => "Sejarah Indonesia"],
            ["MataKuliah" => "Pendidikan pancasila dan Kewarnegaraan"],
            ["MataKuliah" => "Bahasa Inggris"]
        ],

            "Hobi" => [
            ["Hobi" => "Memasak"],
            ["Hobi" => "Menonton Film"]
        ]
    ],

            [ "nama" => "Kim Soo Hyun",
            "MataKuliah" => [
            ["MataKuliah" => "Bahaa Indonesia"],
            ["MataKuliah" => "Pendidikan Agama Islam"],
            ["MataKuliah" => "Ilmu Pengetahuan Alam"]],
            
            "Hobi" => [
            ["Hobi" => "Membaca"],
            ["Hobi" => "Menulis"]
        ]
    ],

            [ "nama" => "Shin Hae Sun",
            "MataKuliah" => [
            ["MataKuliah" => "Informatika"],
            ["MataKuliah" => "Seni Budaya"],
            ["MataKuliah" => "Bahasa Korea"]],

            "Hobi" => [
            ["Hobi" => "Berakting"],
            ["Hobi" => "Melukis"]]],
        ]
        ],
    }';


$data = json_decode($dataMhs);
foreach ($dataMhs as $mhs){
echo "<table>";
echo "<tr>";
echo "<td>Nama</td><td> : </td> <td>{$data->nama}</td> ";
echo "<tr>";
echo "<td>Usia</td><td>:</td><td> {$data->usia}</td> ";
echo "<tr>";
echo "<td>Domisili</td><td>:</td> <td>{$data->domisili}</td>";
echo "<tr>";
echo "<td>Hobi</td><td>:</td> <td>" . implode(", ", $data->hobi )."</td>";
echo "</table>";
?>