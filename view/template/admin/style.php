<!-- Custom fonts for this template-->
<?php 
if(isset($_SERVER['HTTPS'])){
    $base_url = "/storage/ssd4/802/20555802/public_html/";
}else{
    $base_url = BASE_URL;
}
?>
<link href="<?= $base_url; ?>assets/themes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= $base_url; ?>assets/themes/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= $base_url; ?>assets/css/admin-style.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?= $base_url; ?>assets/themes/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
