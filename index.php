<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea/</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            width: 400px;
        }
    </style>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  DESPLEGAR
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ejemplo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-container">
        <h1 class="text-center">Información personal</h1>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="name" placeholder="Ingrese nombre completo">
            </div>
            <div class="mb-3">
                <label for="grado" class="form-label">Grado</label>
                <input type="text" class="form-control" id="grado" placeholder="Ingrese grado">
            </div>
            <div class="mb-3">
                <label for="arma" class="form-label">Arma</label>
                <input type="text" class="form-control" id="arma" placeholder="Ingrese arma">
            </div>
            <div class="mb-3">
                <label for="cat" class="form-label">Catálogo</label>
                <input type="text" class="form-control" id="cat" placeholder="Ingrese catálogo">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">OK</button>
        
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>