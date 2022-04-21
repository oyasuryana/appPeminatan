<?=$this->extend('admin/dashboard');?>
<?=$this->section('konten');?>
<p><?=$introTeks;?></p>

<div class="table-responsive">
    <table class="table tale-sm table-hovered">
        <thead class="bg-light">
            <tr>
                <th>#</th> 
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Tempat,Tanggal Lahir</th>
                <th>L/P</th>
                <th>Asal Sekolah</th>
                <;;klkkdxxPilihan 1</th>
                <th>Pilihan 2</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($listPeminatan)) : $no=null ?>
                <?php foreach($listPeminatan as $row) : $no++ ?>
                    <tr>
                    <td><?=$page==1 ? $no : $no+$page ?> </td>    
                    <td><?=$row['nisn'];?></td>
                    <td><?=ucwords(strtolower($row['nama_lengkap']));?></td>
                    <td><?=ucwords(strtolower(trim($row['tempat_lahir']))).', '.$row['tanggal_lahir'];?></td>
                    <td><?=$row['jenis_kelamin'];?></td>
                    <td><?=strtoupper($row['sekolah_asal']);?></td>
                    <td><?=$row['pilihan_1'];?></td>
                    <td><?=$row['pilihan_2'];?></td>
                    </tr>
                <?php endforeach;?>        
            <?php endif;?>        
        </tbody>
    </table>
</div>

<?=$pager->links('peminatan','bootstrap_pagination'); ?>

<?=$this->endSection();?>