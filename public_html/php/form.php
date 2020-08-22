<!DOCTYPE html>

<html lang="es">
    <head>
        <!--charset--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--titulo--><title>Matías Solís | Diseño Gráfico | Buenos Aires, Argentina</title>
        <!--viewport--><meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        //variables
        $numero = 50;
        $texto = "<br /> &nbsp;Esto es un texto creado por una variable.";
        
        //constantes
        define("saludo","Valor de la constante saludo.");
        define("numero",303);
        
        echo "<h1>Formulario</h1>";
        echo "&nbsp;&nbsp;Contacto";
        echo $numero;
        echo $texto."<br/>";
        echo saludo."<br />".numero." años.<br />";
        
        ?>
        
        <?php
        
        echo "Otro php."." <br />";
            
        //arrays predefinidos
        $array = array("elemento 1",2,"element 3");
        echo $array[2];
        
        //arrays asociativos
        $asociativo = array("clave1" => "elemento 1","clave2" => 2);
        echo $asociativo["clave2"];
        
        ?>
        
        <?php
        
        echo "<br/> <h2>Operador de cadena </h2>";
        
        $tengo = "Yo ";
        $tengo .="tengo";
        $tengo .=" 26 años.";
        
        echo " <br />".$tengo;
        
        ?>
        
        <?php
        
        echo "<br/> <h2>Condicionaels</h2>";
        
        if (8==8){
            echo "Esto es verdad.";
        }elseif(5==5){
            echo "La segunda es verdad.";
        } else{
            echo "Esto no es verdad.";
        }
        
        ?>
        
        <?php
        
        $aumento = 5;
        
        echo "<br/> <h2>Bucle While</h2>";
        
        while($aumento < 10){
            echo $aumento."<br/>";
            $aumento++;
        }
        
        echo "Si gusta siga derecho."
        
        ?>
        
        <?php
        echo "<br/> <h2>Bucle Do While</h2>";
        
        $variable1 = 10;
        
        do{
            echo $variable1."<br/>";
            $variable1++;
            
        }while($variable1 <= 20)
        
        ?>
        
        <?php
        echo "<br/> <h2>Bucle For</h2>";
        
        for($var=1; $var < 5; $var++){
            echo $var;
        }
        
        ?>
        
        <?php
        echo "<br/> <h2>FORMULARIO</h2>";
        
        
        
        ?>
        
        <form action="insertar.php" method="post" name="form">
            <input type="text" name="nombre" />
<!--            <input type="text" name="apellido" />-->
            <input type="password" name="pw" />
            <input type="submit" value="Enviar" />
        </form>
        
    </body>
</html>