<?php

if(isset($_POST["submit"])){
    var_dump($_POST);
    if(!empty($_POST["nombre"]) && strlen($_POST["nombre"])<=20
            && !is_numeric($_POST["nombre"]) && !preg_match("/[0-9]/", $_POST["nombre"])){
        echo $_POST["nombre"]."<br/>";
    }
    if(!empty($_POST["apellido"]) && !is_numeric($_POST["nombre"]) && !preg_match("/[0-9]/", $_POST["nombre"])){
        echo $_POST["apellido"]."<br/>";
    }
    if(!empty($_POST["bio"])){
        echo $_POST["bio"]."<br/>";
    }
    if(!empty($_POST["email"]) && filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        echo $_POST["email"]."<br/>";
    }
    if(!empty($_POST["password"]) && strlen($_POST["password"])>=6){
        echo sha1($_POST["password"])."<br/>";
    }
    if(!empty($_POST["role"])){
        echo $_POST["role"]."<br/>";
    }
    
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
        echo "la imagen nos ha llegado";
    }
}

