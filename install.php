<?php
require_once 'includes/connect.php';

$sql="CREATE TABLE IF NOT EXISTS usuario(
        usuario_id int(255) auto_increment not null,
        nombre  varchar(50),
        apellido   varchar(255),
        biografia   varchar(255),
        email   varchar(255),
        password    varchar(255),
        role    varchar(25),
        imagen  varchar(255),
        CONSTRAINT pk_users PRIMARY KEY(usuario_id));";
$create_usuarios_table = mysqli_query($db, $sql);
$sql = "DELETE FROM usuario";
$vaciar_tabla= mysqli_query($db, $sql);

$sql = "INSERT INTO usuario VALUES(NULL,'Alan','Arteaga','Web_developer',"
        . "'lan93x@gmail.com','".sha1("password")."','1',NULL)";
$inser_user1= mysqli_query($db, $sql);

$sql = "INSERT INTO usuario VALUES(NULL,'Raul','Arteaga','Web_developer',"
        . "'raul@gmail.com','".sha1("password")."','1',NULL)";
$inser_user2= mysqli_query($db, $sql);
$sql = "INSERT INTO usuario VALUES(NULL,'Cecilia','Arteaga','Web_developer',"
        . "'cecilia@gmail.com','".sha1("password")."','1',NULL)";
$inser_user3= mysqli_query($db, $sql);
$sql = "INSERT INTO usuario VALUES(NULL,'Monica','Arteaga','Web_developer',"
        . "'monica@gmail.com','".sha1("password")."','1',NULL)";
$inser_user4= mysqli_query($db, $sql);

//ver error sql
//echo mysqli_error($db);
if($create_usuarios_table){
    echo "La tabla usuario se ha creado correctamente!!";
}
?>

