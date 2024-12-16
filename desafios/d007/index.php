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
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>z">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            $salarioMinimo = 1380; 
            $salario = (float) $_GET["salario"] ?? 1380;
            $quantDeSalarios = $salario / $salarioMinimo ?? 1;
            $sobra = $salario % $salarioMinimo ?? 1;
            echo "Quem recebe um salário de " . number_format($salario, 2, ",", ".") . " ganha <strong> " . floor($quantDeSalarios) . " salário(s) mínimo(s) +</strong> R$ " . number_format($sobra, 2, ",", ".") . ".";
        ?>
    </section>
</body>
</html>