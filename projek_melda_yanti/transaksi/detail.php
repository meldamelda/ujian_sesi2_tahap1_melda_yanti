<h4>Detail Transaksi</h4>
<?= Message::showFlash();?>
<div class="">
    <a href="javascript:history.go(-1)" class="btn btn-secondary float-start">Kembali</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <?php
        $trx = $_GET['id'];
        $subquery = $db->query("SELECT * FROM v_detail_transaksi WHERE transaksi = '$trx'");
        $subresult = $db->resultSet();
        foreach ($subresult as $sr):
    ?>
    <tbody>
        <tr>
            <td><?= $sr['nama_obat'];?></td>
            <td><?= $sr['jumlah'];?></td>
            <td><?= $sr['harga'];?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </tbody>
</table>
