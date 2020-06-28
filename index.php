<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<header>
<div class="container bg-primary text-white">
     <div class="row Justify-content-start">
     <div  class="col-12 col-md-12 mt-5 ">
     <h1 class="Justify-content-start">formulario de base de datos ab_ACDI/VOCA</h1>
     </div>
     </div>
</div>
    

</header>
<main>
<div class="container bg-success text-white">
    <div class="row Justify-content-start">
        <div class="col-12 col-md-5">
            <h1 class="Justify-content-start">registrate en nuestra web</h1>
            <h4>crear registro</h4>



        <form action="agregardatos.php" method="POST">
            
            <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user-plus"></i></span>
                </div>

                <input type="text" class="form-control" placeholder="nombre usuario" aria-label="nombreususario" aria-describedby="addon-wrapping"id=nombreusuario name=nombreusuario>
                <label for="nombreusuario"></label>
                </div>
                <br>

                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user-plus"></i></span>
                </div>

                <input type="text" class="form-control" placeholder="apellido del usuario" aria-label="apellidoususario" aria-describedby="addon-wrapping"id=apellidousuario name=apellidousuario>
                <label for="apellidousuario"></label>
                </div>



                <br>
                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-at"></i></i></span>
                </div>
                <input type="email" class="form-control" placeholder="correo usuario" aria-label="emailusuario" aria-describedby="addon-wrapping"id=emailusuario name=emailusuario>
                <label for="emailusuario"></label>
                </div>
                <div> 
                <small id="emailusuario" name="emailusuario"class="text-light bg-dark">Nunca compartiremos tu correo electrónico con nadie más</small>
                </div>
                <br>
                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                <span class="input-group-text" ><i class="fas fa-key"></i></i></span>
                </div>
                <input type="Password" class="form-control" placeholder="contaseña" aria-label="contaseñaususario" aria-describedby="addon-wrapping"id="Passwordususario" name="Passwordususario">
                <label for="Passwordususario"></label>
                </div>
                <br>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input Justify-content-start" id="aceptarterminos"name="aceptarterminos">
                <label class="form-check-label" for="exampleCheck1">acepto terminos y condiciones </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block"id="btnagregar"name="btnagregar" >agregar</button>
        </form>


        <form action="consultardatos.php" method="POST">
                <br>
                <h4>consultar registro</h4>
                <br>
        
                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search-plus"></i></i></span>
                </div>
                <input type="text" class="form-control" placeholder="nombre usuario" aria-label="nombrebuscar" aria-describedby="addon-wrapping"id=nombrebuscar name=nombrebuscar>
                <label for="nombrebuscar"></label>
                </div>
                <br>
                <button type="submit" class="btn btn-warning btn-block"id="btnbuscar"name="btnbuscar">buscar</button>
        </form>

        <form action="eliminardatos.php" method="POST">       
                <br>
                <h4>eliminar registro</h4>
                <br>
        
                <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-skull-crossbones"></i></i></span>
                </div>
                <input type="text" class="form-control" placeholder="nombre usuario" aria-label="nombreeliminar" aria-describedby="addon-wrapping"id=nombreeliniñar name=nombreeliminar>
                <label for="nombreusuario"></label>
                </div>
                <br>
                <button type="submit" class="“btn btn-danger btn-block"id="btneliminar"name="btneliminar">actualizar</button>
       </form>
               
                  </div>
      
            </div>

        </div>
     </div>
    
        
        
    </div>
    

</div>
</main>
<footer>
<script src="https://kit.fontawesome.com/9222171eaf.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</footer>
</body>
</html>