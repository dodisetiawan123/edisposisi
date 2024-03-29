
<?php include 'd_layouts/head-main.php'; ?>

<head>
    <title>Direksi | E-dispos</title>
    <?php include 'd_layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
    
    <?php include 'd_layouts/head-style.php'; ?>
</head>

<?php include 'd_layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'd_layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-center">
                            <h4 class="mb-sm-0 font-size-18">LIST DOKUMEN</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered table-hover dt-responsive w-100">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="max-width:20px">No</th>
                                            <th style="max-width:350px">Detail</th>
                                            <th style="max-width:100px">Lampiran</th>
                                            <th style="max-width:270px">Status</th>
                                            <th style="min-width:210px">Pilihan</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $no = 0;?>
                                        <?php foreach ($dokumen as $data) {?>
                                        <tr style="cursor: pointer;">
                                            <td><?php echo $no = $no+1;  ?></td>
                                            <td>
                                               <strong> Pengirim :</strong> <?php echo $data->nama_pengirim; ?> <br>
                                               <strong> No Surat :</strong> <?php echo $data->no_surat; ?> <br>
                                               <strong> No Agenda :</strong> <?php echo $data->no_agenda; ?> <br>
                                                <strong>Diterima Tanggal  :</strong><?php echo $data->tanggal; ?><br>
                                                <strong>Perihal  :</strong><?php echo $data->perihal; ?>
                                            </td>
                                            <td>
                                                <a href="<?=site_url('general/viewfile/'.$data->file_dokumen)?>" target="_blank"><button type="button" class="btn btn-secondary btn-sm">Lihat</button></a>
                                            </td>
                                            <td>
                                                <table class="table table-bordered table-sm">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Tujuan dokumen</th>
                                                      <th scope="col">Status</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                <?php foreach ($model->get_statusdokumen($data->id_dokumen) as $datastatus) { ?>
                                                    <tr>
                                                      <td><?php echo $datastatus->first_name.' '.$datastatus->last_name; ?></td>
                                                      <td style="width: 80px;" class="<?php if ($datastatus->status == 'Finished') {
                                                          echo 'bg-success';
                                                      } else if ($datastatus->status == 'OnAction'){
                                                          echo 'bg-danger';
                                                      } else if ($datastatus->status == 'OnProgress'){
                                                          echo 'bg-secondary';
                                                      }else if ($datastatus->status == 'Continued'){
                                                          echo 'bg-info';
                                                      } ?>"><strong class="text-light"><?php echo $datastatus->status ?></strong></td>
                                                    </tr>
                                                       <?php $user_id[] = $datastatus->id; } ?>
                                                  </tbody>
                                                </table>
                                            </td>
                                            
                                            <td>
                                                <div>
                                                <?php if ($data->status_dokumen == 'OnProgress'): ?>
                                                    <div class="">
                                                        <button type="button" class="btn btn-info w-xs btn-md open-homeEvents-reject" data-bs-toggle="modal" data-bs-target="#reject" data-id="<?php echo $data->id_dokumen ?>">Diterima</button>
                                                        <button type="button" id="accept" class="btn btn-primary btn-md w-xs open-homeEvents" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?php echo $data->id_dokumen ?>">Lanjutkan dokumen</button>
                                                    </div>
                                                    
                                                <?php endif ?>

                                                <?php if ($data->status_dokumen == 'OnAction'): ?>
                                                    <div class="">
                                                        <button type="button" class="btn btn-success w-xs btn-md open-homeEvents-finish" data-bs-toggle="modal" data-bs-target="#finished" data-id="<?php echo $data->id_dokumen ?>">Selesai</button>
                                                    </div>
                                                    
                                                <?php endif ?>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>

                            </div>
                            
                             <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Keterangan status dokumen user :</h6>
                                         <table class="table table-bordered table-sm">
                                          <thead>
                                            <tr>
                                              <th scope="col" style="width:100px">Status</th>
                                              <th scope="col" style="">Keterangan status</th>
                                            </tr>
                                          </thead>
                                          <tbody>   
                                            <tr>
                                              <td class="bg-secondary"><strong class="text-light">OnProgress</strong></td>
                                              <td>Dokumen diserahkan ke user</td>
                                            </tr>
                                            <tr>
                                              <td class="bg-info"><strong class="text-light">Continued</strong></td>
                                              <td>Dokumen sudah di lanjutkan ke user lain</td>
                                            </tr>
                                            <tr>
                                              <td class="bg-danger"><strong class="text-light">OnAction</strong></td>
                                              <td>Permintaan sedang di kerjakan</td>
                                            </tr>
                                            <tr>
                                              <td class="bg-success"><strong class="text-light">Finished</strong></td>
                                              <td>Permintaan selesai di kerjakan</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                                    
                                   
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->
     <!-- Static Backdrop Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">

                                            <form enctype="multipart/form-data" name="lanjutkan" onsubmit='disableButton()' accept-charset="utf-8" method="post" action="<?php echo site_url('direksi/disposisi/') ?>"> 
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Lanjutkan Dokumen</h5>
                                                   
                                                </div>
                                                <div class="modal-body">    
                                                     <input type="hidden" id="id_dokumen" name="id_dokumen">
                                                    <div class="form-group mb-3">
                                                        <label for="exampleFormControlTextarea1">Keterangan</label>
                                                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <label for="exampleFormControlTextarea1">Lanjutkan ke-</label>
                                                        <div class="col-md-6">
                                                             <h5 class="font-size-14 mb-2">DIREKSI
                                                                </h5>
                                                    <div class="form-group">
                                                         <?php foreach ($users as $data) {?>
                                                        <div class="form-check">
                                                                    <input class="form-check-input" name="id_users[]" type="checkbox" id="<?php echo $data->id ?>" value="<?php echo $data->id ?>">
                                                                    <label class="form-check-label" for="<?php echo $data->id ?>">
                                                                        <?php echo $data->first_name.' '.$data->last_name.'('.$data->email.')' ?>
                                                                    </label>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-size-14 mb-2">GM BIRO/DIVISI
                                                                </h5>
                                                    <div class="form-group">
                                                         <?php foreach ($usersgm as $data) {?>
                                                        <div class="form-check">
                                                                    <input class="form-check-input" name="id_users[]" type="checkbox" id="<?php echo $data->id ?>" value="<?php echo $data->id ?>">
                                                                    <label class="form-check-label" for="<?php echo $data->id ?>">
                                                                        <?php echo $data->first_name.' '.$data->last_name.'('.$data->email.')' ?>
                                                                    </label>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" id="close" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="btn">Lanjutkan</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="reject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('direksi/acceptdokumen/') ?>">
                                                        <input type="hidden" name="id_users" value="<?php echo $this->ion_auth->user()->row()->id ?>">
                                                <div class="modal-header">

                                                    <h5 class="modal-title" id="staticBackdropLabel">Terima dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="alert alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                                            <i class="mdi mdi-book d-block display-2 mt-2 mb-2 text-info"></i>
                                                            <h5> <p>Terima dokumen?</p></h5>
                                                           
                                                        </div>
                                                        <input type="hidden" id="id_dokumenaccept" name="id_dokumen">
                                                    <div class="form-group mb-3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info">Diterima</button>
                                                </div>

                                                  </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="finished" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('direksi/finishdokumen/') ?>">
                                                        <input type="hidden" name="id_users" value="<?php echo $this->ion_auth->user()->row()->id ?>">
                                                <div class="modal-header">

                                                    <h5 class="modal-title" id="staticBackdropLabel">Selesaikan dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="alert alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                                            <i class="mdi mdi-book-check d-block display-2 mt-2 mb-2 text-success"></i>
                                                            <h5> <p>Selesaikan dokumen?</p></h5>
                                                           
                                                        </div>
                                                    
                                                    
                                                        <input type="hidden" id="id_dokumenfinish" name="id_dokumen">
                                                    <div class="form-group mb-3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Selesai</button>
                                                </div>

                                                  </form>
                                            </div>
                                        </div>
                                    </div>

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'd_layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'd_layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Sweet alert init js-->
<script src="<?php echo base_url('assets/js/pages/sweetalert.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script>
    function disableButton() {
        var btn = document.getElementById('btn');
        btn.disabled = true;
        btn.innerText = 'Posting...'
    }
</script>
<script type="text/javascript">
    $(document).on("click", ".open-homeEvents", function () {
     var eventId = $(this).data('id');
     $("#id_dokumen").val(eventId);

     $.ajax({ 
            type: 'POST', 
            url: '<?php echo site_url('direksi/requser/') ?>', 
            data: { id_dokumen:eventId }, 
            dataType: 'json',
            success: function (data) { 
                $.each(data, function(index, element) {
                   $('#'+element.id).attr("checked", "checked");
                   $('#'+element.id).attr("disabled", "disabled");
                });
            }
        });
    });

    $(document).on("click", "#close", function () {
     $('.form-check-input').attr("checked", false);
     $('.form-check-input').attr("disabled", false);
     
    });

    $(document).on("click", ".open-homeEvents-reject", function () {
     var eventId = $(this).data('id');
     $("#id_dokumenaccept").val(eventId);
    });

    $(document).on("click", ".open-homeEvents-finish", function () {
     var eventId = $(this).data('id');
     $("#id_dokumenfinish").val(eventId);
    });
   

    <?php if($this->session->flashdata('done')){ ?>
    $(document).ready(function(){
         Swal.fire(
            {
                title: 'Dokumen berhasil terkirim',
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#5156be',
                cancelButtonColor: "#fd625e"
            }
        )

        });
    <?php } ?>
    <?php if($this->session->flashdata('error')){ ?>
    $(document).ready(function(){
         Swal.fire(
            {
                title: 'Dokumen Gagal terkirim',
                text : 'Silahkan ulangi lagi',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#5156be',
                cancelButtonColor: "#fd625e"
            }
        )

        });
    <?php } ?>
</script>

</body>

</html>