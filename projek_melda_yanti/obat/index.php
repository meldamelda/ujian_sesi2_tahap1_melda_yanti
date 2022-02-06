<h4>Obat</h4>
<?= Message::showFlash();?>
<div class="">
    <a href="javascript:history.go(-1)" class="btn btn-secondary float-start">Kembali</a>
    <a href="<?= BASEURL."?p=obat&a=form";?>" class="btn btn-success float-end">Tambah Data</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $query = $db->query("SELECT * FROM obat");
            $result = $db->resultSet();
            foreach($result as $r):
        ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $r['id'];?></td>
                <td><?= $r['nama'];?></td>
                <td><?= $r['harga'];?></td>
                <td><?= $r['stok'];?></td>
                <td class="aksi">
                    <a href="<?= BASEURL."?p=obat&a=form&id=".$r['id'];?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="<?= BASEURL."obat/action.php?a=delete&id=".$r['id'];?>" class="btn btn-danger btn-sm delete-button" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    /* $(document).on("click",".delete-button",function(){
        if(confirm("Yakin ingin menghapus?")){
            (this).attr()
        }
    }); */
</script>