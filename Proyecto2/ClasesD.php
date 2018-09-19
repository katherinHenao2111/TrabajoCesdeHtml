<pre>
	<?php
		$lenguajes=['html',
			'css','javascript'];
		print_r($lenguajes);
		echo "<br>";
		var_dump($lenguajes)
	?>

      <?php
                //Funcion Sin parámetros
                function saludar()
                {
                    echo'<h2>'.'Hola A Todos'.'</h2';
                }
                saludar();
                echo '<br>';
                //Función con parámetros

            function Usuario ($Nombre,$Tel){ 
                var_dump($Nombre);
               // print_r($Nombre);
               /* foreach ($Nombre as $Nombre){
                    echo "Nombre:".$Nombre. '<br>';        
                }*/
                echo 'Telefono:'.$Tel.'<br>';
            }

            echo "<br>";
            $Usuarios=["Juan","Felipe","Alejandro"];
            Usuario($Usuarios,1234);
            echo '<br>';
            function suma ($num1 ,$num2){
               //$sumar = $num1 +$num2;
               //return $ sumar1;
               return $num1+$num2;
            }
            $result = suma(2,4);
            echo "Suma:" . $result;
            //acceder a variables globales desde funcion 
            $Agenda = array ();
            function agendar($Nombre,$Tel){
                global $Agenda;
                $Agenda[]=$Nombre;
                $Agenda[]=$Tel;
            }
            agendar("Felipe",12542);
            print_r($Agenda);
    ?>

</pre>
