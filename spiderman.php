<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spiderman.css">
    <title>Formulário Do homem aranha</title>
</head>
<body>
    <img src="./spider5.png" alt="" class="homem_aranha">
    <img src="./spider5_2.png" alt="" class="homem_aranha2">
<div class = "formulario">
    <form action="spiderman.php" method="post">
        <label for="Nome" class = "labels">Nome Completo</label>
        <input type="text" id="nome" name="nome" class= "inputs">
        <br>
        <label for="Email"  class = "labels">Email</label>
        <input type="text" id="email" name="e_mail" class= "inputs">
        <br>
        <label for="DataN"  class = "labels">Data de Nascimento</label>
        <input type="date" id="DataN" name="DataN" class= "inputs" class = "Data">
        <br>
        <label for="Genero"  class = "labels">Gênero:</label>
        <div class="generos">
            <input type="radio" id="masculino" name="genero">
            <label for="Masculino">Masculino</label>
            
            <input type="radio" id="feminino" name="genero">
            <label for="Feminino">Feminino</label>
            
            <input type="radio" id="outros" name="genero" >
            <label for="Outros">Outros</label>
        </div>
        
        <br>
        <label for="Biografia"  class = "labels">Biografia</label>
        <input type="textarea" id="bio" name="biografia" class= "inputs">
        
        <input type="submit" value = "Enviar" class="enviar ">
        <input type="reset" value = "Cancelar" class="limpar ">
    </form>
</div>

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