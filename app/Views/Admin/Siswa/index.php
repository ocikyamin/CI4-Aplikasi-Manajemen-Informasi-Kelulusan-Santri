<?= $this->extend('Admin/Default') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">Siswa</h1>

<a href="#" onclick="Add()" class="btn btn-primary btn-circle btn-sm shadow mb-2">
<i class="fa fa-plus"></i>
</a>

<a href="#" onclick="AddMore()" class="btn btn-success btn-circle btn-sm shadow mb-2">
<i class="fas fa-cloud-upload-alt"></i>
</a>

<a href="#" class="btn btn-danger btn-circle btn-sm shadow mb-2">
<i class="fa fa-trash"></i>
</a>
<!-- DataTales Example -->
<div class="card shadow mb-4 mt-2">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-list"></i> Daftar Siswa</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <div id="table-siswa" class="mt-3 mb-3"></div>
        
    </div>
</div>
</div>
<div class="view"></div>
<script>
    $(document).ready(function () {
        TableSiswa()
    });
    function TableSiswa () {
        $.ajax({
            url: "<?=base_url('admin/siswa/list')?>",
            data: "data",
            dataType: "json",
        //     beforeSend: function() {
        // $('#table-siswa').html(`<div class="text-center"><i class="fa fa-spin fa-spinner"></i></div>`);
        // },
            success: function (response) {
                $('#table-siswa').html(response.view)
            }
        });

      }

    function AddMore() {
        $.ajax({
            url: "<?=base_url('admin/siswa/add')?>",
            data: "data",
            dataType: "json",
            success: function (response) {
                $('.view').html(response.view).show()
                $('#add').modal('show');
            }
        });
      }
    //   setStatus 
    function setStatus (id) { 
        $.ajax({
            url: "<?=base_url('admin/siswa/status')?>",
            data: {id:id},
            dataType: "json",
            success: function (response) {
                $('.view').html(response.view).show()
                $('#modal_status').modal('show');
            }
        });
     }
</script>
<?= $this->endSection() ?>
