<?php
include("model_kendaraan.php");
include("model_mekanik.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['listkendaraan'])) {
    $_SESSION['listkendaraan'] = array();
}

if (!isset($_SESSION['listmekanik'])) {
    $_SESSION['listmekanik'] = array();
}

function createKendaraan(){
    $kendaraan = new model_kendaraan();
    $kendaraan->noPolisi = $_POST["inputNoPolisi"];
    $kendaraan->tipe = $_POST["inputTipe"];
    $kendaraan->tahun = $_POST["inputTahun"];
    $kendaraan->catatan = $_POST["inputCatatan"];
    $kendaraan->mekanikID = $_POST["inputMekanik"];

    array_push($_SESSION["listkendaraan"], $kendaraan);
}

function getAllKendaraan(){
    return $_SESSION["listkendaraan"];
}

function getAllMekanik(){
    return $_SESSION["listmekanik"];
}

function deleteKendaraan($indexKendaraan){
    unset($_SESSION["listkendaraan"][$indexKendaraan]);
}

function getKendaraanWithID($kendaraanID){
    return $_SESSION["listkendaraan"][$kendaraanID];
}

function updateKendaraan($kendaraanID)
{
    $kendaraan = $_SESSION["listkendaraan"][$kendaraanID];

    $kendaraan->noPolisi = $_POST["inputNoPolisi"];
    $kendaraan->tipe = $_POST["inputTipe"];
    $kendaraan->tahun = $_POST["inputTahun"];
    $kendaraan->catatan = $_POST["inputCatatan"];
    $kendaraan->mekanikID = $_POST["inputMekanik"];
}

if (isset($_POST["button_register"])) {
    createKendaraan();
    header("Location:view_kendaraan.php");
    exit();
}

if (isset($_GET["deleteID"])) {
    deleteKendaraan($_GET["deleteID"]);
    header("Location:view_kendaraan.php");
    exit();
}

if (isset($_POST["button_update"])) {
    updateKendaraan($_POST["input_id"]);
    header("Location:view_kendaraan.php");
    exit();
}
?>