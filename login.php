<?php
session_start();
include "koneksihr.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div class="body">
		<div class="sim">
			<h1>HUMAN RESOURCES</h1>
			<p>PT Ma Chung Indonesia</p>
			
		</div>
		<form action="" method="POST">
			<div class="kotak">
				<h1>Silahkan Login</h1>
				<tr>
                <td width="100"> username </td>
                <td> <input type="text" name="username" </td>
                </tr>

                <tr>
                 <td> password </td>
                <td> <input type="password" name="password"> </td>
                </tr>

               <tr>
             
                <td><input type="submit" value="login" name="proseslog"> </td>
                </tr>


			</div>
		</form>
	</div>
</body>

</html>




<?php
if (isset($_POST['proseslog'])) {
  
    

    $sql = mysqli_query($koneksi, "select * from tab_login where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek= mysqli_num_rows($sql);
    if($cek > 0){
        


        $_SESSION['username'] = $_POST['username'];

        echo"<meta http-equiv=refresh content=0;URL='index.php>";


    }else{
        echo "<p align=center><b> Username dan password salaah! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php>";
    }
    }


?>
