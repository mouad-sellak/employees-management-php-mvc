<?php
class User
{
    static public function create($data)
    {
        $pdo = ConnexionDB::Connect()->prepare("INSERT INTO utilisateurs(nom,prenom,email,role,etat,login,password) VALUES(?,?,?,?,?,?,?)  ");
        if ($pdo->execute(array( $data['nom'],$data['prenom'],$data['email'],$data['role'],$data['etat'],$data['login'],$data['password']))) {
            return 'ok';
        } else {
            return 'error';
        }
        $pdo = null; 
    }

    static public function login($data){
        $login=$data['login'];
        try {
            $pdo = ConnexionDB::Connect()->prepare("SELECT * FROM utilisateurs where login= ?" );
            $pdo->execute(array($login));
            $user=$pdo->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $e){
            echo 'erreur'.$e->getMessage();
        }
    }

    static public function update($data)
    {
        $pdo = ConnexionDB::Connect()->prepare("UPDATE utilisateurs SET login=:login,password=:password WHERE id=:id  ");
        $pdo->bindParam(':id', $data['id']);
        $pdo->bindParam(':login', $data['login']);
        $pdo->bindParam(':password', MD5($data['password']));
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $pdo = null;
    }
}
