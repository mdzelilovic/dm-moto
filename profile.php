<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="header">
        <a href="logout.php">logout</a>
        </div>
        
        <div id="content">
            <a href="kostenrechnung.php" id ="buttonc">Kostenrechnung</a>
            <a href ="teilelager.php" id="buttonc">Teilelager</a>
        </div>
        </body>
</html>

