<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
<title>Minicasino</title>
</head>
<body class="container my-4">
  <h1 class="mb-4 text-primary">La Frutería del siglo XXI</h1>

  <div class="mb-3">
    <?=$compraRealizada ?>
  </div>

  <h4 class="mb-3">Realice su compra, <?= htmlspecialchars($_SESSION['cliente']) ?></h4>

  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="row g-3">
    <div class="col-md-4">
      <label class="form-label">Selecciona la fruta:</label>
      <select name="fruta" class="form-select">
        <option value="Platanos">Plátanos</option>
        <option value="Naranjas">Naranjas</option>
        <option value="Limones">Limones</option>
        <option value="Manzanas">Manzanas</option>
      </select>
    </div>

    <div class="col-md-2">
      <label class="form-label">Cantidad:</label>
      <input name="cantidad" type="number" value="0" class="form-control">
    </div>

    <div class="col-12">
      <button type="submit" name="accion" value=" Anotar " class="btn btn-success me-2">Anotar</button>
      <button type="submit" name="accion" value=" Anular " class="btn btn-warning me-2">Anular</button>
      <button type="submit" name="accion" value=" Terminar " class="btn btn-danger">Terminar</button>
    </div>
  </form>
</body>

</html>
