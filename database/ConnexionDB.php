<?php 
class ConnexionDB{
    static public function Connect(){
        $connexion=new PDO("mysql:host=localhost;dbname=gestion_employes","root","");
        $connexion->exec('set names utf8');
        return $connexion;
    }
}