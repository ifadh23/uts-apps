<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Data Program Studi</h1>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Program Studi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Program Studi</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sistem Informasi Manajemen</td>
                            <td>Mempelajari pengelolaan informasi dan data dalam organisasi.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Analisis Data</td>
                            <td>Fokus pada teknik pengolahan dan analisis data untuk pengambilan keputusan.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>Mempelajari pengembangan aplikasi dan sistem manajemen basis data.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Keamanan Siber</td>
                            <td>Mengkaji bagaimana melindungi data dan informasi dari ancaman.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Manajemen Proyek TI</td>
                            <td>Mempelajari pengelolaan proyek teknologi informasi.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ilmu Komputer</td>
                            <td>Menyelidiki aspek dasar komputer dan algoritma.</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Data Science</td>
                            <td>Fokus pada analisis data dan pengolahan informasi.</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Desain Interaksi Pengguna</td>
                            <td>Mempelajari cara mendesain antarmuka pengguna yang efektif.</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Manajemen Bisnis Digital</td>
                            <td>Mempelajari penggunaan teknologi informasi dalam bisnis.</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Kecerdasan Buatan</td>
                            <td>Mengkaji penerapan algoritma AI untuk analisis data.</td>
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