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
    echo "A variável teste existe e tem valor: $teste<br>";
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
<input type="text" id="nome" name="nome">
<br>
<label for="DataN">Data de Nascimento</label>
<input type="date" id="DataN" name="DataN">
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

<form action="teste.php" method="post">
<label for="email">Email</label>
<input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
<input type="submit" value="Enviar">

<?php
if (isset($_POST["email"])){
    $email =$_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "O e-mail é válido.";
    } else {
        echo "O e-mail não é válido.";
    }
}
?>


</body>
</html>

