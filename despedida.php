<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>La Frutería del siglo XXI</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

  <h1 class="text-primary mb-4">La Frutería del siglo XXI</h1>

  <div class="mb-4">
    <?=$compraRealizada ?>
  </div>

  <p class="lead mb-4">Muchas gracias por su pedido.</p>

  <button class="btn btn-primary"
          onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
          Nuevo cliente
  </button>

</body>
</html>
