<?php

include("BaseDatos.php");

//validar que se hizo clic en el boton de agregar datos
if(isset($_POST["btnagregar"])){
    

    //recibir datos a agrgar
    $nombre=$_POST["nombreusuario"];
    $apellido=$_POST["apellidousuario"];
    $email=$_POST["emailusuario"];
    $password=$_POST["Passwordususario"];
    $checkbox=$_POST["aceptarterminos"];
    

    //prova de la  conexion

    //1 crear un objeto de tipo basedatos(se debe crear una variable)
    $operacionenbasededatos=new BaseDatos();
    

    //crear consulta para agregar datos 
    $consulta="INSERT INTO ususarios(nombreusu,apellido,correo, clave) VALUES ('$nombre','$apellido','$email','$password')";
    echo("<br>");

   

    //utulizar el metodo alterarBaseDatos para poder ejecutar la consulta 
    $resultado=$operacionenbasededatos->alterarBaseDatos($consulta);

    if($resultado){
        echo("<br>");
        echo("se han agregado los datos");
        echo("<br>");
    }else{
        echo("falla escribiendo");
    }


}else{
echo("no deverias estar aca");
}







?>