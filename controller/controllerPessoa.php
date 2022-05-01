<?php
require_once("../model/pessoa.class.php");

$pessoa = new Pessoa();

$pessoa->setNome($_POST['txtNome']);
$pessoa->setEndereco($_POST['txtEndereco']);
$pessoa->setBairro($_POST['txtBairro']);
$pessoa->setCep($_POST['txtCep']);

echo $pessoa->getNome(). "<br>"; 
echo $pessoa->getEndereco() . "<br>";
echo $pessoa->getBairro(). "<br>";
echo $pessoa->getCep(). "<br>";

?>