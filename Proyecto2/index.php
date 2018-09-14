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
               echo '<br>';
               $Arreglos =array ("Hola",1,"Hola");
               print_r($Arreglos);
               //echo $Arreglos[2]. "<br>". $Arreglos[0];
               //Arreglos 
               
 
              
            ?>
        </h1>
        <p>
            <?php
                echo 'Esta es otra seccion ';
            ?>
        <pre>
            <h3>
                <?php
                   $dato = array_pad($Arreglos);
                   print_r($Arreglos);
                   //Arreglos asociados 
                   $usuarios = array ('nombre' => "Katherin",
                       "Apellidos" => "Monsalve henao" , 'Cedula' => 12345);
                   echo "<h1>" . $usuarios['nombre'] . "</h1>";
                   echo 'hola'. "<br>";
                   $Existe = in_arrray ("html",$Arreglos);
                   echo $Existe;
                ?>
            </h
        </pre>
        </p>
    </body>
</html>
