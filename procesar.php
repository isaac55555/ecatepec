<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $curp = $_POST['curp'];
    $password = $_POST['password'];

    // Validar datos (solo ejemplo básico)
    if ($curp === 'ABCD123456FGHIJ6' && $password === 'admin') {
        header('Location: servicioventanilla.html');
        exit;
    } else {
        echo 'Usuario o contraseña incorrectos.';
    }
} else {
    echo 'Método no permitido.';
}
