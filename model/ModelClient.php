<?php

class ModelClient extends Crud {

    protected $table = 'client';
    protected $primaryKey = 'idClient';
    protected $fillable = ['idClient', 'nom_client', 'adresse', 'client_courriel', 'date_de_naissance', 'telephone'];
}

?>