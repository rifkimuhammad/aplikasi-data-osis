<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <center><h6 class="h3-mb-4 text-gray-800">SELAMAT DATANG DI OSIS SMK NU TASIKMALAYA</h6></center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Ketua</td>
                        <td>Nama Wakil</td>
                        <td>Masa Khidnat</td>
                        <td colspan="2">Setting</td>
                        
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($masa_khidnat as $M_masa_khidnat) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $M_masa_khidnat['nama_ketua']; ?></td>
                            <td><?php echo $M_masa_khidnat['nama_wakil']; ?></td>
                            <td><?php echo $M_masa_khidnat['masa_khidnat']; ?></td>
                            
                            <td>                               
                                <a href="<?php echo base_url() ?>Home3/edit_data/<?php echo $M_masa_khidnat['id_masa_khidnat']; ?>" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>Home3/hapus_data/<?php echo $M_masa_khidnat['id_masa_khidnat']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                <a href="<?php echo base_url() ?>Home3/lihat_data/<?php echo $M_masa_khidnat['id_masa_khidnat']; ?>" class="badge badge-success"><i class="fa fa-eye"></i></a>
                    </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
   <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal untuk tambah data -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('Home3/proses_tambah_data'); ?>">
                    <div class="form-group">
                        <label for="nama_ketua" class="col-sm-2 col-form-label">Nama Ketua</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_ketua">
                        </div>
                    <div class="form-group">
                        <label for="nama_wakil" class="col-sm-2 col-form-label">Nama Wakil</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_wakil">
                        </div>
                    <div class="form-group">
                        <label for="masa_khidnat" class="col-sm-2 col-form-label">Masa Khidnat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="masa_khidnat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_ketua" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Akhir modal -->