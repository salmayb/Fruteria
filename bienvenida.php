<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>La Frutería del siglo XXI</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

  <h1 class="text-primary mb-4">La Frutería del siglo XXI</h1>

  <div class="alert alert-info mb-4">
    <strong>¡Bienvenido a nuestra frutería!</strong>
  </div>

  <form action="<?=$_SERVER['PHP_SELF'];?>" method="get" class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Introduzca su nombre:</label>
      <input name="cliente" type="text" class="form-control" placeholder="Escriba su nombre">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success mt-2">Comenzar compra</button>
    </div>
  </form>

</body>
</html>
