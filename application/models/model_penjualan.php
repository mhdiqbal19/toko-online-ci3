<?php 

	class Model_penjualan extends CI_model{
		public function tampil_data($tgl = array()){					

			$this->db->select('tb_pesanan.*, tb_invoice.*');
			$this->db->from('tb_pesanan');
			$this->db->join('tb_invoice', 'tb_pesanan.id_invoice = tb_invoice.id');


			//cari data
			if (count($tgl) > 0){
				$this->db->where('MONTH(tb_invoice.tgl_pesan) =',  $tgl[1]);
				$this->db->where('YEAR(tb_invoice.tgl_pesan)=', $tgl[0]);
			}

			$query = $this->db->get()->result();

			// print_r($this->db->last_query());

			return $query;
		}

		public function tampil_invoice(){
			return $this->db->get('tb_invoice')->result();
		}
	}

?>