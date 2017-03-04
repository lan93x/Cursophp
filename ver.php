<?php require_once 'includes/header.php';

if(!isset($_GET["id"]) || empty($_GET["id"]) || !is_numeric($_GET["id"])) {

    header("Location:index.php");
}

$id = $_GET["id"];
$usuario_query = mysqli_query($db, "SELECT * FROM usuario where usuario_id = {$id}");
$usuario = mysqli_fetch_assoc($usuario_query);
if(!isset($usuario["usuario_id"]) || empty($usuario["usuario_id"])) {

  header(sprintf("Location: %s", "www.google.com"));


}
?>

<h2><?php echo $usuario["nombre"]." ".$usuario["apellido"]; ?></h2>
<p>Datos:</p>
<p>Email: = <?php echo $usuario["email"]; ?></p>
<a href="index.php" class="btn btn-info">Volver</a>
<?php require_once 'includes/footer.php'; ?>
