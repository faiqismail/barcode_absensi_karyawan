<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include "../inc/config.php";

$nik = $_POST["nik"];

// Cari ID orang berdasarkan NIK (Anda perlu menyesuaikan query ini dengan struktur database Anda)
$query = "SELECT id_orang, nomerwa FROM Orang WHERE nik = '$nik'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $id_orang = $row["id_orang"];
    $nomerwa = $row["nomerwa"]; // Ambil nomor WhatsApp dari tabel Orang
    $tanggal = date('Y-m-d');
    $jam = date('H:i:s');

    // Masukkan data ke dalam tabel Absen
    $result_absen = mysqli_query($conn, "INSERT INTO absen (id_orang, tanggal, jam)
        VALUES ('$id_orang', '$tanggal', '$jam')");

    if ($result_absen) {
        // Pesan berhasil absen
        $token = "Ea-epgnL8mHr6kXu-Ss-";
        $target = $nomerwa; // Gunakan nomor WhatsApp yang telah diambil dari tabel Orang
        $message = "Anda sudah absen pada tanggal $tanggal jam $jam.";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => $message,
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token" // Ganti TOKEN dengan token Anda
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        echo "Data berhasil disimpan dan pesan WhatsApp terkirim.";
    } else {
        echo "Gagal menyimpan data absen.";
    }
} else {
    echo "NIK tidak valid.";
}
?>
