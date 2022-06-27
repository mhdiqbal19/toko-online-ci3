<br><h3 style="text-align: center">LAPORAN PENJUALAN</h3>
<h4 style="text-align: center">BUCKET BUNGA SAMPIT</h4>
<h5 style="text-align: center">Per Bulan : <?php echo date("$bulan-Y"); ?></h5><hr><br>


<table class="table table-bordered table-hover table-striped mt-4">
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

  <script type="text/javascript">
  	window.print();
  </script>