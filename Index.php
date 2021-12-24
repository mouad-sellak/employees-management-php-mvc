<?php
require_once './views/includes/Header.php';
require_once './Autoload.php';
require_once './controllers/HomeController.php';
require_once './views/includes/Alerts.php';
$home = new HomeController();
$pages = ['Home', 'Create', 'Update', 'Delete','Profile','Logout' ];
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "true") {
    if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)) {
            $home->index($_GET['page']);
        } else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('Home');
    }
    require_once './views/includes/Footer.php';
}
else if( isset($_GET['page']) && $_GET['page'] === 'Register'){
    $home->index('Register');
}
else{
    $home->index('Login');
}
