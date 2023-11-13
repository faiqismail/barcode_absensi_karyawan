<?php
include "inc/config.php";

if(isset($_POST['submit'])){
    // Ambil data dari formulir
    $nik = mysqli_real_escape_string($conn, $_POST['nik']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nomerwa = mysqli_real_escape_string($conn, $_POST['nomerwa']); // Added line for phone number

    // Proses upload file foto
    $target_dir = "upload/";
    $foto_path = $target_dir . basename($_FILES["foto"]["name"]);

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_path)) {
        // File foto berhasil diupload, masukkan data ke dalam database
        $sql = "INSERT INTO orang (nik, nama, nomerwa, foto) VALUES ('$nik', '$nama', '$nomerwa', '$foto_path')"; // Updated SQL query
        if (mysqli_query($conn, $sql)) {
            // Data berhasil disimpan
            echo "<script>
                alert('Data berhasil disimpan.');
                window.location.href = 'view.php';
                </script>";
        } else {
            // Kesalahan dalam mengeksekusi query
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Kesalahan dalam mengunggah foto
        echo "Maaf, terjadi kesalahan saat mengupload foto.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>

