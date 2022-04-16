<div class="container-fluid">

<h3><?php echo $title; ?></h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home3/proses_edit_data');?>">
<input type="hidden" name="id_masa_khidnat" value="<?php echo $tbl_masa_khidnat['id_masa_khidnat'];?>">
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label">Nama Ketua</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_ketua" required="" value="<?php echo $tbl_masa_khidnat['nama_ketua']; ?>">
  </div>
  <div class="form-group">
    <label for="nama_wakil" class="col-sm-2 col-form-label">Nama Wakil</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="nama_wakil" required="" value="<?php echo $tbl_masa_khidnat['nama_wakil']; ?>">
  </div>
  <div class="form-group">
    <label for="masa_khidnat" class="col-sm-2 col-form-label">Masa Khidnat</label>
    <div class="col-sm-2">
    <input type="text" class="form-control" name="masa_khidnat" required="" value="<?php echo $tbl_masa_khidnat['masa_khidnat']; ?>">
  </div>
  </div>
  <div class="form-group">
    <label for="nama_ketua" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-primary">Ubah</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
  </div>
</form>
</div>