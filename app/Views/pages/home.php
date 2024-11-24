<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->


<head>
    <title>Data Akademik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f8ff;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        section {
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        section:hover {
            transform: scale(1.02);
        }
        h2 {
            color: #007BFF;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Data Akademik</h1>
        <p>Informasi mengenai Mahasiswa, Dosen, dan Program Studi</p>
    </header>

    <section>
        <h2>Data Mahasiswa</h2>
        <p>Website ini menyediakan informasi tentang mahasiswa yang terdaftar di universitas kami. Mahasiswa memiliki berbagai latar belakang dan berkontribusi dalam berbagai bidang ilmu.</p>
    </section>

    <section>
        <h2>Data Dosen</h2>
        <p>Dosen di universitas kami adalah para ahli di bidangnya yang berdedikasi untuk mendidik dan membimbing mahasiswa. Mereka memiliki pengalaman yang luas dan berkomitmen untuk pengembangan akademik.</p>
    </section>

    <section>
        <h2>Program Studi</h2>
        <p>Kami menawarkan berbagai program studi yang dirancang untuk memenuhi kebutuhan pendidikan dan karir mahasiswa. Setiap program studi memiliki kurikulum yang komprehensif dan relevan dengan perkembangan industri.</p>
    </section>
</body>

<?= $this->endSection(); ?>