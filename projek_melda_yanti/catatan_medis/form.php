<?php
    $id = $_GET['id']??null;
    if(isset($id)){
        $query = $db->query("SELECT * FROM catatan_medis WHERE id = '$id'");
        $result = $db->single();
    }
?>
<h4><?= ucfirst($id?"update":"tambah");?> data Catatan Medis</h4>
<a href="javascript:history.go(-1)" class="btn btn-secondary my-2">Kembali</a>
<form action="catatan_medis/action.php" method="POST">
    <div class="form-group mb-2 <?= $result['id']?'d-block':'d-none';?>">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id" placeholder="ID" value="<?= $result['id']??null;?>" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="dokter_id">ID Dokter <a href="<?= BASEURL.'?p=dokter';?>">Cari Dokter</a></label>
        <input type="text" class="form-control" name="dokter_id" id="dokter_id" placeholder="ID Dokter" value="<?= $result['dokter_id']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="pasien_id">ID Pasien <a href="<?= BASEURL.'?p=pasien';?>">Cari Pasien</a></label>
        <input type="text" class="form-control" name="pasien_id" id="pasien_id" placeholder="ID Pasien" value="<?= $result['pasien_id']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="penyakit_id">ID Penyakit <a href="<?= BASEURL.'?p=penyakit';?>">Cari Penyakit</a></label>
        <input type="text" class="form-control" name="penyakit_id" id="penyakit_id" placeholder="ID Penyakit" value="<?= $result['penyakit_id']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?= $result['tanggal']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="resep">Resep</label>
        <input type="text" class="form-control" name="resep" id="resep" placeholder="Resep" value="<?= $result['resep']??null;?>">
    </div>
    <input type="submit" class="btn btn-success mt-2" name="submit" value="<?= strtoupper($id?"update":"simpan");?>">
</form>