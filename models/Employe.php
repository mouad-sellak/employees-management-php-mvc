<?php
class Employe
{
    static public function create($data)
    {
        $pdo = ConnexionDB::Connect()->prepare("INSERT INTO employes(nom,prenom,departement,poste,date_emb,statut) VALUES(:nom,:prenom,:departement,:poste,:date_emb,:statut)  ");
        $pdo->bindParam(':nom', $data['nom']);
        $pdo->bindParam(':prenom', $data['prenom']);
        $pdo->bindParam(':departement', $data['departement']);
        $pdo->bindParam(':poste', $data['poste']);
        $pdo->bindParam(':date_emb', $data['date_emb']);
        $pdo->bindParam(':statut', $data['statut']);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $pdo = null;
    }

    static public function read($data)
    {
        $id = $data['id'];
        try {
            $pdo = ConnexionDB::Connect()->prepare("SELECT * FROM employes where id=:id");
            $pdo->execute(array(":id" => $id));
            $employe = $pdo->fetch(PDO::FETCH_OBJ);
            return $employe;
            $pdo = null;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }

    static public function readAll()
    {
        $pdo = ConnexionDB::Connect()->prepare("SELECT * FROM employes");
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo = null;
    } 

    static public function update($data)
    {
        $pdo = ConnexionDB::Connect()->prepare("UPDATE employes SET nom=:nom,prenom=:prenom,departement=:departement,poste=:poste,date_emb=:date_emb,statut=:statut WHERE id=:id  ");
        $pdo->bindParam(':id', $data['id']);
        $pdo->bindParam(':nom', $data['nom']);
        $pdo->bindParam(':prenom', $data['prenom']);
        $pdo->bindParam(':departement', $data['departement']);
        $pdo->bindParam(':poste', $data['poste']);
        $pdo->bindParam(':date_emb', $data['date_emb']);
        $pdo->bindParam(':statut', $data['statut']);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $pdo = null;
    }

    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $pdo = ConnexionDB::Connect()->prepare("DELETE FROM employes where id=:id");
            $pdo->execute(array(":id" => $id));
            if ($pdo->execute()) {
                return 'ok';
            }
            $pdo = null;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }

    static public function find($data){
        $search = $data['search'];
        try {
            $pdo = ConnexionDB::Connect()->prepare("SELECT * FROM employes where nom LIKE ? OR prenom LIKE ?");
            $pdo->execute(array('%'.$search.'%','%'.$search.'%'));
            $employes = $pdo->fetchAll();
            return $employes;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }
}
