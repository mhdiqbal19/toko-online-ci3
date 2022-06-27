<?php   
class Data_user extends CI_Controller{
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
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_user',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama','Nama','required', ['required' => 'Nama wajib diisi!']);
		$this->form_validation->set_rules('username','Username','required', ['required' => 'Username wajib diisi!']);
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]', ['required' => 'Password wajib diisi!','matches' => 'Password tidak cocok!']);
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');

		if($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header');
		$this->load->view('registrasi');
		$this->load->view('templates/footer');
		}else {
				$data = array(
					'id'			=> '',
					'nama'			=> $this->input->post('nama'),
					'username'		=> $this->input->post('username'),
					'password'		=> $this->input->post('password_1'),
					'role_id'		=> 2,
				);

				$this->db->insert('tb_user', $data);
				redirect('admin/data_user');
			  }
	}

	public function hapus($id)
		{
			$where = array('id' => $id);
			$this->model_barang->hapus_data($where,'tb_barang');
			redirect('admin/data_barang/index'); 
		}

	public function edit($id)
	{
			$where = array('id' => $id);
			$data['user'] = $this->model_user->edit_user($where, 'tb_user')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/edit_user',$data);
			$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		$data = array(

			'nama'		=> $nama,
			'username'	=> $username,
			'password'	=> $password

		);

		$where = array(
			'id'	=> $id
		);

		$this->model_user->update_data($where,$data,'tb_user');
		redirect('admin/data_user/index');

	}
		public function hapus_user($id)
		{
			$where = array('id' => $id);
			$this->model_user->hapus_data($where,'tb_user');
			redirect('admin/data_user/index'); 
		}



}

?>