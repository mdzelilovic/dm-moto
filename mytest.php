

<?php

mysql_connect("localhost", "root", "");
mysql_select_db("dm");


if(isset($_POST["vorschauname"])){
foreach ($_POST["vorschauname"] as $i => $name) {
    
    $vse = mysql_real_escape_string($name);
preg_match('/\d+/', $vse, $array);
 $zahle = $array[0];
 echo $zahle;


$splite = explode(' ', $vse, 2);
$splite_invariable = $splite[1];
$bezeichnunge = preg_replace("/[-]/", "", $splite_invariable);
echo $bezeichnunge;
  


    $ergebnis =  mysql_query("INSERT INTO einnahmen (Bezeichnung, Preis) VALUES ('$bezeichnunge' , '$zahle')");
 
}
}

if(isset($_POST["vorschauname2"])){
foreach($_POST["vorschauname2"] as $i => $namea){
    $vsa = mysql_real_escape_string($namea);
    
    
    preg_match('/\d+/', $vsa, $array1);
    $zahla = $array1[0];
    echo $zahla;
    
   $splita = explode(' ', $vsa, 2);
$splite_invariabla = $splita[1];
$bezeichnunga = preg_replace("/[-]/", "", $splite_invariabla);
echo $bezeichnunga;
    
    $ergebnis1 = mysql_query("INSERT INTO ausgaben (Bezeichnung, Preis) VALUES ('$bezeichnunga', '$zahla')");
}
}

header("Location: datasendtoserver.html");


        ?>
