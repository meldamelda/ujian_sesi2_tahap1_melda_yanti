<?php
    require_once("../backend/config/config.php");
    $page = "user";
    $table = "user";
    $array_key = ['id','nama','jenis_kelamin','alamat','kontak','username','password'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>