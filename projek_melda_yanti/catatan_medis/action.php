<?php
    require_once("../backend/config/config.php");
    $page = "catatan_medis";
    $table = "catatan_medis";
    $array_key = ['id','dokter_id','pasien_id','penyakit_id','tanggal','resep'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");
?>