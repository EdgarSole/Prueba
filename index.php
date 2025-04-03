<?php
// Configuración básica
$title = "Página de Prueba";
$message = "¡Hola, mundo! Esta es una página generada con PHP.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $message; ?></p>
    <p>Holaaaaaa</p>
</body>
</html>
