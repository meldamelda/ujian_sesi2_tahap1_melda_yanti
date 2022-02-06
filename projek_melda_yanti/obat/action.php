<?php
    require_once("../backend/config/config.php");
    $page = "obat";
    $table = "obat";
    $array_key = ['id','nama','harga','stok'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>