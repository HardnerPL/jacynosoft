<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT'] . '/home/');
require_once ROOT . "framework/Framework.php";

$prefix = "/home/";
$url = str_replace($prefix, "", $_SERVER['REQUEST_URI']);
switch ($url) {
    case "index":
    case "index.php":
    case "":
        require_once ROOT . "controller/Home.php";
        (new Home())->index();
        break;
    default:
        require_once ROOT . "controller/Home.php";
        (new Home())->pageNotFound404();
}