<?php 

	class Model_dashboard extends CI_model{
		public function user_2(){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('role_id',2);
			return $this->db->get()->num_rows();
		}

		public function total_produk(){
			$this->db->select('*');
			$this->db->from('tb_barang');
			return $this->db->get()->num_rows();
		}

		public function total_pesanan(){
			$this->db->select('*');
			$this->db->from('tb_pesanan');
			return $this->db->get()->num_rows();
		}

		public function total_invoice(){
			$this->db->select('*');
			$this->db->from('tb_invoice');
			return $this->db->get()->num_rows();
		}




	}

?>