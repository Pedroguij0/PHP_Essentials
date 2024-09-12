<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Do homem aranha</title>
</head>
<body>
<form action="spiderman.php" method="post">
<label for="Nome">Nome Completo</label>
<input type="text" id="nome" name="nome">
<br>
<label for="Email">Email</label>
<input type="text" id="email" name="e_mail" value="email">
<br>
<label for="DataN">Data de Nascimento</label>
<input type="date" id="DataN" name="DataN">
<br>
<label for="Genero">Gênero:</label>

<input type="radio" id="masculino" name="genero" value="masculino">
<label for="Masculino">Masculino</label>

<input type="radio" id="feminino" name="genero" value="feminino">
<label for="Feminino">Feminino</label>

<input type="radio" id="outros" name="genero" value="outros">
<label for="Outros">Outros</label>

<br>
<label for="Feminino">Biografia</label>
<input type="textarea" id="bio" name="biografia" value="bio">

<input type="submit" value = "Enviar">
</form>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["e_mail"];
    $DataN = $_POST["DataN"];
    $biografia = $_POST["biografia"]; 
    if (isset($_POST["masc"])){
        $genero = $_POST["masc"];
    }
    elseif (isset($_POST["fem"])){
        $genero = $_POST["fem"];
    }
    elseif (isset($_POST["others"])){
        $genero = $_POST["others"];
    }
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "O e-mail é válido.<br>";
    } 
    else{
        echo "O e-mail não é válido.<br>";
    }
    
    if (!empty($nome)||!empty($email)||!empty($DataN)||!empty($genero)||!empty($biografia)){
        echo"Formulário enviado com sucesso!<br>";
    }
    else{
        echo "Algum campo não foi preenchido, preencha-o antes de enviar o formulário.<br>";
    }

    if (preg_match('/ /', $nome)) {
        echo " O nome contem dois ou mais nomes\n";
    } else {
        echo " O nome contem apenas um nome.\n";
    }

}        
?>
</body>
</html>