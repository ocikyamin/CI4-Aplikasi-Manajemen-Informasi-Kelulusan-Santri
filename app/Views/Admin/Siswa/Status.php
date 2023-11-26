<div class="modal fade" id="modal_status" tabindex="-1" role="dialog" aria-labelledby="judul_form"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul_form"><i class="fa fa-graduation-cap"></i> <?=$siswa->nama_sekolah?> - <?=$siswa->periode_tahun?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form-status">
                        <?=csrf_field()?>
                    <input type="hidden" name="id" value="<?=$siswa->id?>">
                    <input type="hidden" name="old_status" value="<?=$siswa->status?>">
                    <input type="hidden" name="old_nomor_surat" value="<?=$siswa->nomor_surat?>">
                    <input type="hidden" name="old_nisn" value="<?=$siswa->nisn?>">
                    <div class="form-group row">
                        <label class="col-lg-3" for="">No.Surat</label>
                        <div class="col-lg-9">
                            <input type="text" name="nomor_surat" id="nomor_surat" class="form-control form-control-sm" value="<?=$siswa->nomor_surat?>">
                            <div class="nomor_surat invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3" for="">NISN</label>
                        <div class="col-lg-9">
                            <input type="text" name="nisn" id="nisn" class="form-control form-control-sm" value="<?=$siswa->nisn?>">
                            <div class="nisn invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3" for="">No.Peserta</label>
                        <div class="col-lg-9">
                            <input type="text" name="nopes" class="form-control form-control-sm" value="<?=$siswa->nopes?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3" for="">Nama</label>
                        <div class="col-lg-9">
                            <input type="text" name="nama" class="form-control form-control-sm" value="<?=$siswa->nama?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3" for="">TTL</label>
                        <div class="col-lg-5">
                            <input type="text" name="tmp_lahir" class="form-control form-control-sm" value="<?=$siswa->tmp_lahir?>">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="tgl_lahir" class="form-control form-control-sm" value="<?=$siswa->tgl_lahir?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3" for="">Jurusan</label>
                        <div class="col-lg-9">
                            <input type="text" name="jurusan" class="form-control form-control-sm" value="<?=$siswa->jurusan?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3" for="">Status</label>
                        <div class="col-lg-4">
                            <?php
                            if ($siswa->status=='L') {
                               echo "<span class='btn btn-success btn-block btn-sm shadow-sm'>LULUS</span>";
                            }else if ($siswa->status=='TL') {
                                echo "<span class='btn btn-danger btn-block btn-sm shadow-sm'>TIDAK LULUS</span>";
                             }else if ($siswa->status=='P') {
                                echo "<span class='btn btn-warning btn-block btn-sm shadow-sm'>PENDING</span>";
                             }else{
                                echo "<span class='btn btn-secondary btn-block btn-sm shadow-sm'>Tanpa Keterangan</span>";
                             }
                            ?>
                             <a href="#" onclick="DeleteSiswa(<?=$siswa->id?>)" class="btn bg-white text-danger btn-sm btn-block shadow-sm mt-2"><i class="fa fa-trash"></i> Hapus</a>
                        </div>
                        <div class="col-lg-5">
                        <select name="status" id="status" class="form-control form-control-sm">
                                <option value="">Pilih Status</option>
                                <option value="L">Lulus</option>
                                <option value="TL">Tidak Lulus</option>
                                <option value="P">Pending</option>
                            </select>
                            <button type="submit" id="btn-status" class="btn btn-info btn-sm btn-block shadow-sm mt-2">Perbarui</button>
                        </div>
                    </div>
                 
                                </form>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                       
                </div>
            </div>
        </div>
    </div>

<script>
$('#form-status').submit(function (e) { 
e.preventDefault();
$.ajax({
type: "post",
url: "<?=base_url('admin/siswa/status')?>",
data: $(this).serialize(),
dataType: "json",
beforeSend: function() {
$('#btn-status').prop('disabled', true);
$('#btn-status').html(`<i class="fa fa-spin fa-spinner"></i>`);
},

complete: function() {
$('#btn-status').prop('disabled', false);
$('#btn-status').html(`Perbarui`);
},
success: function (response) {
    if (response.error) {
        if (response.error.nomor_surat) {
            $('#nomor_surat').addClass('is-invalid')
            $('.nomor_surat').html(response.error.nomor_surat)
        }
        if (response.error.nisn) {
            $('#nisn').addClass('is-invalid')
            $('.nisn').html(response.error.nisn)
        }
        
    }
    if (response.sukses) {
        TableSiswa()
        $('#modal_status').modal('hide');
    }
}
});

});

function DeleteSiswa(id) {
    Swal.fire({
            title: 'Are you sure?',
            text: "This action will delete this row !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
              // hapus data 
              $.ajax({
                url: '<?=base_url('admin/siswa/del')?>',
                type: 'POST',
                dataType: 'json',
                data: {id: id},
                success : function (response) {
                  if (response.sukses) {
                  Swal.fire(
                  'Deleted',
                  response.sukses,
                  'success'
                  )
                  TableSiswa()
                  $('#modal_status').modal('hide');
                  }
                }
            
              })

            }
            })


  }

</script>