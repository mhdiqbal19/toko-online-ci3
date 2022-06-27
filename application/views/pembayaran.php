<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success mb-2"> 
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h5>Total Belanja Anda : Rp".number_format($grand_total,0,',','.'); ?>
			</div><br><br>
			<h4>Input Alamat Pengiriman dan Pembayaran</h4><hr>


	              <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

	                  <div class="form-group">
	                    <label>Nama Lengkap</label>
	                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
	                  </div>
	                  <div class="form-group">
	                    <label>Alamat Lengkap</label>
	                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Lengkap">
	                  </div>
	                  <div class="form-group">
	                    <label>No Telepon</label>
	                    <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telepon">
	                  </div>
	                  <div class="form-group">
	                    <label>Pilih BANK</label>
	                    <select class="form-control" name="bank" >
	                    	<option>BCA - xxxxxxx</option>
	                    	<option>BNI - xxxxxxx</option>
	                    	<option>MANDIRI - xxxxxxx</option>
	                    	<option>BRI - xxxxxxx</option>
	                    	<option>PERMATA - xxxxxxx</option>
	                    </select>
	                   </div>

	                  <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
	              </form>
	              <?php 
	              }else
	              {
	              	echo "<h4>Keranjang Belanja Anda Masih Kosong"; 	
	              }
	               ?>


				</div>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>