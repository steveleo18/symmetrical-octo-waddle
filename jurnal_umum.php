<h1>Jurnal Umum</h1>
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


<br>



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

</style>

    <tr>
        <th>Tanggal</th>
		<th>No. Bukti</th>
        <th>Akun</th>
        <th>Akun</th>
        <th>Keterangan</th>
        <th>Debit</th>
		<th>Kredit</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_gaji");
    $debit = 0; $kredit = 0;
    while($tampil = mysqli_fetch_array($ambildata)){
        $debit += $tampil["total_gaji"];
        $kredit += $tampil["total_pengeluaran"];

        ?>

        <tr>
            <td><?php echo $tampil["tgl_slip"]; ?></td>
            <td><?php echo $tampil["id_transaksi"]; ?></td>
            <td><?php echo $tampil["nama_akun"]; ?>   </td>
            <td><?php echo $tampil["nama_akun2"]; ?>   </td>
            <td><?php echo $tampil["keterangan"]; ?>   </td>
            <td>Rp. <?php echo number_format($tampil["total_gaji"]); ?>     </td>
            <td>Rp. <?php echo number_format($tampil["total_pengeluaran"]); ?>     </td>

            
        </tr>

  <?php
    }
    ?>

    <tr>
        <td colspan="5"></td>
        <td>Rp. <b><?php echo number_format($debit); ?>  </b></<td>
        <td>Rp. <b><?php echo number_format($kredit); ?>  </b></<td>

    </tr>



    </table>