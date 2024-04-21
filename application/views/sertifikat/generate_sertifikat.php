<body>
    <!--Navbar-->

    <!-- From -->
    <section>
        <h1 class="title">Generate Sertifikat</h1>
        <main>


            <!-- Tampilkan pesan sukses jika ada -->
            <?php if (isset($success_message)) : ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>
            <form action="<?= site_url('generate_sertifikat/submit_form') ?>" method="post">
                <div class="user-info">
                    <div class="input-box">
                        <label for="First">First Name</label>
                        <input type="text" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="input-box">
                        <label for="Last">Last Name</label>
                        <input type="text" placeholder="Last Name" name="last_name" required>
                    </div>
                    <div class="input-box">
                        <label for="Organization">Organization</label>
                        <input type="text" placeholder="Organization" name="organization" required>
                    </div>
                    <div class="input-box">
                        <label for="Sertifikat">Certificate For</label>
                        <input type="text" placeholder="Certificate For" name="certificate_for" required>
                    </div>
                    <div class="input-box">
                        <label for="Assigned">Assigned Date</label>
                        <input type="date" placeholder="" name="assigned_date" required>
                    </div>
                    <div class="input-box">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                </div>
                <!-- Tombol Submit -->
                <div class="input-box">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </main>
    </section>
</body>