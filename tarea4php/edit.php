<?php

    include('utils.php');
    include('header.php');

    $isEditing = false;
    if($_POST){
          foreach($_POST as &$valor){
            $valor=addslashes($valor);
        }

          extract($_POST);
           $sql="insert into registro (cedula,nombre,apellido,curso,ciudad,comentario) values ({$cedula},'{$nombre}','{$apellido}','{$curso}','{$ciudad}','{$comentario}')) ";
           
          conexion::ejecutar($sql);
        /*$file = $_FILES['foto'];
        if($file['error'] == 0){
            move_uploaded_file($file['tmp_name'], "images/{$_POST['cedula']}.jpg");
        }*/
        
        header("Location:index.php");

    }
    else if(isset($_GET['ced'])){

        $cedula = $_GET['ced'];
        $file = "data/{$cedula}.json";
        if(is_file($file)){
            $data = file_get_contents($file);
            $data = json_decode($data, 1);
            $_POST = $data;
            $isEditing = true;
        }
    }
?>

<p>Llenar formulario para solicitud de beca</p>
<form enctype="multipart/form-data" class="ui form" method="post">
    <!--Cedula -->
    <?php 
        $condition = ['placeholder'=>'Cedula'];
        if($isEditing){
            $condition['readonly'] = 'readonly';
        }
        echo asgInput('cedula','Cedula','', $condition);        
    ?>
    <!-- Nombre -->
    <?= asgInput('nombre','Nombre','', ['placeholder'=>'Nombre']) ?>
    <!-- Apellido -->
    <?= asgInput('apellido','Apellido','',['placeholder'=>'Apellido']) ?>
    <!-- Ciudad -->
    <?= asgInput('ciudad','Ciudad','',['placeholder'=>'Ciudad']) ?>
    <!-- Curso -->
    <?= asgInput('curso','Curso que desea','',['placeholder'=>'Curso']) ?>
    <!-- Comentario -->
    <?= asgInput('comentario','Comentario','',['inputtype'=>'textarea']) ?>
    <!-- Foto -->
    <?= asgInput('foto','Foto','',['type'=>'file']) ?>
    
        <button class="left attached ui primary button" type="submit">Guardar</button>
        <a href="index.php" class="right attached ui red button">Cancelar</a>
        <div class="ui error message"></div>
    </form>

    <?php include('footer.php') ?>