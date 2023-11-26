<p>
<div class="alert alert-warning">
  Harap Periksa seluruh isian data berikut ini seblum melakukan penyimpanan data.
</div>
</p>
<div class="table-responsive mt-3">
  <form id="form-upload-files" method="post">
  <input type="hidden" name="file_nya" value="<?=$file_nya?>">
  <input type="hidden" name="sekolah_id" value="<?=$sekolah_id?>">
  <input type="hidden" name="periode_id" value="<?=$periode_id?>">
<table class="table-bordered table-striped table-hover" style="font-size:12px;" width="100%" cellpadding="3">
  <thead class="bg-gradient-success text-white">
    <tr>
      <?php foreach ($first_line as $k) {  echo '<th>'.strtoupper($k).'</th>';  }?>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1;
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      ?>
      <tr>
      <td> <input type="text" name="nomor_surat[]" value="<?=$data[0]?>"></td>
      <td> <input type="text" name="nisn[]" value="<?=$data[1]?>"></td>
      <td> <input type="text" name="nopes[]" value="<?=$data[2]?>"></td>
      <td> <input type="text" name="nama[]" value="<?=$data[3]?>"></td>
      <td> <input type="text" name="tmp_lahir[]" value="<?=$data[4]?>"></td>
      <td> <input type="text" name="tgl_lahir[]" value="<?=$data[5]?>"></td>
      <td> <input type="text" name="jurusan[]" value="<?=$data[6]?>"></td>
      <td> <input type="text" name="status[]" value="<?=$data[7]?>"></td>
      <td> <input type="text" name="img[]" value="<?=$data[8]?>"></td>
      </tr>
      <?php
    }
    ?>

  </tbody>

</table>
<p class="text-center mt-3">
<button type="submit" id="btn-import-file" class="btn btn-info"><i class="fas fa-cloud-upload-alt"></i> Import Files</button>
</p>
</form>
<script>
  $('#form-upload-files').submit(function (e) { 
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "<?=base_url('admin/siswa/upload')?>",
      data: $(this).serialize(),
      dataType: "json",
      beforeSend: function() {
        $('#btn-import-file').prop('disabled', true);
        $('#btn-import-file').html(`<i class="fa fa-spin fa-spinner"></i>`);
        },

        complete: function() {
        $('#btn-import-file').prop('disabled', false);
        $('#btn-import-file').html(`<i class="fas fa-cloud-upload-alt"></i> Import Files`);
        },
      success: function (response) {
        if (response.error) {
          Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: response.error.file_nya,
                showConfirmButton: false,
                timer: 2500
                })
                TableSiswa()
        }
        if (response.sukses) {
                Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: response.sukses,
                showConfirmButton: false,
                timer: 2500
                })
              //  window.location.reload();
                            
            }
        
      }
    });
    
  });


//  $('#form-upload').submit(function (e) { 
//   e.preventDefault();
//   aler('okk')
//   // $.ajax({
//   //   type: "post",
//   //   url: "<?=base_url('admin/siswa/upload')?>",
//   //   data: $(this).serialize(),
//   //   dataType: "json",
//   //       beforeSend: function() {
//   //       $('#btn-import-file').prop('disabled', true);
//   //       $('#btn-import-file').html(`<i class="fa fa-spin fa-spinner"></i>`);
//   //       },

//   //       complete: function() {
//   //       $('#btn-import-file').prop('disabled', false);
//   //       $('#btn-import-file').html(`<i class="fas fa-cloud-upload-alt"></i> Import Files`);
//   //       },
//   //   success: function (response) {
      
//   //   }
//   // });
  
//  });
</script>

</div>