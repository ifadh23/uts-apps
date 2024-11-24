<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Wowo Kopling</td>
                            <td>Sistem Informasi Manajemen</td>
                            <td>01-08-2020</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fitri Seblak</td>
                            <td>Analisis Data</td>
                            <td>01-08-2021</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rudi Baskom</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>01-08-2019</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lisa Blackpink</td>
                            <td>Keamanan Siber</td>
                            <td>01-08-2020</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Joko Mable</td>
                            <td>Manajemen Proyek TI</td>
                            <td>01-08-2021</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Siti Cendol</td>
                            <td>Ilmu Komputer</td>
                            <td>01-08-2018</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Agus Rendang</td>
                            <td>Data Science</td>
                            <td>01-08-2021</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Wati Injeksi</td>
                            <td>Desain Interaksi Pengguna</td>
                            <td>01-08-2020</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Budi Knalpot</td>
                            <td>Manajemen Bisnis Digital</td>
                            <td>01-08-2019</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Rina Nose</td>
                            <td>Kecerdasan Buatan</td>
                            <td>01-08-2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<?= $this->endSection(); ?>