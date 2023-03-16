<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Resultado Form</title>
</head>
<body>
    <header>Resultado do processamento</header>
    <main>
        <?php 
            $name = $_GET ["nome"] ?? "Sem Nome" ;
            $lastname = $_GET["sobrenome"] ?? "desconhecido" ;
            echo "<p>É um prazer te conhecer, <strong>$name $lastname</strong>! Este é meu site!";
        ?>
        <p><a href="./index.php">Voltar para a página anterior</a></p>
    </main>
</body>
</html>