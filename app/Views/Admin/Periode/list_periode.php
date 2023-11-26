<div class="table-responsive">
        <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><i class="fa fa-list"></i></th>
                    <th>TA</th>
                    <th>Waktu</th>
                    <th>Tipe</th>
                    <th>Status</th>
                    <th><i class="fa fa-cog"></i></th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $i=1;
                foreach ($periode as $r):?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$r['periode_tahun']?></td>
                    <td><?=$r['waktu_mulai']?> - <?=$r['waktu_tutup']?></td>
                    <td><?=$r['tipe_kelulusan']?></td>
                    <td><?php
                    if ($r['is_active']==1) {
                        echo "<span class='badge badge-success'> Aktif</span>";
                    }else{
                        echo "<span class='badge badge-danger'> Off</span>";
                    }
                     ?></td>
                    <td>
                        <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
                
            </tbody>
        </table>
    </div>