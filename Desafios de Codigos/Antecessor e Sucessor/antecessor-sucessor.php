<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>antecessor-sucessor</title>
</head>
<body>
    <?php 
        $numero = $_POST ['numero'];

        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<p>O antecessor de $numero é $antecessor</p>";
        echo "<p>O Sucessor de $numero é $sucessor</p>";
    ?>
</body>
</html>