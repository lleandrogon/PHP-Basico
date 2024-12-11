<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Divisão</h2>
        <?php 
            $dividendo = $_GET["dividendo"] ?? 1;
            $divisor = $_GET["divisor"] ?? 1;
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;

            echo "<p>A divisão entre $dividendo e $divisor da igual a $resultado e sobra $resto.</p>"
        ?>
    </section>
</body>
</html>