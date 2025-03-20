<?php include 'includes/header.php'; ?>
<h2>Agregar Nuevo Usuario</h2>
<form action="actions/create.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefono" placeholder="Teléfono">
    <button type="submit">Guardar</button>
</form>
<?php include 'includes/footer.php'; ?>
