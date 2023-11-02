<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="author" content="Dominic Obil">
    <title>Mayor de Tres Números</title>
</head>
<body>

<h2>Ingrese tres números</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
    Primer número: <input type="text" name="num1"><br>
    Segundo número: <input type="text" name="num2"><br>
    Tercer número: <input type="text" name="num3"><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];


    if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
       
        $mayor = max($num1, $num2, $num3);

      
        echo "<h2>El mayor de los tres números es: $mayor</h2>";
    } else {
        
        echo "<h2>Por favor, ingrese números válidos.</h2>
</body>
</html>
