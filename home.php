<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-primary h-100">
            <div class="card-body py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Kategori
                        </div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_kategori; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-layer-group fa-lg text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-success h-100">
            <div class="card-body py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Buku
                        </div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_buku; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-lg text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-info h-100">
            <div class="card-body py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Ulasan
                        </div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_ulasan; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-lg text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-sm border-left-warning h-100">
            <div class="card-body py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Pengguna
                        </div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            <?= $total_user; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-lg text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Login</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="200">Nama</th>
                        <td><?= $_SESSION['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>Level User</th>
                        <td><?= $_SESSION['level'] ?? 'User'; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>