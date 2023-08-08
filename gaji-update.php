
    <link rel="stylesheet" href="style.css">



<?php
include "koneksihr.php";
$sql=mysqli_query($koneksi,"SELECT * from data_gaji where id_transaksi='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>



<h1> Update Data Gaji Pegawai & Pengeluaran Biaya </h>
<br>
<hr>
<br>



<form action="" method="post">
<table align="center">


<tr>
    <td align="center" colspan="2"> Input Transaksi Slip Gaji </td>
    
</td>
<tr>




    <tr>
        <td width="120"> Tanggal Transaksi </td>
        <td> <input type="date" name="tgl_slip" value="<?php echo $data['tgl_slip']; ?>"> </td>
    </tr>

    <tr>
        <td width="120"> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
  


    <tr>
        <td> Gaji Pokok</td>
        <td> <input type="number" name="gaji_pokok" id="txt1" value="<?php echo $data['gaji_pokok']; ?>"> </td>
    </tr>

    <tr>
        <td> Gaji Lembur</td>
        <td> <input type="number" name="gaji_lembur"  id="txt2" value="<?php echo $data['gaji_lembur']; ?>"> </td>
    </tr>

    <tr>
        <td> Total Gaji</td>
        <td> <input type="number" name="total_gaji" id="txt3" value="<?php echo $data['total_gaji']; ?>"> </td>
    </tr>

    <tr>
        <td> Kode Akun</td>
        <td> <select name="kode_akun" value="<?php echo $data['kode_akun']; ?>">
        <option value="5101">5101</option>
        </td>    
    </tr>

    <tr>
        <td>Nama Akun</td>
        <td> <select name="nama_akun" value="<?php echo $data['nama_akun']; ?>">
        <option value="Beban Gaji">Beban Gaji</option>
        </td>        
    </tr>


<tr>
    <td align="center" colspan="2"> . </td>
    
</td>
<tr>



<tr>
    <td align="center" colspan="2"> Input Transaksi Pengeluaran Biaya </td>
    
</td>
<tr>




    <tr>
        <td width="120"> Total Pengeluaran </td>
        <td> <input type="number" name="total_pengeluaran" value="<?php echo $data['total_pengeluaran']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Keterangan </td>
        <td> <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"> </td>
    </tr>


    <tr>
        <td> Kode Akun</td>
        <td> <select name="kode_akun2" value="<?php echo $data['kode_akun2']; ?>">
        <option value="1101">1101</option>
        </td>    
    </tr>

    <tr>
        <td>Nama Akun</td>
        <td> <select name="nama_akun2" value="<?php echo $data['nama_akun2']; ?>">
        <option value="Kas">Kas</option>
        </td>        
    </tr>



    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>

</table>

</form>




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
mysqli_query($koneksi, "UPDATE data_gaji set  
nama = '$_POST[nama]',
gaji_pokok = '$_POST[gaji_pokok]',
gaji_lembur = '$_POST[gaji_lembur]',
total_gaji =  '$_POST[total_gaji]',
tgl_slip =  '$_POST[tgl_slip]',
kode_akun = '$_POST[kode_akun]',
nama_akun =  '$_POST[nama_akun]',
total_pengeluaran = '$_POST[total_pengeluaran]',
keterangan =  '$_POST[keterangan]',
kode_akun2 = '$_POST[kode_akun2]',
nama_akun2 =  '$_POST[nama_akun2]'
where id_transaksi = '$_GET[kode]'");

echo "Data Pegawai telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tam_gaji.php'>";

}

?>

        
    