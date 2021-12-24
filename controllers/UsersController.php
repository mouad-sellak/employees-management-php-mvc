<?php
class UsersController
{
    public function register()
    {
        if (isset($_POST['register'])) {
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'role' => 'Visiteur',
                'etat' => 0,
                'login' => $_POST['login'],
                'password' => MD5($_POST['password']),
            );
            $result = User::create($data);
            if ($result === 'ok') {
                Session::set('success', 'Compte creé avec succès !');
                Redirect::to('Login');
            } else {
            }
        }
    }

    public function login(){
        if(isset($_POST['submit'])){
            $data['login']=$_POST['login'];
            $user= User::login($data);
            if($user->login == $_POST['login'] && $user->password == MD5($_POST['password'])  ){
                $_SESSION['logged']=true;
                $_SESSION['user']=$user;
                Redirect::to('Home');
            }
            else{
                Session::set('error', 'Login ou mot de passe est incorrect !');
                Redirect::to('Login');
            }
        }
    }

    public function update(){
        if(isset($_POST['submit'])){
            $data=array(
                'id' => $_POST['id'],
                'login' => $_POST['login'],
                'password' => $_POST['password'],
            );
            $result=User::update($data);
            if($result){
                Session::set('success','Profil modifié avec succès !');
                Redirect::to('Home');
            }
        }
    }

    static public function logout(){
        session_destroy();
    }
}
