<?php

$usu=$_POST['email']; 
$sen=$_POST['senha'];


$usuario = "anafav";
$senha = 261222;

//teste

echo "Usuario: ".$usu."<br>Senha: ".$sen;

echo "<br><br>";


//HASH

$senha_bdhash = password_hash($senha, PASSWORD_DEFAULT);
echo "<br><br>PASSWORD DO BANCO: ".$senha_bdhash;

$senha_hash = password_hash($sen, PASSWORD_DEFAULT);
echo "<br><br>PASSWORD DO USUARIO: ".$senha_hash;


?>