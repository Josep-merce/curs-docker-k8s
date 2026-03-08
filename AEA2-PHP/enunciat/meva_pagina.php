<?php
session_start();

if (!isset($_SESSION["rol"])) {
    header("Location: index.html");
    exit();
}

require_once "base.php"; // ERROR 7: hauria de ser bbdd.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>La Meva Pàgina</title>
</head>
<body>

<h2>Zona Usuari</h2>
<p>Benvingut <?php echo $_SESSION["usuario"]; ?></p> <!-- ERROR 8: hauria de ser $_SESSION["usuari"] -->
<a href="logout.php">Tancar sessió</a>

<hr>

<table border="1" cellpadding="8">
    <tr>
        <th>Nom</th><th>Tipus</th><th>Estat</th>
    </tr>

<?php foreach ($nodes as $node): ?>
<tr>
    <td><?php echo $node["nom"]; ?></td>
    <td><?php echo $node["tipus"]; ?></td>
    <td><?php echo $node["estat"] ? "Actiu" : "Inactiu"; ?></td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>
