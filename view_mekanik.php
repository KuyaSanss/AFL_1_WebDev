<?php require("controller_mekanik.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Mekanik</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_mekanik.php">Mekanik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_kendaraan.php">Kendaraan</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="view_mekanik.php">Mekanik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view_addMekanik.php">Mekanik Baru</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h1>Mekanik</h1>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col">Spesialisasi</th>
                                    <th scope="col">Pengalaman</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $counter = 0;
                                $allmekanik = getAllMekanik();

                                foreach ($allmekanik as $index => $mekanik) {
                                    $counter++;
                                    ?>

                                    <tr>
                                        <th scope="row"><?= $counter ?></th>
                                        <td><?= $mekanik->nama ?></td>
                                        <td><?= $mekanik->noTelepon ?></td>
                                        <td><?= $mekanik->spesialisasi ?></td>
                                        <td><?= $mekanik->pengalaman ?></td>
                                        <td><?= $mekanik->catatan ?></td>

                                        <td>
                                            <a href="view_updateMekanik.php?updateID=<?= $index ?>">
                                                <button class="btn btn-warning">Update</button>
                                            </a>

                                            <a href="controller_mekanik.php?deleteID=<?= $index ?>">
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
        </div>

    </div>
</body>

</html>