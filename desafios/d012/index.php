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
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <h2>Totalizando tudo</h2>
        <?php
            $segundos = $_GET["segundos"] ?? 0;

            $semanas = intdiv($segundos, 604800);
            $resto = $segundos % 604800;

            $dias = intdiv($resto, 86400);
            $resto %= 86400;

            $horas = intdiv($resto, 3600);
            $resto %= 3600;

            $minutos = intdiv($resto, 60);
            $segundos_restantes = $resto % 60;

            echo "<p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:</p>";

            echo "<ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos_restantes segundos</li>
            </ul>";
        ?>
    </section>
</body>
</html>