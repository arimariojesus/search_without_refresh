<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>
    
    <title>Busca sem refresh</title>
</head>
<body>
    
    <h1>Busca sem refresh</h1>

    <form>
        <label for="field">Buscar por:</label>
        <input type="text" name="field" id="field">
    </form>

    <div id="result">
        <?php
            include ('connect.php');

            $sql = $mysqli->prepare('select * from produtos');
            $sql->execute();
            $sql->bind_result($id, $produto, $valor);

            echo "
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Produtos</td>
                        <td>Valor</td>
                    </tr>
                </thead>

                <tbody>";

                while ($sql->fetch()) {
                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$produto</td>
                        <td>$valor</td>
                    </tr>";
                }
                echo "</tbody>
                </table>";
        
        ?>
    </div>

</body>
</html>