
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Login | E-Disposisi</title>
    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<body>
<div class="auth-page" style="    width: 100%;
    max-width: 420px;
    padding: 15px;
    margin: 0 auto;">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xxl-12 col-lg-12 col-md-12">
                <div class="auth-full-page-content d-flex p-sm-2 p-5">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Login E-Disposisi</h5>
                                    <p class="text-muted mt-2">Silahkan login untuk melanjutkan.</p>
                                </div>
                                
                                <div id="infoMessage"><span class="text-danger"><?php echo $message;?></span></div>
                                <?php echo form_open("auth/login");?>
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <?php echo form_input($identity);?>
                                        
                                    </div>
                                    <div class="mb-3 ">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="">
                                                    <a href="auth-recoverpw.php" class="text-muted">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group auth-pass-inputgroup">
                                            <?php echo form_input($password);?>
                                            <span class="text-danger"></span>
                                            <button class="btn btn-light ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                <label class="form-check-label" for="remember-check">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                               <?php echo form_close();?>

                              

                                
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script>  Develop with <i class="mdi mdi-heart text-danger"></i> IT/SAP Team</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>


<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- password addon init -->
<script src="<?php echo base_url('assets/js/pages/pass-addon.init.js') ?>"></script>

</body>

</html>