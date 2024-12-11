<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $anoAtual = date("Y");
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento">
            <label for="ano">Quer saber a sua idade em que ano? (Atualmente estamos em <?php echo "$anoAtual" ?>)</label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
        $nascimento = $_GET["nascimento"] ?? 1;
        $ano = $_GET["ano"] ?? 1;
        $idade = $ano - $nascimento;

        echo "<p>Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano</p>";
        ?>
    </section>
</body>

</html>