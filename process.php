<?php
include ('connect.php');

$campo = "%{$_POST['field']}%";

$sql = $mysqli->prepare('select * from produtos where produto like ?');
$sql->bind_param("s", $campo);
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