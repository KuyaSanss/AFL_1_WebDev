<?php
include("model_kendaraan.php");

session_start();
if (!isset($_SESSION['listkendaraan'])) {
    $_SESSION['listkendaraan'] = array();
}

function createKendaraan()
{
    $kendaraan = new model_kendaraan();
    $kendaraan->noPolisi = $_POST["inputNoPolisi"];
    $kendaraan->tipe = $_POST["inputTipe"];
    $kendaraan->tahun = $_POST["inputTahun"];
    $kendaraan->catatan = $_POST["inputCatatan"];
    array_push($_SESSION["listkendaraan"], $kendaraan);
}

function getAllKendaraan()
{
    return $_SESSION["listkendaraan"];
}

function deleteKendaraan($indexKendaraan){
    unset($_SESSION["listkendaraan"][$indexKendaraan]);
}

function getKendaraanWithID($kendaraanID){
    return $_SESSION["listkendaraan"][$kendaraanID];
}

function updateKendaraan($kendaraanID){

    $kendaraan = $_SESSION["listkendaraan"][$kendaraanID];
    $kendaraan->noPolisi = $_POST["inputNoPolisi"];
    $kendaraan->tipe = $_POST["inputTipe"];
    $kendaraan->tahun = $_POST["inputTahun"];
    $kendaraan->catatan = $_POST["inputCatatan"];
    
}

if (isset($_POST["button_register"])) {
    createKendaraan();
    header("Location:view_kendaraan.php");
} 

if (isset($_GET["deleteID"])) {
    deleteKendaraan($_GET["deleteID"]);
    header("Location:view_kendaraan.php");
}

if (isset($_POST["button_update"])) {
    updateKendaraan($_POST["input_id"]);
    header("Location:view_kendaraan.php");
}
?>