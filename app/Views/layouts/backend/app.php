<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PORTFILIO - <?= $this->renderSection('title') ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('templates/backend/sb-admin-2') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    
    <?= $this->renderSection('css'); ?>
    <!-- Datatable -->
    <link href="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('layouts/backend/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('layouts/backend/navbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $this->renderSection('contentTitle') ?></h1>
                    <?= $this->include('layouts/component/alert-dismissible') ?>
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Rahmat Hidayatullah <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="<?= base_url('logout') ?>">
                        <?= csrf_field(); ?>
                        <button type="submit" class="btn btn-primary">Logout</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/js/sb-admin-2.min.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <?= $this->renderSection('js'); ?>
    <!-- Page level custom scripts -->
    <script src="<?= base_url('templates/backend/sb-admin-2') ?>/js/demo/datatables-demo.js"></script>

    <script type="text/javascript">
        $(".custom-file-input").on("change",function(){
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(filename)
        })

        $(".toHome").click(function(){
            let url = $(this).data('url')
            window.open(url)
        })
    </script>
</body>

</html>