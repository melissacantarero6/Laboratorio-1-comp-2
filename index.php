<?php
include 'includes/db.php';
include 'includes/header.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<h2>Lista de Usuarios</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nombre']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['telefono']; ?></td>
            <td>
                <a href="update_form.php?id=<?= $row['id']; ?>">Editar</a>
                <a href="delete_confirm.php?id=<?= $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include 'includes/footer.php'; ?>
