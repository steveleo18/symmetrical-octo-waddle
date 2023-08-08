<h1>Tambahkan Data Pegawai</h1>
<br>
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





<div class= "container">


<form action= "" method="post">

<table align= center border="1">

<tr>
    <td align="center" height="27"> Password </td>
    <td> <input type="text" name="password"></td>
</tr>

<tr>
    <td align="center" height="27"> Nama </td>
    <td><input type="text" name="nama"></td>
</tr>

<tr>
    <td align="center" height="27"> Jabatan </td>
    <td><input type="text" name="jabatan"></td>
</tr>

<tr>
    <td align="center" height="27"> Alamat </td>
    <td><input type="text" name="alamat"></td>
</tr>

<tr>
    <td colspan="2" align="center" height="30"><input type="submit" value="Simpan" name="proses"></td>

</tr>


</table>
</form>


</div>



<?php
include "koneksihr.php";

if(isset($_POST['proses'])){
   mysqli_query($koneksi,"insert into data_pegawai set 
   password = '$_POST[password]',
   nama = '$_POST[nama]',
   jabatan = '$_POST[jabatan]',
   alamat =  '$_POST[alamat]'");

   echo "Data Pegawai Yang Ditambahkan Telah Tersimpan";
}

?>

<br><br>
<br>

<h3> Data Pegawai </h3>
<hr>
<table class="t_all" cellspacing="1" border="1">
<style>
.t_all{
	width: 100%;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    font-size: 18px;
    color:black;
};
</style>


    <tr>
		<th>No</th>
        <th>ID</th>
        <th>Password</th>
        <th>Nama</th>
		<th>Jabatan</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
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
            <td><a href='?kode=$tampil[id]'> Hapus </a></td>
            <td><a href='pegawai-update.php?kode=$tampil[id]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksihr.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"DELETE FROM data_pegawai WHERE id='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tam_pegawai.php'>";

    }
    ?>



        
    