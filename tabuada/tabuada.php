<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssIndex.css">
    <title>Tabuada</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>tabuada comum</h1>
    <section>
        <form action="" method="get">
            <label for="multiplicando">Digite o multiplicando</label><br>
            <input type="number" name="multiplicando" id="multiplicando"><br>
            <label for="multiplicador">Digite o multiplicador</label><br>
            <input type="number" name="multiplicador" id="multiplicador"><br>
            <input type="submit" value="obter produto">
        </form>
    </section>
    <?php 
    $multiplicando = $_GET['multiplicando'];
    $multiplicador = $_GET['multiplicador'];
    $operador = 'X';
    $produto = $multiplicando * $multiplicador;

    echo "<table>";

        echo "<tr>";
        echo "<td>multiplicando</td>";
        echo "<td>operador</td>";
        echo "<td>multiplicador</td>";
        echo "<td>produto</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$multiplicando </td>";
        echo "<td>$operador</td>";
        echo "<td>$multiplicador</td>";
        echo "<td>$produto</td>";
        echo "</tr>";

    echo "</table>";
    ?>
    <img src="tabuada.jpeg" alt="tabuada">
</body>
</html><br><br>
<a href="javascript:history.go(-1)">voltar a página anterior</a>