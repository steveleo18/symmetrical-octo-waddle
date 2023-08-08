
    <link rel="stylesheet" href="style.css">



<?php
include "koneksihr.php";
$sql=mysqli_query($koneksi,"SELECT * from data_pegawai where id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>





<h1> Update Data Pegawai </h>
<br>
<hr>


<form action="" method="post">
<table align="center">
    
    <tr>
        <td> Password </td>
        <td> <input type="text" name="password" value="<?php echo $data['password']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Jabatan</td>
        <td> <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>"> </td>
    </tr>
    <tr>
        <td> Alamat</td>
        <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
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
mysqli_query($koneksi, "UPDATE data_pegawai set  
password = '$_POST[password]',
nama = '$_POST[nama]',
jabatan = '$_POST[jabatan]',
alamat = '$_POST[alamat]'
where id = '$_GET[kode]'");

echo "Data Pegawai telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tam_pegawai.php'>";

}

?>

        
    