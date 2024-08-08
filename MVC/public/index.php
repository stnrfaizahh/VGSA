<?php
require '../app/controllers/HomeController.php';
require '../app/models/Users.php';

$controller = new HomeController();
$controller ->index();
?>