<<!DOCTYPE html>
<html lang="pt">
<head>
</head>
<body style="background-color:<?php echo $_COOKIE["cor"];?>">
    Selecione a cor de fundo que deseja de agora em diante:
    <form action="sucesso.php" method="POST" enctype="multipart/form-data">
        <input type="radio" name="cor" value="red" required>Vermelho<br>
        <input type="radio" name="cor" value="green" required>Verde<br>
        <input type="radio" name="cor" value="blue" required>Azul<br>
        <input type="submit" value="Criar cookie">
    </form>
</body>
</html>