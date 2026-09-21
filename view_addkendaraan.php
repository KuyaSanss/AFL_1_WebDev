<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <div class="container p-3">
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link " href="view_kendaraan.php">Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="view_addkendaraan.php">Kendaraan Baru</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <h1>Kendaraan baru</h1>
        <form method="POST" action="controller_kendaraan.php"class="w-75 mx-auto">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputNoPolisi">No Polisi</label>
              <input type="text" class="form-control" name="inputNoPolisi">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTahun">Tahun</label>
              <input type="text   " class="form-control" name="inputTahun">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTipe">Tipe</label>
              <input type="text" class="form-control" name="inputTipe">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCatatan">Catatan</label>
              <input type="text" class="form-control" name="inputCatatan">
            </div>
          </div>

          <button name="button_register"type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>


</body>

</html>