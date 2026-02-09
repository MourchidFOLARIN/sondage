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
            $action = "loginPage";
        }
        switch ($action) {
            case 'form':
                $this->form();
                break;
            case 'loginPage':
                $this->loginPage();
                break;
            case 'login':
                $this->login();
                break;
            case 'end':
                $this->endpage();
                break;
            case 'SignUp' :
                $this->SignUp();
                break;
            default:
                $this->loginPage();
                break;

        }
    }

    private function login()
    { 
          if(!isset($_POST['token'])||($_POST['token'])!==$_SESSION['token']){
            $_SESSION['error']='Veillez ressayer';
            header('Location: index.php?action=loginPage');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nameEnq = $this->verification($_POST['nomEnqt'] ?? '');
            $nomQuest = $this->verification($_POST['nomQuest'] ?? '');
            $prenomQuest = $this->verification($_POST['prenomQuest'] ?? '');
            if (!empty($nameEnq) && !empty($nomQuest) && !empty($prenomQuest)) {
                $connet = $this->model->createlogin($nameEnq, $nomQuest, $prenomQuest);
                if ($connet) {
                    $enquetInfo = $this->model->enqueteInfo($nameEnq);
                    $_SESSION['id_enqueteur'] = $enquetInfo[0]['id'];
                    header('Location: index.php?action=form');
                    exit;
                }
            } else {
                $_SESSION['error'] = "Vous avez oublié de remplir un champ";
                header('Location: index.php?action=loginPage');
                exit;
            }
        }
        
    }
    public function loginPage()
    {
        if (isset($_SESSION['id_enqueteur'])) {
            header('Location: index.php?action=form');
            exit;
        }
        $_SESSION['token'] = bin2hex(random_bytes(32));
        $token = $_SESSION['token'];
        include('vue/userlogin.php');
    }

    private function form()
    {
           if(!isset($_SESSION['id_enqueteur'])){
            $_SESSION['error']='Veillez ressayer';
            header('Location: index.php?action=loginPage');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $age = $this->verification($_POST['age'] ?? '');
            $sexe = $this->verification($_POST['sexe'] ?? '');
            $secteurActivite = $this->verification($_POST['secteurActivite'] ?? '');
            $PayVil = $this->verification($_POST['PayVil'] ?? '');
            $regularite = $this->verification($_POST['regularite'] ?? '');
            $epagne = $this->verification($_POST['epagne'] ?? '');
            $moyen_tab = $_POST['moyen_epargne'] ?? [];
            $moyen = implode('|', $moyen_tab);
            $epagneParMois = $this->verification($_POST['epagneParMois'] ?? '');
            $AvenirFinancier = $this->verification($_POST['AvenirFinancier'] ?? '');
            $vivreRetraire = $this->verification($_POST['vivreRetraire'] ?? '');
            $AvenirEpagne = $this->verification($_POST['AvenirEpagne'] ?? '');
            $KnownInvest  = $this->verification($_POST['KnownInvest'] ?? '');
            $eft = $this->verification($_POST['eft'] ?? '');
            $interet = $this->verification($_POST['interet'] ?? '');
            $invpsomme = $this->verification($_POST['invpsomme'] ?? '');
            $frequence = $this->verification($_POST['fréquence'] ?? '');
            $rassure_tab = $_POST['rassure'] ?? [];
            $rassurer = implode('|', $rassure_tab);
            $explication = $this->verification($_POST['explication'] ?? '');
            $freins_tab = $_POST['freins'] ?? [];
            $freins = implode('|', $freins_tab);
            $suggestion      = $this->verification($_POST['suggestion'] ?? '');
            if (
                !empty($age) && !empty($sexe) && !empty($secteurActivite) && !empty($PayVil) &&
                !empty($regularite) && !empty($epagne) && !empty($moyen) && !empty($epagneParMois) &&
                !empty($AvenirFinancier) && !empty($vivreRetraire) && !empty($AvenirEpagne) &&
                !empty($KnownInvest) && !empty($eft) && !empty($interet) &&
                !empty($invpsomme) && !empty($frequence) && !empty($rassurer) && !empty($explication) &&
                !empty($freins) && !empty($suggestion)
            ) {
                $idEnq = $_SESSION['id_enqueteur'];
                $store = $this->model->store(
                    $age,
                    $sexe,
                    $secteurActivite,
                    $PayVil,
                    $regularite,
                    $epagne,
                    $moyen,
                    $epagneParMois,
                    $AvenirFinancier,
                    $vivreRetraire,
                    $AvenirEpagne,
                    $KnownInvest,
                    $eft,
                    $interet,
                    $invpsomme,
                    $frequence,
                    $rassurer,
                    $explication,
                    $freins,
                    $suggestion,
                    $idEnq
                );

                if ($store) {
                    header('Location: index.php?action=end');
                    exit;
                } else {
                    $error = "Une erreur est survenue lors de l'enregistrement.";
                }
            } else {
                $error = "Veuillez remplir tous les champs du formulaire.";
            }
        }
        include("vue/formulaires.php");
    }

    private function endpage()
    {
        include('vue/endpage.php');
    }

    private function verification($data)
    {
        return trim(htmlspecialchars($data));
    }
    public function SignUp(){
        session_unset();
        session_destroy();
        header('Location: index.php?action=loginPage');
        exit();
    }
}
