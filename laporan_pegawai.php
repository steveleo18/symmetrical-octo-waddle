<h1>Laporan Data Pegawai</h1>
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






<table class="t_all" cellspacing="0" border="1">
<style>
.t_all{
    width: 100%;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    color:black;
    font-size:20px;
};
</style>

<br>
    <tr>
		<th>No</th>
        <th>ID</th>
        <th>Password</th>
        <th>Nama</th>
		<th>Jabatan</th>
        <th>Alamat</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_pegawai");
    while($tampil = mysqli_fetch_array($ambildata)){

        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[password]</td>
            <td>$tampil[nama]</td>
			<td>$tampil[jabatan]</td>
            <td>$tampil[alamat]</td>
            
        <tr>";
        $no++;
    }
    ?>

    </table>