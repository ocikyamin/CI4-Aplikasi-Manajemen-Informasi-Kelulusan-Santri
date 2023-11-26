<!-- <div class="alert bg-white mt-4" role="alert">
            <h4 class="alert-heading"><i class="bi bi-bookmarks"></i> Hasil Pengumuman</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div> -->
<style>
    @media (max-width: 767px) {
        .mobile{
        font-size:12px;
    }
  }

  
</style>
<div class="modal fade" id="result_pengumuman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="result_pengumumanLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="result_pengumumanLabel">Jenis Kelulusan : <strong><?=$info->description?></strong></h1>
</div>
<div class="modal-body">
<?php
// echo "<pre>";
// print_r($info);
// echo "</pre>";
?>

<?php
// Jika Sttus Pengumuman Aktif 
if ($info->is_active==1) {
// Jika Status Kelulusan Pending 
if ($info->status=="P") {
  ?>
    <div class="text-center">
    <img src="<?=base_url('public/img/pending.png')?>" alt="">
    <br>
    
    <h2>
        <div>
            <small>Status Kelulusan Ananda</small>
        </div>
        <b class="text-warning">"PENDING"</b>
    <div>
        <small>Silahkan Hubungi Wali Kelas atau Pihak Madrasah. </small>
    </div>
    </h2>
    <div>
  <?php


}else{
   ?>


<table class="mobile">
        <tr>
            <td colspan="3">  Yang bertanda tangan dibawah ini :</td>
        </tr>
    <tr>
            <td>Nama</td>
            <td>:</td>
            <td><strong><?=$info->kepala_sekolah?></strong></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td><?=$info->nip_kepala_sekolah?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$info->jabatan?> <?=$info->nama_sekolah?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?=$info->alamat_sekolah?></td>
        </tr>
        <tr>
            <td colspan="3">  Dengan ini menerangkan Bahwa :</td>
        </tr>
        

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><strong><?=$info->nama?></strong></td>
        </tr>
        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td><?=$info->tmp_lahir?> / <?=$info->tgl_lahir?></td>
        </tr>
        <tr>
            <td>Sekolah Asal/NPSN</td>
            <td>:</td>
            <td><?=$info->nama_sekolah?></td>
        </tr>
        <tr>
            <td>Nomor Induk Sekolah</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional (NISN)</td>
            <td>:</td>
            <td><?=$info->nisn?></td>
        </tr>
        <tr>
            <td>Nomor Peserta / Prog.Studi</td>
            <td>:</td>
            <td><?=$info->nopes?> / <?=$info->jurusan?></td>
        </tr>
        <tr>
            <td colspan="3">
                  Telah Mengikuti <strong><?=$info->description?></strong> Tahun Ajaran <strong><?=$info->periode_tahun?></strong>, berdasarkan hasil rapat dewan guru, penilaian dan kriteria kelulusan  Madrasah bahwa nama tersebut diatas dinyatakan. 
                  <?php
                  if ($info->status=="L") {
                    // Lulus 
                    ?>
                    <div class="text-center">
                    <h2><b class="text-success">"LULUS"</b></h2>
                    <!-- Silahkan Download Surat Keterangan Lulus (SKL) Pada tombol dibwah ini.
                    <div>
                    <a href="" class="btn btn-success btn-lg shadow mt-3">Download SKL</a>
                    </div> -->
                    </div>
                    <?php
                  }else if ($info->status=="TL") {
                    // Tidak Lulus 
                    ?>
                       <div class="text-center">
                    <h2><b class="text-danger">"TIDAK LULUS"</b></h2>
                  </div>
                    <?php
                  }else if ($info->status=="P") {
                    // Pending
                    ?>

                    <div class="text-center">
                    <h2><b class="text-warning">"PENDING"</b></h2>
                    Mohon Maaf, Status Kelulusan Ananda Pending. Silahkan Hubungi Wali Kelas atau Pihak Madrasah. 
                    <div>
                    </div>
                    </div>
                    <?php
                  }
                  
                  ?>
                </td>
        </tr>
        <tr>
            <td colspan="3">  Demikian Informasi ini dibuat dengan sebenarnya</td>
        </tr>

        <tr>
            <td colspan="3" align="right">
                Canduang, <?=date('d  F  Y')?> <br>
                Kepala Madrasah <br> <br> <br> <br>

                <strong><?=$info->kepala_sekolah?></strong> <br> 
                NIP. <strong><?=$info->nip_kepala_sekolah?></strong>

            </td>
        </tr>
    </table>
   <?php
   }
}else{
    ?>
    <div class="alert alert-warning text-center">
        <h3><b>Mohon Maaf</b> <br>
            <small>Informasi Pengumuman Tidak Aktif</small>

        </h3>
        
    </div>
    <?php
}
?>

    

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
<!-- <button type="button" class="btn btn-primary">Understood</button> -->
</div>
</div>
</div>
</div>