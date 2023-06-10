<!-- Bootstrap core JavaScript-->
<?php 
if(isset($_SERVER['HTTPS'])){
    $base_url = "/storage/ssd4/802/20555802/public_html/";
}else{
    $base_url = BASE_URL;
}
?>
<script src="<?= $base_url; ?>assets/js/admin-script.js" async></script>
<script src="<?= $base_url; ?>assets/themes/vendor/jquery/jquery.min.js"></script>
<script src="<?= $base_url; ?>assets/themes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= $base_url; ?>assets/themes/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= $base_url; ?>assets/themes/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= $base_url; ?>assets/themes/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= $base_url; ?>assets/themes/js/demo/chart-area-demo.js"></script>
<script src="<?= $base_url; ?>assets/themes/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= $base_url; ?>assets/themes/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url; ?>assets/themes/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= $base_url; ?>assets/themes/js/demo/datatables-demo.js"></script>
