<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data User</h3> <hr>

	<?php foreach($user as $usr) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_user/update' ?>">
			<div class="form-grup">
				<label>Nama</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>">
			</div><br>
			<div class="form-grup">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">
			</div><br>
			<div class="form-grup">
				<label>Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo $usr->password ?>">
			</div><br>
			<br>
			<?php echo anchor('admin/data_user/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>