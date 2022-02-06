<?php
    $id = $_GET['id']??null;
    if(isset($id)){
        $query = $db->query("SELECT * FROM dokter WHERE id = '$id'");
        $result = $db->single();
    }
?>
<h4><?= ucfirst($id?"update":"tambah");?> data Dokter</h4>
<a href="javascript:history.go(-1)" class="btn btn-secondary my-2">Kembali</a>
<form action="dokter/action.php" method="POST">
    <div class="form-group mb-2 <?= $result['id']?'d-block':'d-none';?>">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id" placeholder="ID" value="<?= $result['id']??null;?>" readonly>
    </div>
    <div class="form-group mb-2">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $result['nama']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $result['alamat']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="spesialis">Spesialis</label>
        <input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Spesialis" value="<?= $result['spesialis']??null;?>">
    </div>
    <input type="submit" class="btn btn-success mt-2" name="submit" value="<?= strtoupper($id?"update":"simpan");?>">
</form>