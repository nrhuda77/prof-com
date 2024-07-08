<?php
// Mendapatkan data dari API menggunakan file_get_contents
$api_url = 'https://app.lintasinternasionalberkarya.com/endpoint';
$data = file_get_contents($api_url);

// Jika Anda mengharapkan data dalam format JSON, Anda bisa menguraikannya menjadi array dengan true
// $data = json_decode($data, true);

// Menampilkan data
// echo "<pre>";
// print_r($data);
$numbers = [];

// Loop untuk menambahkan angka dari 1 sampai 100 ke dalam array
for ($i = 1; $i <= $data; $i++) {
    $numbers[] = $i;
}

// Mengubah array menjadi format JSON untuk dapat diproses oleh JavaScript
echo json_encode($numbers);

?>