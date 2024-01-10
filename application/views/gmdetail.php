
<?php include 'detail_layouts/head-main.php'; ?>

<head>
    <title>Detail | E-dispos</title>
    <?php include 'detail_layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    
    <?php include 'detail_layouts/head-style.php'; ?>
</head>

<?php include 'detail_layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'detail_layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
      <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex  align-items-center justify-content-center">
                                            <h4 class="mb-sm-0 font-size-18">Detail Dokumen</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap align-middle mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <strong>Pengirim</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->nama_pengirim ?></td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <strong>No. Surat</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_surat ?></td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <strong>No. Agenda</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_agenda ?></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Tanggal </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->tanggal ?></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Perihal </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->perihal ?></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>Status Dokumen </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->status ?></td>
                                                </tr>
                                                     <tr>
                                                    <td>
                                                        <strong>Requestor</strong> 
                                                    </td>
                                                    <td>: <?php foreach ($model->get_statusdokumen($dokumen->id_dokumen) as $datastatus) {
                                                    echo $datastatus->first_name.' '.$datastatus->last_name;
                                                } ?></td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <strong>Ditujukan ke</strong> 
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
                                                      <td style="width: 80px;" class="<?php if ($datastatus->status == 'Accepted') {
                                                          echo 'bg-success';
                                                      } else if ($datastatus->status == 'OnProgress'){
                                                          echo 'bg-secondary';
                                                      }else if ($datastatus->status == 'Continued'){
                                                          echo 'bg-info';
                                                      } ?>"><strong class="text-light"><?php echo $datastatus->status ?></strong></td>
                                                    </tr>
                                                       <?php } ?>
                                                  </tbody>
                                                </table>
                                            </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <strong>Lampiran</strong> 
                                                    </td>
                                                    <td>: <a href="<?php echo base_url("filedoc/".$dokumen->file_dokumen) ?>" target="_blank"><button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">Preview</button></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                

                                <div class="d-print-none mt-3">
                                    <div class="float-end">
                                        <?php if ($dokumen->status == 'OnProgress GM'): ?>
                                               <button type="button" class="btn btn-success btn-md open-homeEvents" data-bs-toggle="modal" data-bs-target="#accept" data-id="<?php echo $dokumen->id_dokumen ?>">Accept</button>  
                                          <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

</div>
<!-- END layout-wrapper -->

 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">

                                            <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('dokumen/disposisi/') ?>"> 
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Lanjutkan Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">    
                                                     <input type="hidden" id="id_dokumen" name="id_dokumen" value="<?php echo $dokumen->
                                                     id_dokumen ?>">
                                                     <input type="hidden" name="token" value="<?php echo $dokumen->
                                                     token ?>">
                                                    <div class="form-group mb-3">
                                                        <label for="exampleFormControlTextarea1">Keterangan</label>
                                                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Diteruskan ke- </label>
                                                    <select class="form-control" name="id_users" id="exampleFormControlSelect1">
                                                       <?php foreach ($users as $data) {?>
                                                      <option value="<?php echo $data->id ?>"><?php echo $data->first_name.' '.$data->last_name.' ('.$data->email.')' ?></option>
                                                        <?php } ?>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="reject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Reject Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                    <div class="form-group mb-3">
                                                        <label for="exampleFormControlTextarea1">Keterangan</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="modal fade" id="accept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('dokumen/acceptdokumen/') ?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Accept dokumen?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        <h5>
                                                    <input type="hidden" name="token" value="<?php echo $dokumen->
                                                     token ?>">
                                                    <input type="hidden" name="id_dokumen" id="id_dokumen" value="<?php echo $dokumen->
                                                     id_dokumen ?>"></h5>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Accept</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

<!-- Right Sidebar -->
<?php include 'detail_layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'detail_layouts/vendor-scripts.php'; ?>

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

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Sweet alert init js-->
<script src="<?php echo base_url('assets/js/pages/sweetalert.init.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
</script>
<script type="text/javascript">
  
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