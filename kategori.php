<div class="w-100">
<h1 class="mt-4">Kategori Buku</h1>

<div class="mb-3 clearfix">
    <?php if ($_SESSION['user']['level']= 'admin') ; ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=kategori" data-toggle="collapse" data-target="collapsetwo"></a>

    </li>
    <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data</a>
</div>

<div class="clearfix">
   <table class="table table-bordered" id="dataTable" width="85px" cellspacing="0">
     <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>                     
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $query = mysqli_query($koneksi,  "SELECT * FROM kategori");
        while ($data = mysqli_fetch_array($query)) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['kategori']; ?></td>
            <td>
                <a href="?page=kategori_ubah&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-info">Ubah</a>
                <a href="?page=kategori_hapus&id=<?=  $data['id_kategori']; ?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
          <?php endwhile; ?>
    </tbody>
  </table>
 </div>
</div>

