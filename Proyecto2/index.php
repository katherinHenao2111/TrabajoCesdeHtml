<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
    </head>
    <body>
        
        <h1> 
            <?php
            //Esto es un comentario
               $PrimeraVariable =2;
               $SegundaVariable = 5 ;
               $lenguaje = 'Javascript';
              
               if($PrimeraVariable==2 && $SegundaVariable == 5)
               {
                   echo 'soy menor';
               }
               else
               {
                   echo 'soy mayor';
               }
               switch ($lenguaje)
               {
                   case "php":
                       echo 'php';
                       break;
                   case "Javascript":
                       echo 'Javascript';
                       break;
                   case "html":
                       echo 'html';
                       break;
               }
               
 
              
            ?>
        </h1>
        <p>
            <?php
                echo 'Esta es otra seccion ';
            ?>
            
        </p>
    </body>
</html>
