<h4>Transaksi</h4>
<?= Message::showFlash();?>
<div class="">
    <a href="javascript:history.go(-1)" class="btn btn-secondary float-start">Kembali</a>
    <a href="<?= BASEURL."?p=transaksi&a=form";?>" class="btn btn-success float-end">Tambah Data</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $query = $db->query("SELECT * FROM transaksi");
            $result = $db->resultSet();
            foreach($result as $r):
        ?>
        <tr class="detail">
            <td><?= $no++;?></td>
            <td><a href="<?= BASEURL."?p=transaksi&a=detail&id=".$r['id'];?>"><?= $r['id'];?></a></td>
            <td><?= $r['tanggal'];?></td>
            <td><?= $r['jumlah'];?></td>
            <td><?= $r['total'];?></td>
            <td class="aksi">
                <a href="<?= BASEURL."?p=transaksi&a=form&id=".$r['id'];?>" class="btn btn-warning btn-sm">Update</a>
                <a href="<?= BASEURL."transaksi/action.php?a=delete&id=".$r['id'];?>" class="btn btn-danger btn-sm delete-button" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
</script>
