<?php
require("controller_mekanik.php");

if (isset($_GET["updateID"])) {

    $mekanik_id = $_GET["updateID"];
    $mekanik = getMekanikWithID("$mekanik_id");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <title>Update Mekanik</title>
</head>

<body>

    <div class="container p-3">
        <div class="card text-center">

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">

                    <li class="nav-item">
                        <a class="nav-link" href="view_mekanik.php">
                            Mekanik
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="view_addMekanik.php">
                            Mekanik Baru
                        </a>
                    </li>

                </ul>
            </div>

            <div class="card-body">

                <h1>Update Mekanik</h1>

                <?php
                if (isset($mekanik)) {
                ?>

                    <form method="POST" action="controller_mekanik.php" class="w-75 mx-auto">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNama">Nama</label>
                                <input type="text"
                                    class="form-control"
                                    name="inputNama"
                                    value="<?= $mekanik->nama ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNoTelepon">No. Telepon</label>
                                <input type="text"
                                    class="form-control"
                                    name="inputNoTelepon"
                                    value="<?= $mekanik->noTelepon ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputSpesialisasi">Spesialisasi</label>
                                <input type="text"
                                    class="form-control"
                                    name="inputSpesialisasi"
                                    value="<?= $mekanik->spesialisasi ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPengalaman">Pengalaman</label>
                                <input type="text"
                                    class="form-control"
                                    name="inputPengalaman"
                                    value="<?= $mekanik->pengalaman ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputCatatan">Catatan</label>
                                <input type="text"
                                    class="form-control"
                                    name="inputCatatan"
                                    value="<?= $mekanik->catatan ?>">
                            </div>
                        </div>

                        <input type="hidden"
                            name="input_id"
                            value="<?= $mekanik_id ?>">

                        <button name="button_update"
                            type="submit"
                            class="btn btn-primary">
                            Update
                        </button>

                    </form>

                <?php
                } else {
                ?>

                    <p>Silahkan pilih mekanik yang ingin di-update dari halaman Mekanik.</p>

                <?php
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>