<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Ficha Nº5 - Formulario</title>
</head>
<body>

    <h2>Envio de Ficheiro</h2>
    <form action="processar.php" method="POST "enctype="multipart/form-data">
        <label for="nome">User:</label><br>
        <input type="text" id="nome" name="User"><br><br>

        <label for="file"> Ficheiro</label><br>
        <input type="file"name="ficheiro" accept=".pdf,image/*><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>