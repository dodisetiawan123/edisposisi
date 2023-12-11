
<?php include 'detail_layouts/head-main.php'; ?>

<head>
    <title>Detail | E-dispos</title>
    <?php include 'detail_layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex  align-items-center justify-content-center">
                            <h4 class="mb-sm-0 font-size-18">Detail Dokumen Disposisi</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap align-middle mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1.</th>
                                                    <td>
                                                        <strong>Pengirim</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->nama_pengirim ?></td>
                                                </tr>
                                                 <tr>
                                                    <th scope="row">2.</th>
                                                    <td>
                                                        <strong>No. Surat</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_surat ?></td>
                                                </tr>
                                                 <tr>
                                                    <th scope="row">3.</th>
                                                    <td>
                                                        <strong>No. Agenda</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_agenda ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4.</th>
                                                    <td>
                                                        <strong>Tanggal </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->tanggal ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5.</th>
                                                    <td>
                                                        <strong>Perihal </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->perihal ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6.</th>
                                                    <td>
                                                        <strong>Status Dokumen </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->status ?></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="table-responsive">
                                        <table class="table table-nowrap align-middle mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">7.</th>
                                                    <td>
                                                        <strong>Requestor</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->nama_pengirim ?></td>
                                                </tr>
                                                 <tr>
                                                    <th scope="row">8.</th>
                                                    <td>
                                                        <strong>Ditujukan ke</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_surat ?></td>
                                                </tr>
                                                 <tr>
                                                    <th scope="row">9.</th>
                                                    <td>
                                                        <strong>No. Agenda</strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->no_agenda ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10.</th>
                                                    <td>
                                                        <strong>Tanggal </strong> 
                                                    </td>
                                                    <td>: <?php echo $dokumen->tanggal ?></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                </div>
                                <div class="row">
                                    
                                </div>
                                

                                <div class="d-print-none mt-3">
                                    <div class="float-end">
                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
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

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $(".accept").click(function(){ 
              var butval = $(this).val();     
              $("#id_dokumen").val(butval);
              $("#accept").modal('show');
          });
        });
</script>
</body>

</html>