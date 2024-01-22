<?=$this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row bg-dark-subtle">
    <div class="col-lg-12 ">
        

        <!-- menampilkan pesan -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-info">
                <strong>Success!!</strong>
                <p>
                    <?= session()->getFlashdata('success') ?>
                </p>
            </div>
            <?php endif;?>

            <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <strong>Whoops Salah!!</strong>
                <p>
                    <?= session()->getFlashdata('error') ?>
                </p>
            </div>
            <?php endif;?>
            <div class="container mt-3">
            <h3><b>Data Training</b> <a href="<?=url_to('training.create')?>"class="btn btn-success">Add Data</a></h3>
        <hr/> <table class="table table-bordered">
    <thead>
                <tr>
                    <th>No.</th> 
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Rumah</th>
                    <th>Status</th>
                    <th>Jumlah Tanggungan</th>
                    <th>Profesi</th>
                    <th>Penghasilan Pertahun</th>
                    <th>Kartu Kredit</th>
                    <th>Training</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach ($trainings as $p) :
                ?>
                <tr>
                    <td> <?=$nomor?></td>
                    <td> <?=$p->training_nama?></td>
                    <td> <?=$p->training_jenis_kelamin?></td>
                    <td> <?=$p->training_status_rumah?></td>
                    <td> <?=$p->training_status?></td>
                    <td> <?=$p->training_jumlah_tanggungan?></td>
                    <td> <?=$p->training_profesi?></td>
                    <td> <?=$p->training_penghasilan_pertahun?></td>
                    <td>  <?=$p->training_kartu_kredit?> </td>
               
                    <td>
                        <a href="<?=site_url('/admin/training/edit/'.$p->training_id)?>" class="btn btn-primary">Edit</a>
                        <a href="<?=site_url('/admin/training/delete/'.$p->training_id)?>" class="btn btn-danger">Delete</a>

                    </td>
                    
                </tr>
                <?php $nomor++; endforeach; ?>
                
            </tbody>
        </table>
    </div>
</div>
</div>

<?= $this->endSection() ?>