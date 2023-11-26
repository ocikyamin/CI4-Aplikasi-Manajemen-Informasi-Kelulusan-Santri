<style>
    input[type=search] {
        border-radius:50px;
        box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
        /* color: #fff;
    background-color: #4e73df; */
    /* border-color: #4e73df; */
    }
 
</style>
<table class="table table-sm table-bordered table-striped table-hover mt-3 mb-3" id="dataTable" style="font-size:12px;">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th>No.Surat</th>
                    <th>NISN</th>
                    <th>No.Pes</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                    <th>Img</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($data as $r):?>
                <tr>
                    <td class="text-center"><?=$i++?>.</td>
                    <td><?=$r['nomor_surat']?></td>
                    <td><?=$r['nisn']?></td>
                    <td><?=$r['nopes']?></td>
                    <td><?=$r['nama']?></td>
                    <td><?=$r['tmp_lahir']?>/<?=$r['tgl_lahir']?></td>
                    <td><?=$r['jurusan']?></td>
                    <td><?php 
                    if ($r['status']=='L') {
                        echo "<span class='btn btn-sm btn-block btn-success'>Lulus</span>";
                    }else if ($r['status']=='TL') {
                        echo "<span class='btn btn-sm btn-block btn-danger'>Tidak Lulus</span>";
                    }else if ($r['status']=='P') {
                        echo "<span class='btn btn-sm btn-block btn-warning'>Pending</span>";
                    }else{
                        echo "<span class='btn btn-sm btn-block btn-secondary'>Tidak ada Keterangan</span>";  
                    }
                    
                    ?></td>
                    <td><?=$r['img']?></td>
                    <td class="text-center">
                    <a href="#" onclick="setStatus(<?=$r['id']?>)" class="btn bg-white text-primary btn-circle btn-sm shadow-sm"><i class="fa fa-cog"></i></a>
                        
                    </td>
                </tr>
                <?php endforeach;?>
                
            </tbody>
        </table>
<script>
$(document).ready(function() {
$('#dataTable').DataTable();
});
</script>