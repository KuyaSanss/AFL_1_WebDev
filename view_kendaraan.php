<?php require("controller_kendaraan.php"); ?>

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
            <a class="nav-link active" href="view_kendaraan.php">Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="view_addkendaraan.php">Kendaraan Baru</a>
          </li>
        </ul>
      </div>
      <div class="container p-3">
        <h1>Kendaraan</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">No. Polisi</th>
              <th scope="col">Tipe</th>
              <th scope="col">Tahun</th>
              <th scope="col">Catatan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $counter = 0;
            $allkendaraan = getAllKendaraan();
            foreach ($allkendaraan as $index => $kendaraan) {
              $counter++;
              ?>
              <tr>
                <th scope="row"><?= $counter ?></th>
                <td><?= $kendaraan->noPolisi ?></td>
                <td><?= $kendaraan->tipe ?></td>
                <td><?= $kendaraan->tahun ?></td>
                <td><?= $kendaraan->catatan ?></td>

                <td>
                  <a href="view_updatekendaraan.php?updateID=<?= $index ?>">
                    <button class="btn btn-warning">Update</button>
                  </a>
                  <a href="controller_kendaraan.php?deleteID=<?= $index ?>">
                    <button class="btn btn-danger">Delete</button>
                  </a>

                </td>
              </tr>

              <?php
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>