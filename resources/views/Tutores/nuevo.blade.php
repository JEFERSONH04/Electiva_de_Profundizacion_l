<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="formulario">
      
      <h2>Registro Tutores</h2>
      <form action="{{ route('guardar_nuevo')}}" method="POST"> 
          @csrf
          <div class="row">
            <div class="col-lg-12 mt-2">
                <label>ID:</label>
                <input type="number" class="form-control mt-3 mb-3" name="id"/>
            </div>
            <div class="col-lg-12">
              <label for="">Nombres:</label>
              <input type="text" name="nombres" class="form-control mt-3 mb-3">
            </div>

            <div class="col-lg-12">
              <label for="">Apellidos:</label>
              <input type="text" name="apellidos" class="form-control mt-3 mb-3">
            </div>

            <div class="col-lg-12">
              <label for="">Programa:</label>
              <input type="text" name="programa" class="form-control mt-3 mb-3">
            </div>
            <div class="col-lg-12">
              <label for="">Correo	:</label>
              <input type="text" name="email" class="form-control mt-3 mb-3">
            </div>
            <div class="col-lg-12">
              <label for="">Telefono:</label>
              <input type="text" name="telefono" class="form-control mt-3 mb-3">
            </div>
            
            
          </div>
          <div class="col-lg-12 mt-5">
              <input type="submit" class="btn-guardar" value="Guardar" />
          </div>
      </form>
</body>
</html>