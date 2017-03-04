<?php
include 'includes/header.php';
$users = mysqli_query($db, "SELECT * FROM usuario");
?>

<table class="table">
    <thead>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>Ver/Editar</th>
    </thead>
<?php while ($row = mysqli_fetch_assoc($users)) { ?>
    <tr>
        <td><?=$row["nombre"]?></td>
        <td><?=$row["apellido"]?></td>
        <td><?=$row["email"]?></td>
        <td><a href="ver.php?id=<?=$row["usuario_id"]?>" class="btn btn-success">Ver</a></td>
    </tr>
    <?php } ?>

    </table>

    <?php
    include 'includes/footer.php';
    ?>
