
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Reset Password | E-Disposisi</title>
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
                                    <h5 class="mb-0">Selamat datang di aplikasi E-dispos</h5>
                                    <p class="text-muted mt-2">Masukkan password baru untuk memulai menggunakan aplikasi.</p>
                                </div>
                                
                               

<div id="infoMessage"><span class="text-danger"><?php echo $message;?></span></div>

<?php echo form_open(uri_string());?>

            
      
      <div class="form-group mt-2">
          <label for="first_name">Email : </label> 
          <input type="text" class="form-control" value="<?php echo $this->ion_auth->user()->row()->email?>" disabled>
          <input type="hidden" class="form-control" id="first_name" value="<?php echo $first_name['value'] ?>" name="first_name">
        </div>
        <div class="form-group mt-2">
          <label for="first_name">Jabatan : </label> 
          <input type="text" class="form-control" value="<?php echo $first_name['value'].' '.$last_name['value'] ?>" disabled>
          <input type="hidden" class="form-control" id="first_name" value="<?php echo $first_name['value'] ?>" name="first_name">
        </div>
       <div class="form-group mt-2">
          <input type="hidden" class="form-control" id="last_name" value="<?php echo $last_name['value'] ?>" name="last_name">
        </div>
      <div class="form-group mt-2">
          <input type="hidden" class="form-control" id="company" value="<?php echo $company['value'] ?>" name="company">
        </div>
         <div class="form-group mt-2">
            <label for="first_name">No Whatsapp : </label>
            <input type="text" class="form-control" value="<?php echo $phone['value']?>" disabled>
          <input type="hidden" class="form-control" id="phone" value="<?php echo $phone['value'] ?>" name="phone">
        </div>

      <div class="form-group mt-2">
            <label for="first_name">Password : </label>
          <input type="password" class="form-control" id="password" value="" name="password" required>
        </div>
        <div class="form-group mt-2">
            <label for="first_name">Confirm Password : </label>
          <input type="password" class="form-control" id="password_confirm" value="" name="password_confirm" required>
        </div>

      <?php if ($this->ion_auth->is_admin()): ?>

          <?php foreach ($groups as $group):?>
              <label class="checkbox" style="display:none">
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?> >
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
      <div class="mb-3 mt-3">
          <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Simpan Password</button>
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
