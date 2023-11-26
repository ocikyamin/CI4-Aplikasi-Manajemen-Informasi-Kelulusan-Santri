<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="judul_form"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul_form"><i class="fas fa-cloud-upload-alt"></i> Upload Data Siswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form-upload" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-lg-3" for="">Sekolah</label>
                        <div class="col-lg-9">
                            <select name="sekolah" id="sekolah" class="form-control">
                                <option value="">Pilih Sekolah</option>
                                <?php
                                foreach ($sekolah as $s):?>
                                <option value="<?=$s['id']?>"><?=$s['nama_sekolah']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3" for="">Periode</label>
                        <div class="col-lg-9">
                            <select name="periode" id="periode" class="form-control">
                                <option value="">Pilih Periode Kelulusan</option>
                                <?php
                                foreach ($periode as $s):?>
                                <option value="<?=$s['id']?>"><?=$s['periode_tahun']?> - <?=$s['tipe_kelulusan']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3" for="">Files</label>
                        <div class="col-lg-9">
                            <div class="mb-2">
                                <a href="<?=base_url('public/Template.csv')?>" target="_blank" class="btn gradient-light shadow-sm btn-sm">Download Template .csv</a>
                                <a href="<?=base_url('public/Template.xls')?>" target="_blank" class="btn gradient-light shadow-sm btn-sm">Download Template .xls</a>
                            </div>
                            <input type="file" name="file_nya" id="file_nya">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3"></label>
                        <div class="col-lg-9">
                        <button type="submit" id="btn-preview-file" class="btn bg-gradient-success text-white shadow-sm"><i class="fas fa-cloud-upload-alt"></i> Upload</button>
                        </div>
                    </div>
                 
                                </form>
                                <div id="area_preview"></div>

                </div>
                <div class="modal-footer">
                    
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <!-- <button class="btn btn-primary">Save</button> -->
                </div>
            </div>
        </div>
    </div>
        <script>
        $('#form-upload').submit(function (e) { 
        e.preventDefault();
        let forms = $('#form-upload')[0];
        let data = new FormData(forms);
        // alert('okk')
        $.ajax({
        type: "POST",
        url: "<?=base_url('admin/siswa/add')?>",
        dataType: 'json',
        data: data,
        enctype: 'multipart/form-data',
        processData : false,
        contentType: false,
        cache: false,
        beforeSend: function() {
        $('#btn-preview-file').prop('disabled', true);
        $('#btn-preview-file').html(`<i class="fa fa-spin fa-spinner"></i>`);
        },

        complete: function() {
        $('#btn-preview-file').prop('disabled', false);
        $('#btn-preview-file').html(`<i class="fas fa-cloud-upload-alt"></i> Upload`);
        },
        success: function (response) {
        if (response.error) {
            if (response.error.sekolah) {
                $('#sekolah').addClass('is-invalid')
            }
            if (response.error.periode) {
                $('#periode').addClass('is-invalid')
            }
            if (response.error.file_nya) {
                $('#file_nya').addClass('is-invalid')
            }
            
        }

        $('#area_preview').html(response.sample);
        }
        });

        });
    </script>