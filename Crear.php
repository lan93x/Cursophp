<?php require_once 'includes/header.php'; ?>
<h2>Crear Usuarios</h2>
<form action="recibir.php" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:
        <input type="text" name="nombre" class="form-control">
    </label>
    <br/>
    <label for="apellido">Apellido:
        <input type="text" name="apellido" class="form-control">
    </label>
    <br/>
    <label for="bio">Biografia:
        <textarea name="bio" class="form-control"></textarea>
    </label>
    <br/>
    <label for="email">Email:
        <input type="email" name="email" class="form-control">
    </label>
    <br/>
    <label for="image">Imagen:
        <input type="file" name="image" class="form-control">
    </label>
    <br/>
    <label for="password">Password:
        <input type="password" name="password" class="form-control">
    </label>
    <br/>
    <label for="role" >Rol:
        <select name="role" class="form-control">
            <option value="0">Normal</option>
            <option value="1">Administrador</option>
        </select>
    </label>
    <br/>
    <input type="submit" name="submit" value="Enviar" class="btn btn-success">

</form>
<?php require_once 'includes/footer.php'; ?>