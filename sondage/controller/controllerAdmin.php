<?php
include "model/model.php";
class Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function control()
    {

        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = "loginAdmin";
        }
        switch ($action) {
            case 'loginAdmin':
                $this->loginPage();
                break;
            default:
                break;
        }
    }
    private function loginPage(){
        include("vue/adminLogin.php");
    }
}
