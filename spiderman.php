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
    <form action="verify.php" method="post">
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
</body>
</html>