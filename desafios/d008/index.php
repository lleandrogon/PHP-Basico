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
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.001">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero, 1/3);

            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo "<ul>
                <li>A sua raiz quadrada é " . number_format($raizQuadrada, 3, ",", ".") . "</li>
                <li>A sua raiz cúbica é " . number_format($raizCubica, 3, ",", ".") . "</li>
            </ul> ";
        ?>
    </section>
</body>
</html>