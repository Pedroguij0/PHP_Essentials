<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["e_mail"]);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>   
<a href="spiderman.php">Voltar</a>
</body>
</html>