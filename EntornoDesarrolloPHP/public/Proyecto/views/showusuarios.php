<table>
<tr>
    <th>Nombre</th>
    <th>Primer Apellido</th>
    <th>Segundo Apellido</th>
</tr>
<?php
    foreach ($data as $usuario){
        echo "<tr>
            <td>".$usuario['Nombre']."</td>
            <td>".$usuario['Apellido1']."</td>
            <td>".$usuario['Apellido2']."</td>
        </tr>";
    }
?>
</table>