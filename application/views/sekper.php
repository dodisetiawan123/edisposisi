
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Sekper | E-dispos</title>
    <?php include 'layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="<?php echo base_url('assets/libs/dropzone/min/dropzone.min.css') ?>" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/vertical-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Surat masuk</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Surat masuk</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                    <button class="btn btn-secondary btn-success waves-effect btn-label waves-light m-1" tabindex="0" aria-controls="tech-companies-1" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><span><i class="bx bx-plus-medical label-icon"></i> Tambah Dokumen</span></button>
                            </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered table-hover dt-responsive  nowrap w-100">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Detail</th>
                                            <th>Status</th>
                                            <th>Lampiran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody class="">
                                        <?php $no = 0;?>
                                        <?php foreach ($dokumen as $data) {?>
                                        <tr style="cursor: pointer;">
                                            <td><?php echo $no = $no+1;  ?></td>
                                            <td>
                                                <strong>Pengirim : </strong><?php echo $data->nama_pengirim; ?> <br>
                                                <strong>No Surat :</strong> <?php echo $data->no_surat; ?><br>
                                                <strong> No Agenda :</strong> <?php echo $data->no_agenda; ?> <br>
                                                <strong>Tanggal  : </strong><?php echo $data->tanggal; ?><br>
                                                <strong>Perihal  : </strong><?php echo $data->perihal; ?>
                                            </td>
                                            <td><strong>Status :</strong> <?php echo $data->status; ?><br>
                                                <strong>Requestor :</strong> 
                                                <?php foreach ($model->get_statusdokumen($data->id_dokumen) as $datastatus) {
                                                    echo $datastatus->first_name.' '.$datastatus->last_name;
                                                } ?><br>
                                                <strong>Ditujukan ke :</strong> 
                                                <?php foreach ($model->get_statusdokumengm($data->id_dokumen) as $datastatus) {
                                                    echo $datastatus->first_name.' '.$datastatus->last_name;
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="<?=site_url('admin/viewfile/'.$data->file_dokumen)?>" target="_blank"><button type="button" class="btn btn-secondary btn-sm">Preview</button></a>
                                            </td>
                                            <td>
                                                <?php if ($data->status == 'OnProcess'): ?>
                                                <button type="button" class="btn btn-secondary btn-md">Edit</button>
                                                <button type="button" class="btn btn-success btn-md update" value="<?php echo $data->id_dokumen; ?>">Lanjutkan Dokumen</button>
                                                    
                                                <?php endif ?>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                        
                                    </tbody>
                                </table>

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
    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Tambah Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form enctype="multipart/form-data" name="dokumen" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/tambahdokumen') ?>">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                         <div class="col-lg-12 ms-lg-auto">
                                                                        <div class="mt-4 mt-lg-0">
                                                                            <form>
                                                                                <div class="row mb-4">
                                                                                    <label for="nama_pengirim" class="col-sm-3 col-form-label">Pengirim</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="no_surat" class="col-sm-3 col-form-label">No. Surat</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" name="no_surat" class="form-control" id="no_surat" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="no_agenda"  class="col-sm-3 col-form-label">No. Agenda</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" name="no_agenda" class="form-control" id="no_agenda" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input class="form-control" name="tanggal" type="date" value="<?php echo date("Y-m-d"); ?>" id="tanggal" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
                                                                                    <div class="col-sm-9">
                                                                                        <textarea type="text" name="perihal" class="form-control" id="perihal" rows="3" required></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="row mb-4">
                                                                                    <label for="formfile" class="col-sm-3 col-form-label">Upload scan</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="file" name="userfile" id="formFile" class="form-control" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row justify-content-end">
                                                                                    <div class="col-sm-9" >
                                                                                        <div class=".text-left">
                                                                                            <button type="submit" class="btn btn-success w-md">Submit dokumen</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    </form>
                                                    <!-- end row -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                     <!-- Static Backdrop Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                            <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/disposisi/') ?>"> 
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Lanjutkan Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" id="id_dokumen" name="id_dokumen">
                                                   
                                                    <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Pilih User</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="id_users">
                                                        <?php foreach ($users as $data) {?>
                                                      <option value="<?php echo $data->id ?>"><?php echo $data->first_name.' '.$data->last_name.'('.$data->email.')' ?></option>
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

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

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

<!-- dropzone js -->
<script src="<?php echo base_url('assets/libs/dropzone/min/dropzone.min.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Sweet alert init js-->
<script src="<?php echo base_url('assets/js/pages/sweetalert.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){

          $(".update").click(function(){ 
              var butval = $(this).val();     
              $("#id_dokumen").val(butval);
              $("#staticBackdrop").modal('show');
          });
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