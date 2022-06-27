<div class="container-fluid">
  <h5>Data Barang</h5><hr>
	<button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button><br>
 
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>
		</tr>

	<?php 
		$no=1;
		foreach($barang as $brg) :?>

		<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $brg->nama_brg ?> </td>
		<td><?php echo $brg->keterangan ?> </td>
		<td><?php echo $brg->kategori ?> </td>
		<td><?php echo $brg->harga ?> </td>
		<td><?php echo $brg->stok ?> </td>

    <td><?php echo anchor('admin/data_barang/detail/'.$brg->id,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
		<td><?php echo anchor('admin/data_barang/edit/'.$brg->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>

		<?php endforeach; ?>
	</table>

 </div>

 <!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-grup">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_brg" class="form-control">        		
        	</div><br>
        	<div class="form-grup">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">        		
        	</div><br>
        	<div class="form-grup">
        		<label>Kategori</label>  
                <select type="option" name="kategori"  class="form-control">
                      <option>Bucket Hijab</option>
                      <option>Bucket Foto Polaroid</option>
                      <option>Bucket Snack </option>
                      <option>Bucket Uang</option>
                </select>    		
        	</div><br>
        	<div class="form-grup">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">        		
        	</div><br>
        	<div class="form-grup">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">        		
        	</div><br>
        	<div class="form-grup">
        		<label>Gambar produk</label>
        		<input type="file" name="gambar" class="form-control">        		
        	</div>
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>