<?php
session_start();

$connection = mysql_connect("localhost", "root", "");
if(!mysql_select_db("dm", $connection)){
    die ("Keine Verbindung");
}

$username = $_POST["username"];
$password = $_POST["password"];

$select_db = mysql_select_db("dm", $connection);

$query = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password'";
$result = mysql_query($query) or die (mysql_error($connection));
$count = mysql_num_rows($result);
if($count == 1){
    $_SESSION["login_user"] = $username;
    
}
else{
    $fmsg = "invalid credentioals";
}

if(isset($_SESSION['login_user'])){
    header("Location: profile.php");
}
else {
    header("Location: index.php");
}


        ?>

