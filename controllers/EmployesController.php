<?php 
class EmployesController{
    
    public function createEmploye(){
        if(isset($_POST['submit'])){
            $data=array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'departement' => $_POST['departement'],
                'poste' => $_POST['poste'],
                'date_emb' => $_POST['dateEmbauche'],
                'statut' => $_POST['statut'],
            );
            $result=Employe::create($data);
            if($result==='ok'){
                Session::set('success','Employé ajouté avec succès !');
                Redirect::to('Home');
            }
            else{

            }
        }
    }
    public function readEmploye(){
        if(isset($_POST['id'])){
            $data=array('id'=>$_POST['id']);
            $employe= Employe::read($data);
            return $employe;
        }
    }
    public function readAllEmployes(){
        $employes= Employe::readAll();
        return $employes;
    }
    public function updateEmploye(){
        if(isset($_POST['submit'])){
            $data=array(
                'id' => $_POST['id'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'departement' => $_POST['departement'],
                'poste' => $_POST['poste'],
                'date_emb' => $_POST['dateEmbauche'],
                'statut' => $_POST['statut'],
            );
            $result=Employe::update($data);
            if($result){
                Session::set('success','Emplyé modifié avec succès !');
                Redirect::to('Home');
            }
            else{

            } 
        }
    }

    public function deleteEmploye(){
        if(isset($_POST['id'])){
            $data=array('id'=>$_POST['id']);
            $result= Employe::delete($data);
            if($result==='ok'){
                Session::set('success','Employé supprimé avec succès !');
                Redirect::to('Home');
            }
            else{
                echo $result;
            }
        }
    }

    public function findEmployes(){
        if(isset($_POST['search'])){
            $data=array('search'=>$_POST['search']);
        }
        $employes = Employe::find($data);
        return $employes;
    }
}
 