<?php
require '../app/Autoloader.php';
App\Autoloader::register();
require '../pages/header.php';
require '../pages/sidebar.php';

if (isset($_GET['p'])){
    $p = $_GET['p'];

}else{
    $p = "home";
}
if ($p === "home"){
    require "../pages/home.php";
} elseif ($p === "article"){
    require "../pages/single.php";
}
require '../pages/footer.php';
