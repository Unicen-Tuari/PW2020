<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>

<body>

    <?php
        $titulo = "Hola Mundo!";
        echo $titulo;

        echo "<h1> Ejemplo Array Autos </h1>";
        $cars = array("Volvo", "BMW", "Toyota");
        // Asignación manual
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";
        $count = count($cars);  // 3 (int)

        echo $count;

        echo "<br>";

        echo $cars[1];

        echo "<h1> Ejemplo Array Nombres </h1>";

        define("NOMBRE", "juan");
        $edades = array( 
            "juan" => 35, 
            "nico" => 17, 
            "julia" => 23 
        ); 


        echo $edades[NOMBRE];


        echo "<h1> Ejemplo Funciones </h1>";
        //ejemplo de arreglo de edades

        $edades = array(18,20,15,66); 
        function promedio($edades){ 
            return array_sum($edades)/count($edades); 
        } 
        
        $result = promedio($edades);
        echo $result;

        echo "<h1> Ejemplo Estructuras </h1>";

        foreach ($cars as $car) { 
            echo "<li>".$car."</li>";      
        } 
          
          
        
    ?>
</body>
</html>


