<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
include_once("controller/ControllerHome.php");

class ControllerRegister{

    public function index(){
        twig::render("client-create.php", ['page' => ["Comptes", "Inscriptions"]]);
    }

    public function inscription(){
        // print_r($_POST);
        $client = new ModelClient;
        $insert = $client->insert($_POST);
        $_SESSION['compteActif'] = true;
        $_SESSION['nomClient'] = $_POST["nom_client"];
        // header("Location: http://localhost/TP2-Twig-MVC/client");
        header("Location: https://e2194798.webdev.cmaisonneuve.qc.ca/TP2-Twig-MVC/");
    }
}