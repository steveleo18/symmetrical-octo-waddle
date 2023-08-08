<!DOCTYPE html>

    <link rel="stylesheet" href="style.css">



<?php
include "koneksihr.php";
$sql=mysqli_query($koneksi,"SELECT * from tab_jadwal_pegawai where nama ='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>




<h1> Update Jadwal Kerja Pegawai </h1>
<br>
<hr>



<form action="" method="post">
<table align="center">
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>

<br>

    <tr>
        <td> Tanggal Masuk </td>
        <td> <input type="date" name="tgl_masuk" value="<?php echo $data['tgl_masuk']; ?>"> </td>
    </tr>


<br>

    <tr>
        <td> Jam Kerja </td>
        <td> <select name="jam_kerja" value="<?php echo $data['jam_kerja']; ?>">
        <option value="Morning (05.00-14.00)">Morning (05.00-14.00)</option>
        <option value="Afternoon (13.00-22.00)">Afternoon (13.00-22.00)</option>
        <option value="Midlle Morning (10.00-19.00)">Midlle Morning (10.00-19.00)</option>
        <option value="Evening (19.00-04.00)">Evening (19.00-04.00)</option>
        <option value="Midnight (22.00-07.00)">Midnight (22.00-07.00)</option>
        </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksihr.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "UPDATE tab_jadwal_pegawai set  
tgl_masuk = '$_POST[tgl_masuk]',
jam_kerja = '$_POST[jam_kerja]'
where nama = '$_GET[kode]'");

echo "Data Jadwal Kerja Pegawai telah diubah";
echo "<meta http-equiv=refresh content=1;URL='jadwal_pegawai.php'>";

}

?>

        
    