<?php
include("model_mekanik.php");

session_start();
if (!isset($_SESSION['listmekanik'])) {
    $_SESSION['listmekanik'] = array();
}

function createMekanik(){
    $mekanik = new model_mekanik();
    $mekanik->nama = $_POST["inputNama"];
    $mekanik->noTelepon = $_POST["inputNoTelepon"];
    $mekanik->spesialisasi = $_POST["inputSpesialisasi"];
    $mekanik->pengalaman = $_POST["inputPengalaman"];
    $mekanik->catatan = $_POST["inputCatatan"];

    array_push($_SESSION["listmekanik"], $mekanik);
}

function getAllMekanik(){
    return $_SESSION["listmekanik"];
}

function deleteMekanik($indexMekanik){
    unset($_SESSION["listmekanik"][$indexMekanik]);
}

function getMekanikWithID($mekanikID){
    return $_SESSION["listmekanik"][$mekanikID];
}

function updateMekanik($mekanikID){
    $mekanik = $_SESSION["listmekanik"][$mekanikID];

    $mekanik->nama = $_POST["inputNama"];
    $mekanik->noTelepon = $_POST["inputNoTelepon"];
    $mekanik->spesialisasi = $_POST["inputSpesialisasi"];
    $mekanik->pengalaman = $_POST["inputPengalaman"];
    $mekanik->catatan = $_POST["inputCatatan"];
}

if (isset($_POST["button_register"])) {
    createMekanik();
    header("Location:view_mekanik.php");
}

if (isset($_GET["deleteID"])) {
    deleteMekanik($_GET["deleteID"]);
    header("Location:view_mekanik.php");
}

if (isset($_POST["button_update"])) {
    updateMekanik($_POST["input_id"]);
    header("Location:view_mekanik.php");
}
?>