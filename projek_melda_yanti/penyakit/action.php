<?php
    require_once("../backend/config/config.php");
    $page = "penyakit";
    $table = "penyakit";
    $array_key = ['id','nama'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>