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

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array Multi Dimensi</title>
    </head>
    <body>
        <br><br>
        <table border = "1" width = "80%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ;
        foreach($example as $menu) {
        foreach($menu['submenu'] as $val){
        ?>

        <tr>    
       <td><?php echo $no ++; ?></td>
       <td><?php echo $val['nama'];?></td>
       <td><?php echo $menu['dosen']?></td>
           <?php echo "<td> <ul>";

        foreach($val['MataKuliah'] as $sub) {?>    
        <li><?php echo  $sub['MataKuliah'] ;?>
        <?php } echo"</td> 
        <td></ul><ul>"; ?>

  <?php foreach($val['Hobi'] as $hobi) {
        echo "<li>". $hobi ['Hobi']."</li>"; }
        echo"</td> </ul>";
        }
    }
?>
</table>
</html>
