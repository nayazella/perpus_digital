<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <?php
                    if (isset($_POST['submit'])){
                        $kategori = strtolower($_POST['kategori']);
                    $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori'");
                    $check = mysqli_num_rows($cek);
                    if ($check > 0) {
                        echo " Data yang dimasukan sama";
                    } else {
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES ('$kategori')");
                        if ($query) {
                            echo '<script>alert("Tambah Data Berhasil"); </script>';
                        } else {
                            echo '<script>alert("Tambah Data Gagal"); </script>';
                        }
                      }
                  }
                 ?>
                 <div class="row mb-3">
                     <label class="col-md-3 form-label">Nama Kategori</label>
                     <div class="col-md-6">
                        <input type="text"  class="form-control" name="kategori" plaseholder="Masukan Nama kategori" required>
                     </div>
                 </div>
                  <div class="row">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                     </div>
                  </div>
            </form>
        </div>
    </div>
</div>

