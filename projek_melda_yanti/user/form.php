<?php
    $id = $_GET['id']??null;
    if(isset($id)){
        $query = $db->query("SELECT * FROM user WHERE id = '$id'");
        $result = $db->single();
    }
?>
<h4><?= ucfirst($id?"update":"tambah");?> data User</h4>
<a href="<?= BASEURL."?p=user";?>" class="btn btn-secondary my-2">Kembali</a>
<form action="user/action.php" method="POST">
    <div class="form-group mb-2">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id" placeholder="ID" value="<?= $result['id']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $result['nama']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            <?php
                if(isset($result['jenis_kelamin'])){
                    $jk = $result['jenis_kelamin'];
                }else{
                    $jk = null;
                }
            ?>
            <option value="">PILIH</option>
            <option value="Laki-laki" <?= $jk=="Laki-laki"?"selected":null;?>>Laki-laki</option>
            <option value="Wanita" <?= $jk=="Wanita"?"selected":null;?>>Wanita</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $result['alamat']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="kontak">Kontak</label>
        <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?= $result['kontak']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $result['username']??null;?>">
    </div>
    <div class="form-group mb-2">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
    </div>
    <input type="submit" class="btn btn-success mt-2" name="submit" value="<?= strtoupper($id?"update":"simpan");?>">
</form>