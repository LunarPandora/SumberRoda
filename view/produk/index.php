<?php
require_once "../../app/init.php";

$page = new Produk;
$result = '';
$dataEdit = [];

if(isset($_POST['action'])){
    if($_POST['action'] == "add"){
        $result = $page->addData();
    }else{
        $result = $page->updateData();
    }
    header('location:'.BASE_URL.'view/produk');
}

if(isset($_POST['edit'])){
    $dataEdit = $page->getData();
}

if(isset($_POST['delete'])){
    $page->deleteData();
    // header('location:'.BASE_URL.'view/produk');
}
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
                
                <div class="container-fluid">
                    <?php
                        if(isset($_SESSION['invalid_data']) && !isset($_POST['action']) && !isset($_POST['edit']) && !isset($_POST['delete'])){
                            foreach($_SESSION['invalid_data'] as $error){
                                echo "<div class=\"alert alert-danger\">$error</div>";
                            }
                            
                            unset($_SESSION['invalid_data']);
                        }
                    ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Produk</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data Produk
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                        </div>
                        <div class="card-body">
                            <button onclick="openForm()" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="10">No</th>
                                            <th>Nama Produk</th>
                                            <th>Merek Produk</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th width="60">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach($page->getAllData() as $row)
                                        {
                                            $id = $row['merek'];
                                        ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $row['nama']; ?></td>
                                                <td><?= $row['merek']; ?></td>
                                                <td><?= $row['kategori']; ?></td>
                                                <td align="right"><?= $row['harga']; ?></td>
                                                <td><img src="<?= $row['gambar']; ?>" width="75" height="75"></td>  
                                                <td><?= $row['deskripsi']; ?></td>
                                                <td class="d-flex gap-1 p-1">
                                                    <form id="edit-form" method="post">
                                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                                            <button type="submit" name="edit" class="btn btn-warning">
                                                                <i class="fa fa-edit"></i>
                                                        </button>
                                                    </form>
                                                    <form id="delete-form" method="post">
                                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                                        <button type="submit" name="delete" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;   
                                        }
                                        ?>
                                    </tbody>
                                </table>
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

    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Data</h5>
                    <button class="close" onclick="closeModal(`<?= $_SERVER['PHP_SELF']; ?>`)" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-data" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" require placeholder="Masukkan nama produk">
                        </div>

                        <div class="form-group">
                            <label for="merek" class="form-label">Merek</label>
                            <select name="merek" id="merek" class="form-control">
                            <?php
                                foreach ($page->getDataMerek() as $row) {
                                    echo "<option value= '$row[id]'>$row[nama]</option>";
                                }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                            <?php
                                foreach ($page->getDataKategori() as $row) {
                                    echo "<option value= '$row[id]'>$row[nama]</option>";
                                }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" id="harga" name="harga" class="form-control" require placeholder="Masukkan harga produk">
                        </div>

                        <div class="form-group">
                            <label for="gambar" class="form-label">
                                Gambar<sup class="text-danger">*Kosongkan jika tidak ada gambar, dan tidak boleh lebih dari 2MB</sup>
                            </label>
                            <input accept=".png, .jpeg, .jpg" type="file" name="gambar" id="gambar" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi<sup class="text-danger">*Kosongkan jika tidak ada deskripsi</sup></label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" require placeholder="Masukan deskripsi produk"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" onclick="closeModal(`<?= $_SERVER['PHP_SELF']; ?>`)" data-dismiss="modal">Batal</button>
                            <button type="submit" id="btnAction" name="action" class="btn btn-primary" value="add">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $page->view('template/admin/script')?>
<script async>
    $(document).ready(() => {
        const data = (`<?= json_encode($dataEdit) ?>`) ? `<?= json_encode($dataEdit) ?>` : {};
        var dataEdit = JSON.parse(data);
    
        if(!checkEmptyObject(dataEdit)){
            assignData(dataEdit);
        }
    })
    
    const assignData = (data) => {
        $('#id').val(data.id);
        $('#nama').val(data.nama);
        $('#merek').val(data.merek);
        $('#kategori').val(data.kategori);
        $('#harga').val(data.harga);
        $('#gambar').val(data.gambar);
        $('#deskripsi').val(data.deskripsi);
        $('#btnAction').val('edit');
        $('#btnAction').text('Ubah');
        $('#btnAction').removeClass('btn-primary').addClass('btn-warning');
        openForm();
    }
    
    const checkEmptyObject = (data) => {
        for(i in data) return false;
        return true;
    }
    const openForm = () => {
        $('#form-modal').modal('show');
    }
</script>
</body>

</html>