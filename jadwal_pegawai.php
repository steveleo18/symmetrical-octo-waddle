<h1>Jadwal Kerja Pegawai</h1>
<hr>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
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



    <br>


<div class= "container">
<form action= "" method="post">

<table align= center border="1">
    <tr>
        <td width="150" align="center" height="27"> Nama </td>
        <td ><input type="text" name="nama" ></td>
</tr>

<tr>
    <td align="center" height="27"> Tanggal Masuk </td>
    <td> <input type="date" name="tgl_masuk"></td>
</tr>

<tr>
    <td align="center" height="27"> Jam Kerja </td>
    <td><select name="jam_kerja">
    <option value="Morning (05.00-14.00)">Morning (05.00-14.00)</option>
    <option value="Afternoon (13.00-22.00)">Afternoon (13.00-22.00)</option>
    <option value="Midlle Morning (10.00-19.00)">Midlle Morning (10.00-19.00)</option>
    <option value="Evening (19.00-04.00)">Evening (19.00-04.00)</option>
    <option value="Midnight (22.00-07.00)">Midnight (22.00-07.00)</option>
    </select>


</td>
</tr>

<tr>
    <td align="center" height="27" colspan="2" height="50"><input type="submit" value="Simpan" name="proses"></td>

</tr>


</table>
</form>
</div>

<br>
<br>
<br>
<br>


<?php
include "koneksihr.php";

if(isset($_POST['proses'])){
   mysqli_query($koneksi,"insert into tab_jadwal_pegawai set 
   nama = '$_POST[nama]',
   tgl_masuk = '$_POST[tgl_masuk]',
    jam_kerja = '$_POST[jam_kerja]'");

   echo "Data  Jadwal Kerja Pegawai Yang Ditambahkan Telah Tersimpan";
}

?>



<h2> Jadwal Kerja Pegawai </h2>
<hr>
<table class="t_all" cellspacing="1" border="1">
<style>
.t_all{
	width: 100%;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    color:black;
    font-size:25px;
};
</style>

<br>

    <tr>
		<th>No</th>
        <th>Nama</th>
        <th>Tanggal Masuk</th>
        <th>Jam Kerja</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from tab_jadwal_pegawai");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[tgl_masuk]</td>
            <td>$tampil[jam_kerja]</td>
            <td><a href='?kode=$tampil[nama]'> Hapus </a></td>
            <td><a href='jadwal-pegawai-update.php?kode=$tampil[nama]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksihr.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"DELETE FROM tab_jadwal_pegawai WHERE nama='$_GET[kode]'");
    
    echo "Data Jadwal Pegawai Berhasil Di Hapus";
    echo "<meta http-equiv=refresh content=2;URL='jadwal_pegawai.php'>";

    }
    ?>



        
<script type="text/javascript">
      $(document).ready(function() {
        $( "#nama" ).autocomplete({
          serviceUrl: "search.php",   // Kode php untuk prosesing data
          dataType: "JSON",           // Tipe data JSON
          onSelect: function (suggestion) {
              $( "#nama" ).val(suggestion.nama);
          }
        });
      })
  </script>