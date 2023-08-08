<h1>Buku Besar</h1>
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
    font-size: 25px;
};
</style>

<h2> Buku Besar Kas</h2>

    <tr>
		<th>Tanggal</th>
        <th>No. Bukti</th>
        <th>Keterangan</th>
		<th>Debit</th>
        <th>Kredit</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT tgl_slip, id_transaksi, keterangan, debit_pengeluaran, total_pengeluaran 
    FROM `data_gaji` WHERE kode_akun2 = '1101';");
    $total= 0;
    while($tampil = mysqli_fetch_array($ambildata)){
        $total += $tampil["total_pengeluaran"];
        ?>


        <tr>
            <td><?php echo $tampil["tgl_slip"]; ?></td>
            <td><?php echo $tampil["id_transaksi"]; ?>   </td>
            <td><?php echo $tampil["keterangan"]; ?>   </td>
            <td>Rp. <?php echo number_format($tampil["debit_pengeluaran"]); ?>     </td>
            <td>Rp. <?php echo number_format($tampil["total_pengeluaran"]); ?>     </td>

            
        </tr>


        <?php
    }
    ?>

    <tr>
        <td colspan="3"></td>
        <td>Rp. 0</td>

        <td>Rp. <b><?php echo number_format($total); ?>  </b></<td>
    </tr>





    </table>





    <!DOCTYPE html>







<table class="t_all" cellspacing="0" border="1">
<style>
.t_all{
    width: 100%;
	border: 1px solid black;
	color: #605c5c;
	text-align: center;
    color:black;
};
</style>








<br>
<br>
<br>
<br>



    <h2> Buku Besar Beban Gaji</h2>

    <tr>
		<th>Tanggal</th>
        <th>No. Bukti</th>
        <th>Keterangan</th>
		<th>Debit</th>
        <th>Kredit</th>
    </tr>

    <?php
    include "koneksihr.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT tgl_slip, id_transaksi, keterangan, total_gaji, kredit_gaji
    FROM `data_gaji` WHERE kode_akun = '5101';");
    $totalbebangaji = 0;
    while($tampil = mysqli_fetch_array($ambildata)){
        $totalbebangaji += $tampil["total_gaji"];        

        ?>

        <tr>
            <td><?php echo $tampil["tgl_slip"]; ?></td>
            <td><?php echo $tampil["id_transaksi"]; ?>   </td>
            <td><?php echo $tampil["keterangan"]; ?>   </td>
            <td>Rp. <?php echo number_format($tampil["total_gaji"]); ?>     </td>
            <td>Rp. <?php echo number_format($tampil["kredit_gaji"]); ?>     </td>

            
        </tr>




        <?php
    }
    ?>

    <tr>
        <td colspan="3"></td>
        <td>Rp. <b><?php echo number_format($totalbebangaji); ?>  </b></<td>
        <td> Rp. 0 </td>

    </tr>

    </table>