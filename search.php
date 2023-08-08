<?php 
  header("Content-Type: application/json; charset=UTF-8");
  include 'koneksi.php';
  
  if(isset($_GET["query"])){
    $key = "%".$_GET["query"]."%";
    $query = "SELECT * FROM data_pegawai WHERE nama LIKE ? LIMIT 10";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param('s', $key);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
 
    while ($row = $res1->fetch_assoc()) {
        $output['suggestions'][] = [
            'value' => $row['nama'],
            'nama'  => $row['nama']
        ];
    }
 
    if (! empty($output)) {
        echo json_encode($output);
    }
  }
?>