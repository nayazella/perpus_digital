<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");

    if ($query) {
        echo "<script>
        alert('Hapus Data Berhasil');
        window.location.href='?page=kategori';
        </script>";
    } else {
        echo "Gagal menghapus data";
    }
}
?>