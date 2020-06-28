<?php
include("BaseDatos.php");
//validar que se hizo clic en el boton de eliminar datos
if(isset($_POST["btneliminar"])){

//1 crear objeto en base de datos 
$operacionenbasededatos=new BaseDatos();


//2 resivir los datos del formulario
$nombre=$_POST["nombreeliminar"];

//3 consulta para eliminar datos
$consulta="DELETE FROM ususarios WHERE nombreusu='$nombre'";

//4 utulizar el metodo alterarBaseDatos para poder ejecutar la eliminacion en base de datos
$resultado=$operacionenbasededatos->alterarBaseDatos($consulta);








}else{
    echo("no hizo clic en actualizar");
    }




?>