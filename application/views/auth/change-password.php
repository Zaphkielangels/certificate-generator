<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h2 style="color: #0c1c62; font-weight: bold;">Change password for</h2>
                                    <h5><?= $this->session->userdata('reset_email') ?></h5>

                                </div>

                                <?php echo $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                    <div class="form-group">
                                        <label for="new_password1">New Password</label>
                                        <input type="password" class="form-control" id="password1" name="password1">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">Repeat Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <input type="hidden" name="email" value="<?= $this->input->get('email'); ?>">
                                    <input type="hidden" name="token" value="<?= $this->input->get('token'); ?>">

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>