<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location:index.php");
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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          
     
        <script>
            
            $(document).ready(function(){
               
              
               
                $('.cbutton').click(function(){
                    
                  $(this).toggleClass('active');
                  $('.cbutton1').removeClass('active');
                  
                              
                
               });
                  $('.cbutton1').click(function(){
                    
                  $(this).toggleClass('active');
                  $('.cbutton').removeClass('active');
               
    
               });
               
            });
   
            function giveoutput(){
                var selectvalue = document.getElementById("selectedstuff").value;
                var a = document.getElementById("resfield").value;
                if(a !== "" && selectvalue !== ""){
                var b = eval(a);
                document.getElementById("resfield").value = b;
            
                var container = document.getElementById("vorschau");
                var container2 = document.getElementById("vorschau2");
 
               
               
               var f = document.querySelector('.active');
               var g = f.value;
               // document.getElementById("vorschau").innerHTML = g;
                if(g == "Einnahmen"){
                    
                    var tval = "€" + b + ",- "  + " --------- " + selectvalue;
                    var gete = document.getElementById("vorschau");
                    gete.innerHTML += "<input type='text' name = 'vorschauname[]' value = '" + tval + "' style = 'color: green;' size='50'/>";
                    gete.appendChild(document.createElement("br"));
                   /*  var cinput = document.createElement("input");
                     
                    cinput.type = "text";
                    cinput.name = "vorschauname[]";
                    cinput.style = "color: green;";
                    cinput.value = "€" + b + ",- " + g + " --------- " + selectvalue;
                    cinput.size = 40;
                    
                    
                    container.appendChild(cinput);
                    container.appendChild(document.createElement("br"));
                    */
                }
                else {
                    
                    var tval = "€" + b + ",- "  + " --------- " + selectvalue;
                    var gete = document.getElementById("vorschau");
                    gete.innerHTML += "<input type='text' name = 'vorschauname2[]' value = '" + tval + "' style = 'color: red;' size='50'/>";
                    gete.appendChild(document.createElement("br"));
                    /* var cinput2 = document.createElement("input");
                     
                    cinput2.type= "text";
                    cinput2.name = "vorschauname2[]";
                    cinput2.style = "color: red;";
                    cinput2.value = "€" + b + ",-" + g+ " --------- " + selectvalue;
                    cinput2.size = 40;
                    
                    container2.appendChild(cinput2);
                    container2.appendChild(document.createElement("br")); */
                }
                   
                  
     
              
            }
          
    }
   
            </script>
          
    </head>
    <body>
       <div id="header">
        <a href="logout.php">logout</a>
        <a href="statistic.php">Statistic</a>
        </div>
        <div id="container">
        <div id="calculater">
            
            <button type="button" value="Einnahmen" class="cbutton" id="button1">Einnahmen</button>
            <button type="button" value="Ausgaben" class="cbutton1" id="button2">Ausgaben</button>
            
          
            
            <input type="text" name="resultfield" id="resfield" size="34"/>
            <p class="clear"></p>
            
            <button type="button" id="onebutton" class="operatorbutton" onclick="resfield.value+='1';">1</button>
            <button type="button" id="twobutton" class="operatorbutton" onclick="resfield.value+='2';">2</button>
            <button type="button" id="threebutton" class="operatorbutton" onclick="resfield.value+='3';">3</button>
            <button type="button" id="multbutton" class="operatorbutton" onclick="resfield.value+='*';">*</button>
            <button type="button" id="clearbutton" class="operatorbutton" onclick="resfield.value=''">C</button>
            <p class="clear"></p>
            <button type="button" id="fourbutton" class="operatorbutton1" onclick="resfield.value+='4';">4</button>
            <button type="button" id="fivebutton" class="operatorbutton1" onclick="resfield.value+='5';">5</button>
            <button type="button" id="sixbutton" class="operatorbutton1" onclick="resfield.value+='6';">6</button>
            <button type="button" id="minusbutton" class="operatorbutton1" onclick="resfield.value+='-';">-</button>
            <p class="clear"></p>
            <button type="button" id="sevenbutton" class="operatorbutton2" onclick="resfield.value+='7';">7</button>
            <button type="button" id="eightbutton" class="operatorbutton2" onclick="resfield.value+='8';">8</button>
            <button type="button" id="ninebutton" class="operatorbutton2" onclick="resfield.value+='9';">9</button>
            <button type="button" id="plusbutton" class="operatorbutton2" onclick="resfield.value+='+';">+</button>
            <p class="clear"></p>
            <button type="button" id="divbutton" class="operatorbutton3" onclick="resfield.value+='/';">/</button>
            <button type="button" id="zerobutton" class="operatorbutton3" onclick="resfield.value+='0';">0</button>
            <button type="button" id="komabutton" class="operatorbutton3" onclick="resfield.value+='.';">,</button>
            <button type="button" id="enterbutton" class="operatorbutton3" onclick="giveoutput();">=</button>
            <p class="clear"></p>
            <input type="text" name="selectedstuff" id="selectedstuff">Beschreibung 
            <br>
             
        </div>
           
            <form id="vorschau" action="mytest.php" method="post">
          
                <input type="submit" value="submit" id="submitcost">  
            
        </form>
            
            <div id="vorschau2">
                
            </div>
            
            
            
        </div>
        <span class="test">
            
        </span>
    </body>

</html>

