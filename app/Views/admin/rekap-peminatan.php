<?=$this->extend('admin/dashboard');?>
<?=$this->section('konten');?>

<p><?=$introTeks;?></p>

<form method="POST" class="mb-3">
    
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

<?php if(isset($rekapPeminatanPilihan1)) : $nomor=null ?>
    <p>Berikut ini rekapitulasi peminatan PPDB untuk pilihan ke-1</p> 
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kompetensi Keahlian</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rekapPeminatanPilihan1 as $row ) : $nomor++ ?>
                <tr>
                    <td><?=$nomor;?>.</td>
                    <td><?=$jurusan[$row['pilihan_1']];?></td>
                    <td class="text-end"><?=$row['jml'];?></td>
                </tr>
            <?php endforeach;?>    
        </tbody>
    </table>
<?php endif;?>

<?php if(isset($rekapPeminatanPilihan2)) : $nomor=null ?>
    <p>Berikut ini rekapitulasi peminatan PPDB untuk pilihan ke-2</p> 
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kompetensi Keahlian</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rekapPeminatanPilihan2 as $row ) : $nomor++ ?>
                <tr>
                    <td><?=$nomor;?>.</td>
                    <td><?=$jurusan[$row['pilihan_2']];?></td>
                    <td class="text-end"><?=$row['jml'];?></td>
                </tr>
            <?php endforeach;?>    
        </tbody>
    </table>
<?php endif;?>

<?=$this->endSection();?>