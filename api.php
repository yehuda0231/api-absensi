<?php
$conn = new mysqli(
    "sql303.infinityfree.com",
    "if0_41884666",
    "PASSWORD_KAMU",
    "if0_41884666_absensi_db"
);

$nama  = $_POST['nama'] ?? '';
$nim   = $_POST['nim'] ?? '';
$kelas = $_POST['kelas'] ?? '';
$waktu = $_POST['waktu'] ?? '';
$mk    = $_POST['matkul_id'] ?? '';

if($nama != '' && $mk != ''){
    $sql = "INSERT INTO absensi (nama,nim,kelas,matkul_id,waktu)
            VALUES ('$nama','$nim','$kelas','$mk','$waktu')";

    echo $conn->query($sql) ? "sukses" : "gagal";
} else {
    echo "data tidak lengkap";
}
?>
