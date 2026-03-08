<?php
session_start();

if (!isset($_SESSION["rol"]) || $_SESSION["rol"] !== "administrador") { // ERROR 4: hauria de ser "admin"
    header("Location: index.html");
    exit();
}

require_once "bbdd.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panell Administrador</title>
</head>
<body>

<h2>Panell Administrador</h2>
<p>Benvingut <?php echo $_SESSION["usuari"]; ?></p>
<a href="logout.php">Tancar sessió</a>

<hr>

<table border="1" cellpadding="8">
    <tr>
        <th>Nom</th><th>IP</th><th>Tipus</th><th>Estat</th><th>Classificació</th>
    </tr>

<?php foreach ($node as $node): ?> <!-- ERROR 5: hauria de ser $nodes -->
<tr>
    <td><?php echo $node["nom"]; ?></td>
    <td><?php echo $node["ip"]; ?></td>
    <td><?php echo $node["tipus"]; </td> <!-- ERROR 6: falta el tancament ?> -->
    <td><?php echo $node["estat"] ? "Actiu" : "Inactiu"; ?></td>
    <td>
        <?php
        if (str_starts_with($node["ip"], "192.168")) {
            echo "Xarxa Interna";
        } else {
            echo "Xarxa Externa";
        }
        ?>
    </td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>
