<?= $this->extend('Admin/Default') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-3 text-gray-800">Sekolah</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Sekolah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sekolah</th>
                        <th>NPSN/NIS</th>
                        <th>Alamat</th>
                        <th>Kepala/NIP</th>
                        <th>Jabatan</th>
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($data as $r):?>
                    <tr>
                        <td><?=$r['nama_sekolah']?></td>
                        <td><?=$r['npsn']?></td>
                        <td><?=$r['alamat_sekolah']?></td>
                        <td><?=$r['kepala_sekolah']?>/<?=$r['nip_kepala_sekolah']?></td>
                        <td><?=$r['jabatan']?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>