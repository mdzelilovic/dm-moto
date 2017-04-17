<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location:index.php");
}

mysql_connect("localhost", "root", "");
mysql_select_db("dm");


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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <head>
    
    <body>
  
        
        <?php
        
        $resultse = mysql_query("SELECT  * FROM einnahmen");
       while ($row = mysql_fetch_assoc($resultse)){
           print_r($row);
          echo "<table border = '1'>";
          echo "<tr>";
          echo "<td>" . $row['Preis'] . "€,-" . "</td>";
          echo "<td>" . $row['Bezeichnung'] . "</td>";
          echo "</tr>";  
          echo "</table>";
          
           
       }
             $sql = mysql_query("SELECT SUM(Preis) as total FROM einnahmen");
          $row1 = mysql_fetch_array($sql);
          $sum = $row1['total'];
         echo $sum;
       
       
        echo "<br>";
         echo "<br>";
          echo "<br>";
          
          $resultsa = mysql_query("SELECT * FROM ausgaben");
          while($row2 = mysql_fetch_assoc($resultsa)){
             echo "<table border = '1'>";
          echo "<tr>";
          echo "<td>" . $row2['Preis'] . "€,-" . "</td>";
          echo "<td>" . $row2['Bezeichnung'] . "</td>";
          echo "</tr>";  
          echo "</table>";
          }
          
          $sql1 = mysql_query("SELECT SUM(Preis) as total1 from ausgaben");
          $row3 = mysql_fetch_assoc($sql1);
          $sum1 = $row3['total1'];
          echo $sum1;
        
          
          $differenz = $sum - $sum1;
          
          echo "<br>";
            echo "<br>";
            echo "Differenz: " . $differenz;
        ?>
        
    </body>
</head>