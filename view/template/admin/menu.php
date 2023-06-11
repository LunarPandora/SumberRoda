<?php
if(isset($_POST['logout'])){
    Auth::logout();
}
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark  sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><img width="60" src="<?= BASE_URL; ?>assets/media/logo.png" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL; ?>">
            <i class="fa fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Manajemen</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterData" aria-expanded="true" aria-controls="masterData">
            <i class="fa fa-fw fa-bars"></i>
            <span>Master Data</span>
        </a>
        <div id="masterData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL ?>view/kategori">Kategori</a>
                <a class="collapse-item" href="<?= BASE_URL ?>view/merek_produk">Merek produk</a>
                <a class="collapse-item" href="<?= BASE_URL ?>view/produk">Produk</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span>Orders</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="index.php?menu=orders">Orders</a>
                <a class="collapse-item" href="index.php?menu=orders&aksi=selesai">Order Selesai</a>
                <a class="collapse-item" href="index.php?menu=order&aksi=cancel">Order Cancel</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <form action="" method="POST" class="nav-link bg-dark">
            <i class="fa fa-fw fa-power-off"></i>
            <input class="bg-dark text-white sidebar-dark border-0" type="submit" name="logout" value="Logout">
        </form>
    </li>
    
</ul>
<!-- End of Sidebar -->