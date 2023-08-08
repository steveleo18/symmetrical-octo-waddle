<h1>Laporan Transaksi Slip Gaji & Pengeluaran Biaya</h1>
<hr>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>
<body>
    <label for="slide_menu_right" class="menu_button"></label>
    <input id="slide_menu_right" class="menu_toggle" type="checkbox">



    <div class="menu_wrap">

        <label for="slide_menu_right" class="menu_close"></label>
        
        <ul class="menu_list">
        <li><a href="index.php">Home</a></li>
            <li><a href="tam_pegawai.php">Input Pegawai</a></li>
            <li><a href="tam_gaji.php">Input Gaji & Pengeluaran Biaya</a></li>
            <li><a href="jadwal_pegawai.php">Jadwal Kerja Pegawai</a></li>
            <li><a href="laporan_pegawai.php">Laporan Daftar Pegawai</a></li>
            <li><a href="laporan_gaji.php">Laporan Daftar Gaji & Pengeluaran Biaya</a></li>
            <li><a href="jurnal_umum.php">Jurnal Umum</a></li>
            <li><a href="buku_besar.php">Buku Besar</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </div>
    <label for="slide_menu_right" class="menu_overlay"></label>






<table class="t_all" cellspacing="0" border="1" >
<style>
.t_all{
    width: 100%;
    font-size: 30px;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    color:black;
};
</style>

<br>

<h2>Transaksi Slip Gaji</h2>
<br>
    <tr>
        <th>ID Transaksi</th>
        <th>Nama</th>
        <th>Gaji Pokok</th>
        <th>Gaji Lembur</th>
        <th>Total Gaji</th>
        <th>Kode Akun</th>
        <th>Nama Akun</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_gaji");
    while($tampil = mysqli_fetch_array($ambildata)){
        ?>

        <tr>
            <td><?php echo $tampil["id_transaksi"]; ?></td>
            <td><?php echo $tampil["nama"]; ?>   </td>
            <td>Rp. <?php echo number_format($tampil["gaji_lembur"]); ?>     </td>
            <td>Rp. <?php echo number_format($tampil["gaji_pokok"]); ?>     </td>
            <td>Rp. <?php echo number_format($tampil["total_gaji"]); ?>     </td>
            <td><?php echo $tampil["kode_akun"]; ?>   </td>
            <td><?php echo $tampil["nama_akun"]; ?>   </td>

            
        </tr>
<?php }
    ?>
    </table>



    <br>
    <br>
    <br>

    <table class="t_all" cellspacing="0" border="1" >
<style>
.t_all{
    width: 100%;
    font-size: 30px;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    color:black;
};
</style>
    
<h2>Transaksi Pengeluaran Biaya</h2>
<br>
    <tr>
        <th>ID Transaksi</th>
        <th>Total Pengeluaran</th>
        <th>Keterangan</th>
        <th>Kode Akun</th>
        <th>Nama Akun</th>
     
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_gaji");
    while($tampil = mysqli_fetch_array($ambildata)){
        ?>

        <tr>
            <td><?php echo $tampil["id_transaksi"]; ?></td>
            <td>Rp. <?php echo number_format($tampil["total_pengeluaran"]); ?>     </td>
            <td><?php echo $tampil["keterangan"]; ?>   </td>
            <td><?php echo $tampil["kode_akun2"]; ?>   </td>
            <td><?php echo $tampil["nama_akun2"]; ?>   </td>

            
        </tr>
<?php }
    ?>
    </table>

    <br>
    <br>
    <br>