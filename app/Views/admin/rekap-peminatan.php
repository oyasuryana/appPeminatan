<?=$this->extend('admin/dashboard');?>
<?=$this->section('konten');?>

<p><?=$introTeks;?></p>

<form method="POST" class="form">
    
    <div class="form-group mb-2">
        <label class="fw-bold">Tahun Peminatan</label>
        <select class="form-control" name="pilihTahun">
            <?php if(isset($listTahun)): ?>
                <?php foreach($listTahun as $row ) : ?>
                    <option value="<?=$row['tahun'];?>"><?=$row['tahun'];?></option>
                <?php endforeach;?>   
             <?php endif;?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Tampilkan</button>
    </div>
</form>

<?=$this->endSection();?>