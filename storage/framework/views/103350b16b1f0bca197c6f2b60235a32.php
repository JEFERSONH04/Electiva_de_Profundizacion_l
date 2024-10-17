<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<script>
  function eliminar(){
    var respuesta=confirm("Estas seguro de eliminar este usuario?");
    return respuesta

  }
</script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
  body {
    background-color: #540094;
  }

  .botones a {
    margin: 5px;

  }

  h5 {
    margin:20px;
  }

  .botones {
    display:flex;
    left: 20px;

  }

  .btn-nuevo {
    position:relative;
      left: 1000px;
    display: flex;
      border-radius:40px;
      justify-content:center;
      align-items: center;
    height: 60px;
    width: 200px;
    margin: 20px 0;
    background: linear-gradient(to right, #004cff, #bf7de8);
    color: white;
  }

  .btn-ver, .btn-actualizar, .btn-borrar  {
      display: flex;
      border-radius:40px;
      justify-content:center;
      align-items: center;
      height: 45px;
      width: 100px;
      background: linear-gradient(to right, #540094, #bf7de8);
      color: white;
    }
    .btn-ver {
      background: linear-gradient(to right, #004cff, #bf7de8);
    }
    .btn-actualizar {
      background: linear-gradient(to right, #ffd000, #ff5e00);
    }
    .btn-borrar {
      background: linear-gradient(to right, #ff0000, #ff0099);
    }

  .tajetica{
    margin: 10px;
    padding: 30px;
    background-color: white;
    width: 400px;
    display:flex;
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    
  }

  .info h4 {
    margin-top: -8px;
    
  }

  .info h3 {
    padding-bottom: 25px;
    font-style: italic;
  }



</style>
<body>
  <div class="container">
    
    <h2 class="text-center pt-3 font-family text-light fs-1">Estudiantes</h2>
    <div class="row">
      <div class="col-lg-12">
        <a href="estudiantes/registro" class="btn-nuevo">Nuevo Estudiante</a>

      </div>
    </div>

    <div class="row  rounded-4 text-center">
      <div class="col-lg-12 d-flex justify-content-center align-items-center row">

            <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <div class="tajetica">
                  <div>
                    <div class="info">
                      <h3><strong>ID: <?php echo e($estudiantes->id); ?></strong></h3>
                      <h4><strong><?php echo e($estudiantes->nombre); ?></strong></h4>
                      <h4><strong><?php echo e($estudiantes->habilidades); ?></strong></h4>
                    </div>
                    <div class="mb-3">
                      <h5>Acciones</h5>
                      <div class="botones"> 
                        <a href="estudiantes/editar/<?php echo e($estudiantes->id); ?>" class="btn-actualizar">Editar</a>
                        <a href="estudiantes/borrar/<?php echo e($estudiantes->id); ?>" class="btn-borrar">Borrar</a>
                      </div>
                    </div>
                  </div>
              </div>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      

    </div>

  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\example-app\resources\views/Estudiantes/estudiantes.blade.php ENDPATH**/ ?>