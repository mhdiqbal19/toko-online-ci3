<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Barang</h3> <hr>

	<?php foreach($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
			<div class="form-grup">
				<label>Nama Barang</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
			</div><br>
			<div class="form-grup">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
			</div><br>
			<div class="form-grup">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
			</div><br>
			<div class="form-grup">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div><br>
			<div class="form-grup">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
			</div><br>
			<?php echo anchor('admin/data_barang/','<div class="btn btn-sm btn-danger"><i class="fas fa-undo"></i> Kembali</div>') ?>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
		</form>

	<?php endforeach; ?>

</div>