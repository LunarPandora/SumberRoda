<?php
namespace Controller;
require '../app/core/Controller.php';
use App\Core\Controller;

class Home extends Controller{
    public function index(){
        $this->view('home/index');
    }
}