<div class="container-fluid">

  <h5>Laporan Penjualan</h5><hr>

  <form  action="" method="post" enctype="multipart/form-data" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
      <div class="input-group mb-2" >
          <label>Pilih Bulan :&nbsp</label>
          <input type="month" name="dari" class="form-control">
        <div class="input-group-append">
          <button name="cari" value="cari" class="btn btn-primary"> <i class="fas fa-search fa-sm"></i></button>
        </div>
      </div>
  </form> <br>

  <table class="table table-bordered table-hover table-striped">
     <tr>
      <th>NO</th>
      <th>ID Invoice</th>
      <th>Nama Pemesan</th>
      <th>Alamat</th>
      <th>Tanggal Pesan</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      
     </tr>

     <?php 
     $no = 1;
     $total = 0;
     foreach ($pesanan as $psn): 
      $subtotal = $psn->jumlah * $psn->harga;
      $total += $subtotal;
     ?>

     <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $psn->id_invoice ?> </td>
      <td><?=$psn->nama?></td>
      <td><?=$psn->alamat?></td>
      <td><?=$psn->tgl_pesan?></td>
      <td><?php echo $psn->nama_brg ?></td>
      <td><?php echo $psn->jumlah ?></td>
      <td align="right">Rp<?php echo number_format($psn->harga,0,',','.') ?></td>
     </tr>
     
     <?php endforeach; ?>

     <tr>
      <th colspan="7" align="">Grand Total</th>
      <td align="right">Rp<?php echo number_format($total,0,',','.') ?></td>
     </tr>


  </table>

    <div class="btn-group">
      <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo base_url().'admin/laporan_penjualan/print_laporan/?dari='.set_value('dari') ?>">
      <i class="fas fa-print"></i> Print</a>
    </div>

</div>