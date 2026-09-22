<?php
require("controller_mekanik.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Mekanik Baru</title>
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
                <div class="container p-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="view_mekanik.php">Mekanik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="view_addMekanik.php">Mekanik Baru</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h1>Mekanik Baru</h1>

                            <form method="POST" action="controller_mekanik.php" class="w-75 mx-auto" autocomplete="off">

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputNama">Nama</label>
                                        <input type="text" class="form-control" name="inputNama">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputNoTelepon">No. Telepon</label>
                                        <input type="text" class="form-control" name="inputNoTelepon">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputSpesialisasi">Spesialisasi</label>
                                        <input type="text" class="form-control" name="inputSpesialisasi">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPengalaman">Pengalaman</label>
                                        <input type="text" class="form-control" name="inputPengalaman">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputCatatan">Catatan</label>
                                        <input type="text" class="form-control" name="inputCatatan">
                                    </div>
                                </div>

                                <br>

                                <button name="button_register" type="submit" class="btn btn-primary">
                                    Register
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>