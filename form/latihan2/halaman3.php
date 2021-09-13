<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $merek = $_POST['merek'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
    }
    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
    if ($supir == "Ya") {
            $biayaharian =250000;
    }else if    ($supir == "Tidak"){
            $biayaharian =150000;
        }
    
    $date11 = date_create("$tanggalpeminjaman");
    $date22 = date_create("$tanggalkembali");
    
    $difff = date_diff($date11, $date22);   
    
    $date1 = date_create("$tanggalkembali");
    $date2 = date_create("$tanggalpengembalian");
    
    $diff = date_diff($date1, $date2);
    $denda = 240000 ;
    
    $totalbiaya = $biayaharian * $difff->format('%a');
    $totaldenda =$diff->format('%a') * $denda;
    $totalpembayaran= $totalbiaya + $totaldenda;
    
?>

<html>
<fieldset>
    <table border=6 width=100% align=”center”>
        <tr><th colspan="6">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Induk kependudukan</th>
            <th>Agama</th>
            
            <th colspan="2">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>   
                <td><?php echo "$kelamin"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="2"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalpengembalian"; ?> </td> -->

            </tr>

        </tr>
        
        <tr>
            <th colspan="6">Data Rental Mobil</th>
        </tr>
        <tr>
        <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td><?php echo "$namamobil"; ?></td>
            <td><?php echo "$jenismobil"; ?></td>
            <td><?php echo "$merek"; ?></td>
            <td><?php echo "$tanggalpeminjaman"; ?></td>
            <td><?php echo "$tanggalkembali"; ?></td>
            <td><?php echo "$supir"; ?></td>
           

        </tr>
        <tr>
            <th colspan="6">Rincian Biaya</th>
        </tr>
        <tr>
            <th colspan="5" align="left">Lama Pinjaman</th>
            <td><?php echo $difff->format('%a') ;
            echo" Hari";?></td>
        </tr>
        <tr>
            <th colspan="5" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayaharian);
             ?></td>
        </tr>

        <tr>
            <th colspan="5" align="left">Telat Mengembalikan</th>
            <td><?php echo $diff->format('%a');
            echo " Hari"; ?></td>
        </tr>
        <tr>
            <th colspan="5" align="left">Denda</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="6">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Biaya(Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya);?></td>
        </tr>
        <tr>
        <th colspan="5" align="left">Total Denda(Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>   
        <tr>
            <th colspan="6">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="5" align="left">Total Pembayaran(Biaya Telat + Total Denda) </th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>
     
      

</tr> 
    
    </table>
    <form action="keterangan.php" method="post">
    <br>
    Masukan Uang pembayaran
        <input type="text" name="uangpembayaran">
        <input type="submit" value="Bayar" name="save">  
        <input type="hidden" name="totalpembayaran" value=<?php echo "$totalpembayaran";?> >
        </form>
      
  
    <div style=text-align:right>Bandung,<?php echo date('d  F  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
</fieldset>
</html>