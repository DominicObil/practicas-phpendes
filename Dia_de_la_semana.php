
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="author" content="Dominic Obil">
    <title>Día de la Semana</title>
</head>
<body>

<h2>Ingrese un número del 1 al 7</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número: <input type="text" name="numero"><br>
    <input type="submit" name="submit" value="Obtener Día de la Semana">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numero = $_POST["numero"];


    if (is_numeric($numero)) {

        $numero = intval($numero);

      
        if ($numero >= 1 && $numero <= 7) {
    
            $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

        
            $dia = $diasSemana[$numero - 1];

            
            echo "<h2>El día de la semana correspondiente al número $numero es: $dia</h2>";
        } else {
          
            echo "<h2>Por favor, ingrese un número del 1 al 7.</h2>";
        }

    }
}
?>

</body>
</html>
