<h4>User</h4>
<?= Message::showFlash();?>
<div class="">
    <a href="<?= BASEURL;?>" class="btn btn-secondary float-start">Kembali</a>
    <a href="<?= BASEURL."?p=user&a=form";?>" class="btn btn-success float-end">Tambah Data</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Jenis Kelamin</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $query = $db->query("SELECT * FROM user");
            $result = $db->resultSet();
            foreach($result as $r):
        ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $r['nama'];?></td>
                <td><?= $r['username'];?></td>
                <td><?= $r['jenis_kelamin'];?></td>
                <td><?= $r['kontak'];?></td>
                <td><?= $r['alamat'];?></td>
                <td class="aksi">
                    <a href="<?= BASEURL."?p=user&a=form&id=".$r['id'];?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="<?= BASEURL."user/action.php?a=delete&id=".$r['id'];?>" class="btn btn-danger btn-sm delete-button" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
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