<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="formulario">
      <h2>Actualizar Empresa</h2>
      <form action="{{ route('estudiantes.actualizar', $estudiantes->id) }}" method="POST"> 
          @csrf
          @method('POST')
          <div class="row">
            <div class="col-lg-12 mt-2">
                <label>ID:</label>
                <input type="number" class="form-control mt-3 mb-3" name="id" value="{{ $estudiantes->id }}"/>
            </div>
            <div class="col-lg-12">
              <label for="">Nombre:</label>
              <input type="text" name="nombre" class="form-control mt-3 mb-3" value="{{ $estudiantes->nombre }}">
            </div>

            <div class="col-lg-12">
              <label for="">Nombre de la empresa:</label>
              <input type="text" name="nombre" class="form-control mt-3 mb-3" value="{{ $empresas->nombre }}">
            </div>

            <div class="col-lg-12">
              <label for="">Informacion academica:</label>
              <input type="text" name="info_academica" class="form-control mt-3 mb-3" value="{{ $estudiantes->info_academica }}">
            </div>
            <div class="col-lg-12">
              <label for="">Informacion personal:</label>
              <input type="text" name="info_personal" class="form-control mt-3 mb-3" value="{{ $estudiantes->info_personal }}">
            </div>
            <div class="col-lg-12">
              <label for="">Habilidades:</label>
              <input type="text" name="habilidades" class="form-control mt-3 mb-3" value="{{ $estudiantes->habilidades }}">
            </div>
            <div class="col-lg-12">
              <label for="">Intereses:</label>
              <input type="text" name="intereses" class="form-control mt-3 mb-3" value="{{ $estudiantes->intereses }}">
            </div>
            <div class="col-lg-12">
              <label for="">Disponibilidad:</label>
              <input type="text" name="disponibilidad" class="form-control mt-3 mb-3" value="{{ $estudiantes->disponibilidad }}">
            </div>
            
          </div>
          <div class="col-lg-12 mt-5">
              <input type="submit" class="btn-guardar" value="Guardar" />
          </div>
      </form>
</body>
</html>