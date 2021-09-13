<?php
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
    ];
?>
<?php

    $no = 1;
    foreach($example as $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

        foreach($menu['MataKuliah'] as $sub) {
            echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
         
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo"<br>";
    }
    echo "</ul>";
    echo"<br>";
    }
?>