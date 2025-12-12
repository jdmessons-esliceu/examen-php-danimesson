<?php
require __DIR__ . "/includes/header.php";

$usuari = htmlspecialchars($_POST["usuari"] ?? "", ENT_QUOTES, "UTF-8");
$password = htmlspecialchars($_POST["password"] ?? "", ENT_QUOTES, "UTF-8");
?>

<h1>Dades rebudes</h1>

<p><strong>Usuari:</strong> <?= $usuari ?></p>
<p><strong>Password:</strong> <?= $password ?></p>

<?php
require __DIR__ . "/includes/footer.php";
?>
