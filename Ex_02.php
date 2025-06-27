<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Hello World</title>
</head>
<body>
    <h2>Exercício: Hello World com PHP</h2>

    <form method="post">
        <input type="submit" name="mostrar" value="Clica para ver o Hello World">
    </form>

    <?php
    if (isset($_POST['mostrar'])) {
        echo "<p><strong>Hello, World!</strong></p>";
    }
    ?>
    <p><a href="index.html">Voltar à página inicial</a></p>
</body>
</html>

