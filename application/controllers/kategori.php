<?php 
	class Kategori extends CI_Controller
	{
		public function bucket_hijab()
		{
			$data['bucket_hijab'] = $this->model_kategori->data_bucket_hijab()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('bucket_hijab',$data);
			$this->load->view('templates/footer');
		}
		public function bucket_foto_polaroid()
		{
			$data['bucket_foto_polaroid'] = $this->model_kategori->bucket_foto_polaroid()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('bucket_foto_polaroid',$data);
			$this->load->view('templates/footer');
		}
		public function bucket_snack ()
		{
			$data['bucket_snack'] = $this->model_kategori->bucket_snack()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('bucket_snack',$data);
			$this->load->view('templates/footer');
		}
		public function bucket_uang()
		{
			$data['bucket_uang'] = $this->model_kategori->bucket_uang()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('bucket_uang',$data);
			$this->load->view('templates/footer');
		}
		
	}

 ?>