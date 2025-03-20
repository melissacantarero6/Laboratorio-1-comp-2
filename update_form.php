<?php
include 'includes/db.php';
include 'includes/header.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Editar Usuario</h2>
<form action="actions/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <input type="text" name="nombre" value="<?= $row['nombre']; ?>" required>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>
    <input type="text" name="telefono" value="<?= $row['telefono']; ?>">
    <button type="submit">Actualizar</button>
</form>

<?php include 'includes/footer.php'; ?>
