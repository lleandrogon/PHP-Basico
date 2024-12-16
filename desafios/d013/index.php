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
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor">
            <p>*Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            $valor = $_GET["valor"] ?? 0;
        ?>
        <h2>Saque de R$ <?php echo $valor ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <?php 
           
        ?>
    </section>
</body>
</html>