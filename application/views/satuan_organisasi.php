<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Human Capital Management System</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <!-- <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/datatable/jquery.dataTables.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/datatable/fixedColumns.dataTables.min.css') ?>">
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.css') ?>">

    <?php include 'layouts/head-style.php'; ?>
    


</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

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
                            <h4 class="mb-sm-0 font-size-18">Satuan Organisasi</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Struktur Organisasi</a></li>
                                    <li class="breadcrumb-item active">Satuan Organisasi</li>
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
                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Tambah Satuan Organisasi</button>
                                
                            </div>
                            <div>
                                    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-m">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Input Data Satuan Organisasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div id="progrss-wizard" class="twitter-bs-wizard">
                                                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#progress-grade" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Informasi Organisasi">
                                                                                        <i class="bx bx-group"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                           
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-grade">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>Satuan Organisasi</h5>
                                                                                    <p class="card-title-desc">Isi informasi satuan organisasi</p>
                                                                                </div>
                                                                                <form class="needs-validation" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/insertorganisasi') ?>" novalidate>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationTooltip03">Kode Satuan Organisasi</label>
                                                                                                <input type="text" class="form-control" name="kodeorganisasi" placeholder="Kode" style="text-transform: uppercase" id="validationTooltip03" required>
                                                                                                 <div class="invalid-feedback">
                                                                                                    Isi kode satuan organisasi yang valid.
                                                                                                 </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationTooltip03">Nama Satuan Organisasi</label>
                                                                                                <input type="text" class="form-control" name="namaorganisasi" placeholder="Isi kode satuan organisasi" style="text-transform: capitalize;" id="validationTooltip03" required>
                                                                                                 <div class="invalid-feedback">
                                                                                                    Isi nama satuan organisasi yang valid.
                                                                                                 </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    </div>

                                                                                  
                                                                                
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        
                                                                                        <li class="float-end"><input type="submit" value="Simpan" class="btn btn-primary" /></li>
                                                                                </ul>
                                                                                </form>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered table-striped dt-responsive  nowrap w-100">
                                    <thead>
                                         <tr class="align-middle text-center">
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Aksi</th>
                                            <th rowspan="2">Kode Organisasi</th>
                                            <th rowspan="2">Nama Organisasi</th>
                                            <th colspan="3" style="text-align: center;">Total</th>
                                            <!-- <th rowspan="2">Status</th> -->

                                        </tr>
                                        <tr class="table-striped table-light">
                                            
                                            <th>Standard</th>
                                            <th>Actual</th>
                                            <th>Gap(+/-)</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $no = 0; foreach ($organisasi as $data) {?>
                                        <tr>
                                            <td width="50"><?php echo $no=$no+1; ?></td>
                                            <td width="50"> 
                                                <div>
                                                    <div>
                                                         <button type="button" class="btn btn-soft-primary waves-effect waves-light edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-edit-alt font-size-17 align-middle"></i></button>
                                                         <button onclick="deletesatuan(<?php echo $data->idmd_organisasi ?>)" type="button" class="btn btn-soft-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail"><i class="bx bx-trash-alt font-size-17 align-middle"></i></button>
                                                        <button onclick="location.href='<?php echo site_url('admin/detail_organisasi/'.$data->idmd_organisasi) ?>'" type="button" class="btn btn-soft-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail"><i class="bx bx-detail font-size-17 align-middle"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><strong><?php echo $data->kodeorganisasi; ?></strong></td>
                                            <td><?php echo $data->namaorganisasi; ?></td>
                                            <td><?php echo $data->standard; ?></td>
                                            <td><?php echo $data->actual; ?></td>
                                            <td><?php echo $data->standard-$data->actual; ?></td>
                                            <!-- <td><span class="badge bg-primary">Approved</span></td> -->
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<!-- <script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script> -->
<!-- Buttons examples -->
<!-- <script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script> -->
<!-- <script src="<?php echo base_url('assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script> -->

<script src="<?php echo base_url('assets/libs/datatable/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatable/dataTables.fixedColumns.min.js') ?>"></script>


<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- twitter-bootstrap-wizard js -->
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>


<!-- form validation -->
<script src="<?php echo base_url('assets/js/pages/form-validation.init.js') ?>"></script>

<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script>
     <?php if ($this->session->flashdata('done')) {?>
       $(window).on('load', function() {
            Swal.fire({
            position: 'top-midle',
            icon: 'success',
            title: 'Data berhasil di simpan',
            showConfirmButton: false,
            timer: 1500
            })
        });
    <?php } ?>
    function deletesatuan(data){
        var result = confirm("Apakah anda yakin?");
        if (result) {
             window.location.href = '<?php echo site_url('admin/hapus_satuan/') ?>'+data;
        }
    }

    

</script>

</body>

</html>