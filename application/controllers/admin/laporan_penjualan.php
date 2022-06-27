<?php 
	class Laporan_penjualan extends CI_Controller{
		public function __construct(){
			parent::__construct();

				if($this->session->userdata('role_id') != '1'){
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  Anda belum login
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('auth/login');
			}
		}

		public function index()
		{

		//cari data	
		$tgl = array();

		if ($this->input->post('cari')){
			if ($this->input->post('dari') !== ''){
				$input_tgl = $this->input->post('dari'); 
				$tgl = explode('-', $input_tgl);				
			}				
		} 

		// print_r($tgl);die();

		$data['pesanan'] = $this->model_penjualan->tampil_data($tgl);
		$data['invoice'] = $this->model_penjualan->tampil_invoice();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_penjualan',$data);
		$this->load->view('templates_admin/footer');
		}

		public function print_laporan()
		{
			//$dari	= $this->input->get('dari'); 
			
		$tgl = array();

		if ($this->input->get('dari')){
			if ($this->input->get('dari') !== ''){
				$input_tgl = $this->input->get('dari'); 
				$tgl = explode('-', $input_tgl);				
			}				
		} 

		// print_r($tgl);die();

		$data['pesanan'] = $this->model_penjualan->tampil_data($tgl);
		$data['invoice'] = $this->model_penjualan->tampil_invoice();
		$data['tahun'] = $tgl[0];
		$data['bulan'] = $tgl[1];

			// if ($data['bulan'] == "1") {
	  //         	echo "Januari";
	  //       }else if ($data['bulan'] == "2") {
	  //         	echo "Februari";
	  //       }else if ($data['bulan'] == "3") {
	  //         	echo "Maret";
	  //       }else if ($data['bulan'] == "4") {
	  //         	echo "April";
	  //       }else if ($data['bulan'] == "5") {
	  //         	echo "Mei";
	  //       }else if ($data['bulan'] == "6") {
	  //         	echo "Juni";
	  //       }else if ($data['bulan'] == "7") {
	  //         	echo "Juli";
	  //       }else if ($data['bulan'] == "8") {
	  //         	echo "Agustus";
	  //       }else if ($data['bulan'] == "9") {
	  //         	echo "September";
	  //       }else if ($data['bulan'] == "10") {
	  //         	echo "Oktober";
	  //       }else if ($data['bulan'] == "11") {
	  //         	echo "November";
	  //       }else if ($data['bulan'] == "12") {
	  //         	echo "Desember";
	  //       }


		$this->load->view('templates_admin/header',$data);
		$this->load->view('admin/print_laporan',$data);

		}
	}

 ?>