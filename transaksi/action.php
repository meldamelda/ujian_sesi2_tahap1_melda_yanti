<?php
    require_once("../backend/config/config.php");
    $page = "penyakit";
    $table = "penyakit";
    $array_key = ['id','tanggal','jumlah','total'];
    $submit = strtolower($_POST['submit'] ?? $_GET['a']);
    
    require_once("../backend/config/action.php");

    if($db->rowCount() > 0){
        Message::flash("Data berhasil di ".strtoupper($submit=="delete"?"hapus":$submit),"success");
        header("Location:".BASEURL."../?p=$page");
    }
?>