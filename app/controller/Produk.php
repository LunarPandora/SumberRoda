<?php

class Produk extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL . 'view/login');
    }
    
    public function getAllData()
    {
        return $this->model('Produk_model')->getAllData();
    }
    
    public function addData()
    {
        $image = $this->moveImage($_FILES['gambar']);
        if($image == false){
            return 0;
        }
        
        $_POST['gambar'] = $image;
        if($this->model('Produk_model')->insertData($_POST))
        {
            return "$_POST[nama] berhasil ditambah";
        }
        
        $_SESSION['invalid_data'][] = "$_POST[nama] gagal dimasukkan, coba tambahkan ulang";
        return 0;
    }
    
    public function getData()
    {
        return $this->model('Produk_model')->fetchData($_POST['id']);
    }
    
    public function updateData()
    {
        $data = $this->model('Produk_model')->fetchData($_POST['id']);
        $_POST['gambar'] = $data['gambar'];
        
        if($_FILES['gambar']['name']){
            $image = $this->moveImage($_FILES['gambar']);
            if($image == false){
                return 0;
            }
            
            $_POST['gambar'] = $image;
        }

        if($this->model('Produk_model')->editData($_POST))
        {
            return "$_POST[nama] berhasil diubah";
        }
        
        $_SESSION['invalid_data'][] = "$_POST[nama] gagal diubah";
        return 0;
    }
    
    public function deleteData()
    {
        if($this->model('Produk_model')->removeData($_POST))
        {
            return "Data berhasil dihapus";
        }
        
        $_SESSION['invalid_data'][] = "Data gagal dihapus";
        return 0;
    }

    public function getDataMerek()
    {
        return $this->model('Merek_produk_model')->getAllData();
    }

    public function getDataKategori()
    {
        return $this->model('Kategori_model')->getAllData();
    }
    
    public function moveImage($file)
    {
        if($file){
            $accepted_ext = array('png', 'jpg', 'jpeg');
            $exploded_name = explode('.', $file['name']);
            $ext = strtolower(end($exploded_name));
            
            $file_name = time().implode("", explode("#", implode("_", explode(" ", $file['name']))));
            
            if($file['size'] > 2048000){
                $_SESSION['invalid_data'][] = "Silahkan cek ukuran file yang dimasukkan, tidak boleh melebihi 2 MB";
                return false;
            }
            
            if(!in_array($ext, $accepted_ext)){
                $_SESSION['invalid_data'][] = "Extension file harus PNG, JPG, atau JPEG";
                return false;
            }
            
            move_uploaded_file($file['tmp_name'], "../../storage/images/$file_name");
            return $file_name;
        }
        
        return null;
    }
}