<h1>Tambahkan Data Gaji Pegawai & Pengeluaran Biaya</h1>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="style/bootstrap.css">

<br>
<hr>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type="text/javascript" src="style/jquery.js"></script>
    <script type="text/javascript"  src="style/rupiah.js"></script>
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
            <li><a href="laporan_gaji.php">Laporan Gaji & Pengeluaran Biaya</a></li>
            <li><a href="jurnal_umum.php">Jurnal Umum</a></li>
            <li><a href="buku_besar.php">Buku Besar</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </div>
    <label for="slide_menu_right" class="menu_overlay"></label>



    <br>
    <br>
    <br>

<div class= "container">
<form action= "" method="post">

<table align= center border="1">






<tr>
    <td align="center" colspan="2"> Input Transaksi Slip Gaji </td>
    
</td>
<tr>



<tr>
    <td width="150" align="center" height="27"> Tanggal Transaksi </td>
    <td ><input type="date" name="tgl_slip" ></td>
</tr>

<tr>
    <td align="center" height="27"> Nama </td>
    <td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
</tr>


<tr>
    <td align="center" height="27"> Gaji Pokok </td>
    <td> <input type="number" name="gaji_pokok" id="txt1"  onkeyup="sum();" /></td>
</tr>

<tr>
    <td align="center" height="27"> Gaji Lembur </td>
    <td><input type="number" name="gaji_lembur" id="txt2"  onkeyup="sum();" /></td>
</tr>

<tr>
    <td align="center" height="27"> Total Gaji </td>
    <td><input type="number" name="total_gaji" id="txt3"  /></td>
</tr>

<tr>
    <td align="center" height="27"> Kode Akun </td>
    <td><select name="kode_akun">
    <option value="5101">5101</option>
    </select>
</tr>

<tr>
    <td align="center" height="27"> Nama Akun </td>
    <td><select name="nama_akun">
    <option value="Beban Gaji">Beban Gaji</option>
    </select>
</td>
</tr>



<tr>
    <td align="center" colspan="2" height="27"> <b> </b> </td>
    
</td>
<tr>



<tr>
    <td align="center" colspan="2" height="27"> Input Transaksi Pengeluaran Biaya </td>
    
</td>
<tr>


<tr>
    <td width="150" align="center" height="27"> Total Pengeluaran </td>
    <td ><input type="number" name="total_pengeluaran" ></td>
</tr>


<tr>
    <td align="center" height="27"> Keterangan </td>
    <td><input type="text" name="keterangan"></td>
</tr>

<tr>
    <td align="center" height="27"> Kode Akun </td>
    <td><select name="kode_akun2">
    <option value="1101">1101</option>
    </select>

</tr>

<tr>
    <td align="center" height="27"> Nama Akun </td>
    <td><select name="nama_akun2">
    <option value="Kas">Kas</option>
    </select>
</td>
</tr>


<tr>
    <td colspan="2" align="center" height="30"><input type="submit" value="Simpan" name="proses"></td>

</tr>


</table>
</form>



</div>

<script>
  function sum() {
       var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;

       var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
       if (!isNaN(result)) {
           document.getElementById('txt3').value = result;
       }
   }
</script>




<?php
include "koneksihr.php";

if(isset($_POST['proses'])){
   mysqli_query($koneksi,"insert into data_gaji set 
   nama = '$_POST[nama]',
   gaji_pokok = '$_POST[gaji_pokok]',
   gaji_lembur = '$_POST[gaji_lembur]',
   total_gaji =  '$_POST[total_gaji]',
   tgl_slip = '$_POST[tgl_slip]',
   kode_akun = '$_POST[kode_akun]',
   nama_akun =  '$_POST[nama_akun]',
   total_pengeluaran = '$_POST[total_pengeluaran]',
   keterangan =  '$_POST[keterangan]',
   kode_akun2 = '$_POST[kode_akun2]',
   nama_akun2 =  '$_POST[nama_akun2]'");

   echo "Data Yang Ditambahkan Telah Tersimpan";
}
?>

<br><br>
<br>

<h3> Data Gaji Pegawai </h3>
<hr>
<table class="t_all" cellspacing="1" border="1">
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

    <tr>
		<th>No</th>
        <th>Tanggal Transaksi</th>
        <th>Nama</th>
        <th>Gaji Pokok</th>
        <th>Gaji Lembur</th>
        <th>Total Gaji</th>
        <th>Total Pengeluaran</th>
        <th>Keterangan</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_gaji");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[tgl_slip]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[gaji_pokok]</td>
            <td>$tampil[gaji_lembur]</td>
            <td>$tampil[total_gaji]</td>
            <td>$tampil[total_pengeluaran]</td>
            <td>$tampil[keterangan]</td>
            <td><a href='?kode=$tampil[id_transaksi]'> Hapus </a></td>
            <td><a href='gaji-update.php?kode=$tampil[id_transaksi]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>




    

    <?php
    include "koneksihr.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"DELETE FROM data_gaji WHERE id_transaksi='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tam_gaji.php'>";

    }
    ?>



        
    