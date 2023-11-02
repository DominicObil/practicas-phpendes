<!DOCTYPE html>
<html>
<head>
    <title>Suma de Números</title>
</head>
<body>

<h2>Ingrese un número N</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número N: <input type="text" name="numero"><br>
    <input type="submit" name="submit" value="Calcular Suma">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numero = $_POST["numero"];

    // Validar que se haya ingresado un número positivo
    if (is_numeric($numero) && $numero > 0) {
        // Convertir a entero
        $numero = intval($numero);

        // Calcular la suma de los números desde 1 hasta N
        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }

        // Mostrar el resultado
        echo "<h2>La suma de los números desde 1 hasta $numero es: $suma</h2>";
    } else {
        // Mostrar un mensaje de error si no se ingresó un número positivo
        echo "<h2>Por favor, ingrese un número entero positivo.</h2>";
    }
}
?>

</body>
</html>
