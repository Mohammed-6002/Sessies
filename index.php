<?php
session_start();
?>

<?php
if (isset($_GET["login"])) {
    $_SESSION["user"] = "Roodkapje";
}
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessies</title>
</head>
<body>

<?php if (isset($_SESSION["user"])): ?>
    <h1>Welkom, <?php echo $_SESSION["user"]; ?>!</h1>
    <a href="?logout=1">Uitloggen</a>
<?php else: ?>
    <h1>Je bent niet ingelogd.</h1>
    <a href="?login=1">Inloggen als Roodkapje</a>
<?php endif; ?>

</body>
</html>