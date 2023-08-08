<?php
include "koneksihr.php";
?>

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




    <div class="page_content">
        <h1>Halaman Dashboard Human Resources</h1>
        <hr>
        <br>
        
        <?php
        $jumlahdatapegawai = mysqli_query($koneksi,"SELECT * FROM data_pegawai");
        $jumlahpegawai = mysqli_num_rows($jumlahdatapegawai);
        ?>
        <h1> Jumlah Pegawai Saat Ini : <?php echo $jumlahpegawai; ?></h1>
        
        <br>

        <?php
        $jumlahdatagaji = mysqli_query($koneksi,"SELECT * FROM data_gaji");
        $jumlahgaji = mysqli_num_rows($jumlahdatagaji);
        ?>
        <h1> Slip Gaji & Pengeluaran Biaya : <?php echo $jumlahgaji; ?></h1>

    </div>
</body>







</html>


