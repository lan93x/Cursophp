<?php require_once 'includes/header.php';?>
<?php echo $var; ?>
<p>Contacta con nosotros</p>
<form method="post" action="">
    <input type="text" name="Nombre">
    <input type="text" name="Email">
    <input type="submit" name="Enviar">
</form>
<?php require_once 'includes/footer.php';?>