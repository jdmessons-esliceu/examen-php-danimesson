<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";

$dir = __DIR__ . "/uploads";
$files = array_diff(scandir($dir), ['.', '..']);
?>

<h1>Galeria</h1>

<div class="galeria">
<?php foreach ($files as $file): ?>
    <img src="uploads/<?= $file ?>" alt="">
<?php endforeach; ?>
</div>

<?php require __DIR__ . "/includes/footer.php"; ?>
