<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');

class ControllerRegister{

    public function index(){
        twig::render("client-create.php");
    }
}