<?php
include("basedatos.php");
//validar que se hizo clic en el boton de consultar datos
if(isset($_POST["btnbuscar"])){

//1 crear objeto en base de datos 
$operacionenbasededatos=new BaseDatos();

//2 resivir los datos del formulario 
$nombre= $_POST["nombrebuscar"];


//3 consulta para agregar datos
$consulta="SELECT nombreusu,apellido,correo,clave FROM ususarios WHERE nombreusu='$nombre'";

//4 utulizar el metodo consultarenbasededatos para poder ejecutar la consulta en base de datos 
$resultado=$operacionenbasededatos->consultarEnBaseDatos($consulta);
echo("<br>");
print_r(json_encode($resultado));
        
}else{
    echo("no hizo clic en buscar");
    }

?>