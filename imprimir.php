<!-- Imprimir un nombre -->

<!DOCTYPE html>

<html lang="es">

<title>Imprimir</title>
<head>
<meta charset="utf-8">
<h1>Imprimir un nombre</h1>
</head>
<body>
<form action="Imprimir.php" method="post">
Nombre:<input type="text" name="name" />
<input type="submit" value="Imprimir" />
</form>
<?php
$name = $_POST['name'];
echo $name;
?>
</body>
</html>