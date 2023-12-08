
<?php include 'gm_layouts/head-main.php'; ?>

<head>
    <title>GM Biro | E-dispos</title>
    <?php include 'gm_layouts/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') ?>">
      <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    
    <?php include 'gm_layouts/head-style.php'; ?>
</head>

<?php include 'gm_layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'gm_layouts/horizontal-menu.php'; ?>

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
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th>Catatan</th>
                                            <th>Pilihan</th>
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
                                                <strong>Tanggal  :</strong> <?php echo $data->tanggal; ?><br>
                                                <strong>Perihal  :</strong> <?php echo $data->perihal; ?>
                                            </td>
                                            <th> <a href="<?=site_url('direksi/viewfile/'.'Lampiran.pdf')?>" target="_blank"><button type="button" class="btn btn-secondary btn-sm">Preview</button></a>
                                            </th>
                                            <td>
                                                <strong>Status : </strong> <?php echo $data->status ?><br>
                                                <strong>Requestor : </strong>
                                               <?php foreach ($model->get_statusdokumen($data->id_dokumen) as $datastatus) {
                                                    echo $datastatus->first_name.' '.$datastatus->last_name;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $data->keterangan ?>
                                            </td>
                                             <td>
                                               <button type="button" class="btn btn-success btn-md accept" value="<?php echo $data->id_dokumen ?>" >Accept</button>
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
                                    <div class="modal fade" id="accept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <form enctype="multipart/form-data" name="lanjutkan" accept-charset="utf-8" method="post" action="<?php echo site_url('general/acceptdokumen/') ?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Accept Dokumen</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" id="id_dokumen" name="id_dokumen">
                                                    <div class="form-group mb-3">
                                                        <label for="exampleFormControlTextarea1">Keterangan</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Accept</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'gm_layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'gm_layouts/vendor-scripts.php'; ?>

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