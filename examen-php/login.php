<?php
$pageTitle = "Login";
require __DIR__ . "/includes/header.php";
?>

<h1>Login</h1>

<form action="read_user.php" method="POST" class="login-form">
    <label for="usuari">Usuari:</label>
    <input type="text" id="usuari" name="usuari" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Enviar</button>
</form>

<?php
require __DIR__ . "/includes/footer.php";
?>
