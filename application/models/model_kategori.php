<?php 
	class Model_kategori extends CI_Model
	{
		public function data_bucket_hijab()
		{
			return $this->db->get_where("tb_barang" ,array('kategori' => 'Bucket Hijab'));
		}
		public function bucket_foto_polaroid()
		{
			return $this->db->get_where("tb_barang" ,array('kategori' => 'Bucket Foto Polaroid'));
		}
		public function bucket_snack()
		{
			return $this->db->get_where("tb_barang" ,array('kategori' => 'Bucket Snack'));
		}
		public function bucket_uang()
		{
			return $this->db->get_where("tb_barang" ,array('kategori' => 'Bucket Uang'));
		}

	}
 ?>