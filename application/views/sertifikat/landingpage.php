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
            <a href="<?= base_url('tutorial/index'); ?>">Tutorial</a>
            <a href="<?php echo base_url('auth') ?>">Sign In</a>
            <a href="<?php echo base_url('auth/registration') ?>" class="btn-sign-up">Sign Up</a>
        </div>
    </header>

    <section>
        <div>
            <h2>Start Managing Your Certificates Easily and Securely Today!</h2>
            <p>Where certificate management meets blockchain technology!
                Take control of your certificates effortlessly and with utmost security.
                Our innovative platform empowers you to streamline certificate creation, distribution, and verification processes like never before.
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