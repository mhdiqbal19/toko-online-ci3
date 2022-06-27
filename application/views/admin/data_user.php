<div class="container-fluid">
  <h5>Data Pelanggan</h5><hr>
	<button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Pelanggan</button><br>
 
	<table class="table table-bordered">
		<tr>
			<th>No</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>

			<th colspan="2">Aksi</th>
		</tr>

<?php 
$no=1;
foreach ($user as $usr) : ?>
		<tr>
    <td><?php echo $no++ ?></td>
		<td><?php echo $usr->nama ?></td>
    <td><?php echo $usr->username ?></td>
    <td><?php echo $usr->password ?></td>


    <td><?php echo anchor('admin/data_user/edit/'.$usr->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
    <td><?php echo anchor('admin/data_user/hapus_user/'.$usr->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>
<?php endforeach ; ?>

	</table>

 </div>

 <!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Data Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <form action="<?php echo base_url(). 'admin/data_user/tambah_aksi'; ?>" method="post" class="user">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Anda" name="nama">
                  <?php echo form_error('nama', '<div class="text-danger small ml-2">','</div>') ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda" name="username">
                  <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1', '<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
    </div>
  </div>
</div>