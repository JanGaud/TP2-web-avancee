<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');

class ControllerCompte{

    public function index(){
        twig::render("connexion.php");
    }
}