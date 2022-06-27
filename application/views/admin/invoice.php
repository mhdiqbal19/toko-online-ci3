<div class="container-fluid">
	<h5>Invoice Pemesanan</h5><hr>

	<table class="table table-bordered table-hover table-striped">
		 <tr>
		 	<th>NO</th>
		 	<th>ID Invoice</th>
		 	<th>Nama Pemesan</th>
		 	<th>Alamat Pengiriman</th>
		 	<th>NO Telepon</th>
		 	<th>Pembayaran Bank</th>
		 	<th>Tanggal Pengiriman</th>
		 	<th>Batas Pembayaran</th>
		 	<th>Aksi</th>
		 </tr>

		 <?php 
		 $no =1;
		 foreach ($invoice as $inv): ?>

		 <tr>
		 	<td><?php echo $no++ ?></td>
		 	<td><?php echo $inv->id ?></td>
		 	<td><?php echo $inv->nama ?></td>
		 	<td><?php echo $inv->alamat ?></td>
		 	<td><?php echo $inv->no_telp ?></td>
		 	<td><?php echo $inv->bank ?></td>
		 	<td><?php echo $inv->tgl_pesan ?></td>
		 	<td><?php echo $inv->batas_bayar ?></td>
		 	<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>') ?>
		 		
		 	</td>
		 </tr>

		<?php endforeach; ?>
	</table>

</div>