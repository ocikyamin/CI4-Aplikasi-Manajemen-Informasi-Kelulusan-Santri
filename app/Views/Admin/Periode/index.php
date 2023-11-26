<?= $this->extend('Admin/Default') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">Periode</h1>
<a href="#" onclick="Add()" class="btn btn-primary btn-circle shadow mb-2">
<i class="fa fa-plus"></i>
</a>
<a href="#" class="btn btn-danger btn-circle shadow mb-2">
<i class="fa fa-trash"></i>
</a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Kelulusan</h6>
</div>
<div class="card-body" id="table-periode"></div>
</div>
<div class="view"></div>
<script>
    $(document).ready(function () {
        TablePeriode()
    });
    function TablePeriode() {
        $.ajax({
            url: "<?=base_url('admin/periode/list')?>",
            data: "data",
            dataType: "json",
            success: function (response) {
                $('#table-periode').html(response.view)
            }
        });

      }

    function Add() {
        $.ajax({
            url: "<?=base_url('admin/periode/add')?>",
            data: "data",
            dataType: "json",
            success: function (response) {
                $('.view').html(response.view).show()
                $('#add').modal('show');
            }
        });
      }
</script>
<?= $this->endSection() ?>
