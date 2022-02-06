<?php
    require_once("../backend/config/config.php");
    $page = "pasien";
    $table = "pasien";
    $array_key = ['id','nama','alamat','telp','tanggal_lahir'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>