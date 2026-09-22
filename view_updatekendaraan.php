<?php
require("controller_kendaraan.php");
  if (isset($_GET["updateID"])) {
    
    $kendaraan_id = $_GET["updateID"];
    $kendaraan = getKendaraanWithID("$kendaraan_id");
  }
  
?>

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
            <a class="nav-link " href="view_addkendaraan.php">Kendaraan Baru</a>
          </li>
        </ul>
      </div>
      <div class="card-body">

        <h1>Update kendaraan</h1>
        <form method="POST" action="controller_kendaraan.php" class="w-75 mx-auto">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputNoPolisi">No Polisi</label>
              <input type="text" class="form-control" name="inputNoPolisi" value="<?=$kendaraan->noPolisi?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTahun">Tahun</label>
              <input type="text   " class="form-control" name="inputTahun" value="<?=$kendaraan->tahun?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTipe">Tipe</label>
              <input type="text" class="form-control" name="inputTipe" value="<?=$kendaraan->tipe?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCatatan">Catatan</label>
              <input type="text" class="form-control" name="inputCatatan" value="<?=$kendaraan->catatan?>">
            </div>
          </div>

          <input type="hidden" name="input_id" value="<?=$kendaraan_id?>">
          <button name="button_update" type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>


</body>

</html>