<?php
    $id = $_GET['id']??null;
    if(isset($id)){
        $query = $db->query("SELECT * FROM transaksi WHERE id = '$id'");
        $result = $db->single();
    }
?>
<h4><?= ucfirst($id?"update":"tambah");?> data Transaksi</h4>
<a href="javascript:history.go(-1)" class="btn btn-secondary my-2">Kembali</a>
<form action="transaksi/action.php" method="POST">
    <div class="form-group mb-2 <?= $result['id']?'d-block':'d-none';?>">
        <label for="id">ID</label>
        <input type="text" class="form-control" name="id" id="id" placeholder="ID" value="<?= $result['id']??null;?>" readonly>
    </div>
    <div class="row">
        <div class="form-group mb-2 col-lg-4">
            <label for="tanggal">Tanggal</label>
            <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?= $result['tanggal']??null;?>">
        </div>
        <div class="form-group mb-2 col-lg-4">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?= $result['jumlah']??null;?>">
        </div>
        <div class="form-group mb-2 col-lg-4">
            <label for="total">Total</label>
            <input type="number" class="form-control" name="total" id="total" placeholder="Total" value="<?= $result['total']??null;?>">
        </div>
    </div>
    <div class="form-group mb-2 <?= $result['id']?'d-block':'d-none';?>">
        <label for="detail_id">ID</label>
        <input type="text" class="form-control" name="detail_id[]" id="detail_id" placeholder="ID" value="<?= $result['id']??null;?>" readonly>
    </div>
    <div class="row m-0">
        <div class="form-group col-lg-3"></div>
        <div class="form-group col-lg-3"></div>
        <div class="form-group col-lg-3">
            <button type="button" class="btn btn-sm btn-success mt-4 my-0" id="add-button">Tambah</button>
        </div>
    </div>
    <div class="row detail">
        <div class="row" id="duplikat">
            <div class="form-group mb-2 col-lg-3">
                <label for="obat">Obat <a href="<?= BASEURL.'?p=obat';?>">Cari Obat</a></label>
                <input type="text" class="form-control obat" name="obat[]" id="obat" placeholder="Obat" value="<?= $result['obat']??null;?>">
            </div>
            <div class="form-group mb-2 col-lg-3">
                <label for="detail_jumlah">Jumlah</label>
                <input type="number" class="form-control detail_jumlah" name="detail_jumlah[]" id="detail_jumlah" placeholder="Jumlah" value="<?= $result['detail_jumlah']??null;?>">
            </div>
        </div>
    </div>
    <div class="row submit-button">
        <div class="col-lg-2">
            <input type="submit" class="btn btn-success mt-2" name="submit" value="<?= strtoupper($id?"update":"simpan");?>">
        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        $(document).on("change", ".detail_jumlah", function(){
            var jumlah = 0;
            $(".detail_jumlah").each(function(){
                jumlah += parseInt($(this).val());
            });
            console.log(jumlah);
            $("#jumlah").val(jumlah);
        });
        $("#add-button").click(function(){
            var dtl = $(".detail .row").html();
            var btn = '';
            btn = "<div class='form-group col-lg-3'><button type='button' class='btn btn-sm btn-danger mt-4 my-0 remove-button'>Hapus</button></div>";
            dtl = "<div class='row'>"+dtl+btn+"</div>";
            $(".detail").append(dtl);
        });
        $(document).on("click", ".remove-button", function(){
            $(this).parent().parent().remove();
        });
    });
</script>