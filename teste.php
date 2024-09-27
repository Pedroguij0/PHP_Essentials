<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Essentials</title>
</head>
<body>
    Testes das funções básicas:
    <br>
<?php
echo"<b>Echo:</b><br>";
echo"Hello world<br><br>";
echo"<b>Isset</b><br>";
$teste = "testando o php";

if(isset($teste)){
    echo  class=!"A variável teste existe e tem valor: $teste<br>";
}
else{
    echo "A variável teste não existe ou não esta preenchida";
}

if(isset($nome)){
    echo "A variável nome existe e tem valor: $nome";
}
else{
    echo "A variável nome não existe ou não esta preenchida";
}

echo "<br><br><b>Empty</b><br>";
$idade = 17;

if(empty($idade)){
    echo "A variável idade está preenchida e seu valor é:$idade";
}
else{
    echo "A variável idade está vazia";
}


?>

<p>Formulário de Teste</p>
<form action="teste.php" method="post">
<label for="nome">Nome Completo</label>
<input type="text" id="nome" name="nome" required>
<br>
<label for="DataN">Data de Nascimento</label>
<input type="date" id="DataN" name="DataN" required>
<br>
<input type="submit" value = "Enviar">
</form>

<?php
$DataN = "";
$nome = "";
if($_SERVER['REQUEST_METHOD']== "POST"){
    $nome = $_POST["nome"];
    $DataN = $_POST["DataN"];
}
$Data = (int)$DataN;
$idade = date("Y") - $Data;
echo "Seu nome é $nome e você nasceu $DataN, logo, você tem aproximadamente $idade anos";
?>

<p>Formulário de Teste Carro</p>
<form action="teste.php" method="get">
<label for="nomeC">Nome do Carro</label>
<input type="text" id="nomeC" name="nomeC">

<br>
<label for="DataL">Data de lançamento</label>
<input type="date" id="DataL" name="DataL">

<br>
<input type="submit" value = "Enviar">
</form>

<?php
if(isset($_GET['nomeC']) && isset($_GET['DataL'])){
    $nomeC = $_GET["nomeC"];
    $DataL = $_GET["DataL"];
}
else{
    echo "Nenhum dado foi enviado";
}
$Data = (int)$DataL;
$idadeC = date("Y") - $Data;
echo "O nome do carro é "  .htmlspecialchars($nomeC). " e foi lançado $DataL, logo, ele foi lançado há $idadeC anos";
?>
<?php require("cabecalho.php")?>
<h1>Filter_var, Strlen e Preg_match</h1>
<form action="teste.php" method="post">
<label for="email">Email</label>
<input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
<input type="submit" value="Enviar">

<?php
if (isset($_POST["email"])){
    $email =$_POST["email"];
    $carac = strlen($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "O e-mail é válido";
        echo " e tem $carac caracteres";
    } else {
        echo "O e-mail não é válido.";
    }
    if (preg_match('/[0-9]/', $email)) {
        echo " O e-mail contém um número.\n";
    } else {
        echo " O e-mail não contém um número.\n";
    }
}
?>

<h1>Is_numeric</h1>

<?php
$num = 2121;
$numasp = '2121';
$numfloat = 21.4;
if (is_numeric($num)) {
    echo"$num é numérico";
}
else{
    echo"$num é numérico";
}
?>

<h1>Substr</h1>

<?php
$nome = "Leandro cocoricó";
echo substr($nome,0,7);
?>

<h1>Str_replace</h1>

<?php

$texto = "Leandro = Julio Cocoricó";
echo str_replace("=", "é literalmente o",$texto);
?>
<h1>Explode🧨</h1>
<?php
$frase = "Leandro Bochecha";
$palavras = explode(" ", $frase);
print_r($palavras);
?>

<h1>Implode</h1>

<?php
$mercado = ["creatina", "whey", "frnago"];
echo implode (", ", $mercado);
?>

<h1>Array_push</h1>

<?php
$array = ['creatina', 'whey'];
array_push($array, "ovo");
print_r($array);
?>

<h1>Array_merge</h1>

<?php
$array1 = ['creatina', 'whey'];
$array2 = ['batata', 'frango'];

$arraygeral = array_merge($array1, $array2);
print_r($arraygeral);
?>

<h1>In_Array</h1>

<?php
$pichau = ['teclado', 'monitor'];
$existe = in_array("teclado", $pichau);
if ($existe) {
    echo "O item 'teclado' existe no array";
}
else {
    echo "O item 'teclado' não existe no array";
}
?>

<h1>Count</h1>

<?php
$atacadao = ['nescau', 'pao'];
print_r("Tem exatamente: ".count($atacadao)." itens no atacadao");
?>
 
</body>
</html>