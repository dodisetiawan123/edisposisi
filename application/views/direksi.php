
<?php include 'd_layouts/head-main.php'; ?>

<head>
    <title>List surat | E-disposisi</title>
    <?php include 'd_layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    
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

                                <table id="datatable" class="table table-bordered table-hover dt-responsive  nowrap w-100">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Detail</th>
                                            <th>Status</th>
                                            <th>Lampiran</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr style="cursor: pointer;">
                                            <td>1</td>
                                            <td>
                                                Pengirim : <strong>PT Soltius Indonesia </strong><br>
                                                No Surat : <strong>XX1/BRT/NO/1 </strong> <br>
                                                Tanggal  : <strong>22 Desember 2023</strong><br>
                                                Perihal  : <strong>Acceptanble Certificate</strong>
                                            </td>
                                            <th>Accepted</th>
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm">Preview</button></td>
                                            <td>
                                                <div>
                                                    <div class="btn-group btn-group-example mb-3" role="group">
                                                        <button type="button" class="btn btn-success w-xs">Accept</button>
                                                        <button type="button" class="btn btn-danger w-xs">Reject</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="cursor: pointer;">
                                            <td>2</td>
                                            <td>
                                                Pengirim : <strong>PT Soltius Indonesia </strong><br>
                                                No Surat : <strong>XX1/BRT/NO/1 </strong> <br>
                                                Tanggal  : <strong>22 Desember 2023</strong><br>
                                                Perihal  : <strong>Acceptanble Certificate</strong>
                                            </td>
                                            <th>Accepted</th>
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm">Preview</button></td>
                                            <td>
                                                <div>
                                                    <div class="btn-group btn-group-example mb-3" role="group">
                                                        <button type="button" class="btn btn-success w-xs">Accept</button>
                                                        <button type="button" class="btn btn-danger w-xs">Reject</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                                                    <form enctype="multipart/form-data" name="karyawan" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/insertdata') ?>" onsubmit="return validateForm()">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                         <div class="col-lg-12 ms-lg-auto">
                                                                        <div class="mt-4 mt-lg-0">
                                                                            <form>
                                                                                <div class="row mb-4">
                                                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Pengirim</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" id="horizontal-firstname-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">No. Surat</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" id="horizontal-firstname-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">No. Agenda</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" id="horizontal-firstname-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanggal</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" id="horizontal-firstname-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Perihal</label>
                                                                                    <div class="col-sm-9">
                                                                                        <textarea type="text" class="form-control" id="horizontal-firstname-input" rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row justify-content-end">
                                                                                    <div class="col-sm-9">
                                                                                        <div>
                                                                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

</body>

</html>