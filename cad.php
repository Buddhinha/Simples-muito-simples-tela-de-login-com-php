<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["nome"] ?? "null";
        $s = $_GET["sobrenome"] ?? ",null";

        echo"Olá <strong>$n $s</strong> seja bem vindo!";
        //var_dump($_REQUEST); // junção de todas as superglobais desse tipo
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina traseira</a></p>
    </main>
</body>
</html>