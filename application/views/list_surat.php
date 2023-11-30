
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>List surat | E-disposisi</title>
    <?php include 'layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    
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
                                            <th>No Agenda</th>
                                            <th>Diterima Tanggal</th>
                                            <th>Surat dari</th>
                                            <th>Perihal</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr style="cursor: pointer;">
                                            <td>1865</td>
                                            <td>22 November 2023</td>
                                            <td>PT Soltius Indonesia</td>
                                            <td>Acceptance Certificate</td>
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm">Disposisi</button>
                                            </td>
                                        </tr>

                                        <tr style="cursor: pointer;">
                                            <td>1865</td>
                                            <td>22 November 2023</td>
                                            <td>PT Soltius Indonesia</td>
                                            <td>Acceptance Certificate</td>
                                            <td>
                                                <button type="button" class="btn btn-light btn-sm">Disposisi</button>
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