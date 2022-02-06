<?php
    require_once("../backend/config/config.php");
    $page = "dokter";
    $table = "dokter";
    $array_key = ['id','nama','alamat','spesialis'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>