<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01">
            <label for="percentual">Qual será o percentual de reajuste</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $preco = $_GET["preco"] ?? 0;
            $percentual = $_GET["percentual"] ?? 0;
            $precoFinal = $preco * (1 + $percentual / 100);

            echo "<p>O produto que custava R$$preco, com <strong>$percentual% de aumento</strong> vai passar a custar <strong>R$$precoFinal</strong></p>"
        ?>
    </section>
</body>
</html>