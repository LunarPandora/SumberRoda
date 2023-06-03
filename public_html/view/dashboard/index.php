<?php
session_start();

if(isset($_SERVER['HTTPS'])){
    require "/storage/ssd4/802/20555802/public_html/app/init.php";
}else{
    require_once "../../app/init.php";
}

$page = new Dashboard;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Sumber Roda</title>

<?php $page->view('template/admin/style'); ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $page->view('template/admin/menu'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
             <div id="content">
                <?php $page->view('template/admin/menu_top'); ?>
                
                <div class="container p-md-3 p-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 px-md-1 py-md-1 ">
                            <div class="card p-0 bg-primary">
                                <div class="card-body">
                                    <h5 class="text-white fw-bold">Jumlah Kategori</h5>
                                    <h5 class="text-white">32</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-12 px-md-1 py-md-1 ">
                            <div class="card p-0 bg-primary">
                                <div class="card-body">
                                    <h5 class="text-white fw-bold">Jumlah Produk</h5>
                                    <h5 class="text-white">32</h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-12 px-md-1 py-md-1 ">
                            <div class="card p-0 bg-primary">
                                <div class="card-body">
                                    <h5 class="text-white fw-bold">Jumlah Invoice</h5>
                                    <h5 class="text-white">32</h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
            <?php $page->view('template/admin/footer'); ?>
        </div>
        <!-- End of Content Wrapper -->
        
    </div>
    <!-- End of Page Wrapper -->

    <?php $page->view('template/admin/script')?>
</body>

</html>