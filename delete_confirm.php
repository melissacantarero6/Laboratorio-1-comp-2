<?php
include 'includes/header.php';
$id = $_GET['id'];
?>
<h2>¿Seguro que deseas eliminar este usuario?</h2>
<a href="actions/delete.php?id=<?= $id; ?>">Sí, eliminar</a>
<a href="index.php">Cancelar</a>
<?php include 'includes/footer.php'; ?>
