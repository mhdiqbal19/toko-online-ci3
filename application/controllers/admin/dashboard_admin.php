<?php
	class Dashboard_admin extends CI_Controller{
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
			$data['user_2'] = $this->model_dashboard->user_2();
			$data['total_produk'] = $this->model_dashboard->total_produk();
			$data['total_pesanan'] = $this->model_dashboard->total_pesanan();
			$data['total_invoice'] = $this->model_dashboard->total_invoice();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates_admin/footer');
		}

	}

?>