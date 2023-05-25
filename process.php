<?php
// Mengambil data dari request POST
$number = $_POST['number'];
$text = $_POST['text'];

// Menyusun variabel array
$array = array();
for ($i = 0; $i < $number; $i++) {
  $array[] = $text . ' merupakan index ke-' . $i;
}

// Mengubah array menjadi JSON
$response = json_encode($array);

// Mengirimkan response JSON
header('Content-Type: application/json');
echo $response;
?>
