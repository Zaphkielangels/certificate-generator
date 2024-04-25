<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Selamat Datang</title>

</head>

<body>
    <header class="">
        <img src="path/to/your/logo.png" alt="Logo">
        <div class="right-buttons">
            <a href="<?php echo base_url('landing'); ?>">Home</a>
            <a href="<?php echo base_url('sertifikat/generate_sertifikat'); ?>">Create</a>
            <a href="#">Tutorial</a>
            <a href="<?php echo base_url('auth') ?>">Sign In</a>
            <a href="<?php echo base_url('auth/registration') ?>" class="btn-sign-up">Sign Up</a>
        </div>
    </header>

    <section>
        <div>
            <h2>Mulai Kelola Sertifikat Anda dengan Mudah dan Aman Hari Ini!</h2>
            <p>Buat sertifikat mudah hanya dengan beberapa klik dengan (namaweb).
                Unggah desain dan generate sertifikat atau bagikan sebagai PDF secara instan.
            </p>
            <div class="button-container">
                <button type="button" class="btn-buat-sertifikat">Buat Sertifikat</button>
                <button type="button" class="btn-pilih-template">Pilih Template</button>
            </div>

        </div>
        <img src="assets/img/tangan.png" alt="tangans">
    </section>


</body>

</html>