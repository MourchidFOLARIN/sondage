<?php
include "model/modelAdmin.php";

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function control()
    {
        // Utilisation de l'opérateur de coalescence nulle pour plus de clarté
        $action = $_GET['action'] ?? 'loginAdmin';

        switch ($action) {
            case 'loginAdmin':
                $this->loginPage();
                break;
            case 'login-process':
                $this->loginProcess();
                break;
            case 'adminPage':
                $this->adminDashboard(); 
                break;
            case 'logout':
                $this->logout();
                break;
            case 'search':
                $this->search();
                break;
            default:
                $this->loginPage();
                break;
        }
    }

    private function loginPage() {
        if (isset($_SESSION['idAdmin'])) {
            header('Location: index.php?role=admin&action=adminPage');
            exit;
        }
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        $csrf=$_SESSION['csrf'];
        include("vue/adminLogin.php");
    }

    private function loginProcess() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['csrf']) || $_POST['csrf'] !== $_SESSION['csrf']) {
            $_SESSION['error'] = 'Session invalide, veuillez réessayer.';
            header('Location: index.php?role=admin&action=loginAdmin');
            exit;
        }
        $name = trim($_POST['name'] ?? '');
        $password = $_POST['password'] ?? '';
        if (!empty($name) && !empty($password)) {
            $result = $this->model->loginAdmin($name, $password);
            if ($result) {
                $_SESSION['idAdmin'] = $result[0]['id'];
                header('Location: index.php?role=admin&action=adminPage');
                exit;
            }
        }
        $_SESSION['error'] = "Identifiants incorrects";
        header('Location: index.php?role=admin&action=loginAdmin');
        exit;
    }

    private function adminDashboard() {
        if (!isset($_SESSION['idAdmin'])) {
            header('Location: index.php?role=admin&action=loginAdmin');
            exit;
        }
        $sum=$this->model->sumData();
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->search();
        }
        include("vue/adminPage.php");
    }

    private function logout() {
        session_unset();
        session_destroy();
        header('Location: index.php?role=admin&action=loginAdmin');
        exit;
    }
    private function search(){
        if (!isset($_SESSION['idAdmin'])) {
            header('Location: index.php?role=admin&action=loginAdmin');
            exit;
        }
        $name=trim(htmlspecialchars(($_POST['name'])));
        $answer=$this->model->search($name);
        if (!empty($answer)) {
        $_SESSION['ans'] = $answer;
        unset($_SESSION['any']);
        } else {
            $_SESSION['any'] = 'Aucun resultat trouvé';
            unset($_SESSION['ans']);
        }
    }

}