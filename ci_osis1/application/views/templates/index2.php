<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <center><h6 class="h3-mb-4 text-gray-800">SELAMAT DATANG DI OSIS SMK NU TASIKMALAYA</h6></center>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
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
                        <td>Nama Tahun</td>
                        <td colspan="2">Setting</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tahun as $thn) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $thn['nama_tahun']; ?></td>
                            <td>                               
                                <a href="<?php echo base_url() ?>Home2/edit_data/<?php echo $thn['id_tahun']; ?>" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>Home2/hapus_data/<?php echo $thn['id_tahun']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
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
                <form method="post" action="<?php echo base_url('Home2/proses_tambah_data'); ?>">
                    <div class="form-group">
                        <label for="nama_tahun" class="col-sm-2 col-form-label">Nama Tahun</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_tahun">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_tahun" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>
<!-- Akhir modal -->