<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }

		if($this->session->userdata('status')!="telah_login"){
redirect(base_url().'login?alert=belum_login');
}
		$this->load->model('mod_admin');
		$this->load->model('m_data');
		
	}

	public function index()
	{
		// $nilai['total_pesurvei'] = $this->mod_admin->get_total();
		// $nilai['total_puas'] = $this->mod_admin->get_totalPuas();
		// $nilai['total_cukup'] = $this->mod_admin->get_totalCukup();
		// $nilai['total_tidak'] = $this->mod_admin->get_totalTidak();
		// load view admin/overview.php
		$responden = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="1"';
		$data['responden'] = $this->db->query($responden)->row_array();

		$responden2 = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="2"';
		$data['responden2'] = $this->db->query($responden2)->row_array();

		$responden3 = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="3"';
		$data['responden3'] = $this->db->query($responden3)->row_array();

		$responden4 = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="4"';
		$data['responden4'] = $this->db->query($responden4)->row_array();

		$responden5 = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="5"';
		$data['responden5'] = $this->db->query($responden5)->row_array();

		$responden6 = 'SELECT COUNT(*) AS hasil FROM responden where id_bagian="6"';
		$data['responden6'] = $this->db->query($responden6)->row_array();
		$data['data']=$this->mod_admin->get_data_stok();
		$this->load->view('lte/v_header');
		$this->load->view('lte/v_dashboard',$data);
		$this->load->view('lte/v_footer');

		// $this->load->view("admin/overview");
		
	}

	 function ganti_password()
	{
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_ganti_password');
	$this->load->view('lte/v_footer');
	}

	public function ganti_password_aksi()
{
		// form validasi
		$this->form_validation->set_rules('password_lama','Password Lama','required');
		$this->form_validation->set_rules('password_baru','Password Baru','required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password Baru','required|matches[password_baru]');
		// cek validasi
		if($this->form_validation->run() != false){
		// menangkap data dari form
		$password_lama = $this->input->post('password_lama');
		$password_baru = $this->input->post('password_baru');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		// cek kesesuaian password lama dengan id pengguna yang sedang login dan password lama
			$where = array(
			'pengguna_id' => $this->session->userdata('id'),
			'pengguna_password' => md5($password_lama)
		);
		$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();
		// cek kesesuaikan password lama
		if($cek > 0){
		// update data password pengguna
		$w = array(
		'pengguna_id' => $this->session->userdata('id')
		);
		$data = array(
		'pengguna_password' => md5($password_baru)
		);
		$this->m_data->update_data($where, $data, 'pengguna');
		// alihkan halaman kembali ke halaman ganti password
		redirect('admin/overview/ganti_password?alert=sukses');
		}else{
		// alihkan halaman kembali ke halaman ganti password
		redirect('admin/overview/ganti_password?alert=gagal');
		}
		}else{
		$this->load->view('lte/v_header');
		$this->load->view('lte/v_ganti_password');
		$this->load->view('lte/v_footer');
		}
		}

	function profil()
	{
	// id pengguna yang sedang login
	$id_pengguna = $this->session->userdata('id');
	$where = array(
	'pengguna_id' => $id_pengguna
	);
	$data['profil'] = $this->m_data->edit_data($where,'pengguna')->result();
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_profil',$data);
	$this->load->view('lte/v_footer');
	}

	function profil_update()
	{
	// Wajib isi nama dan email
	$this->form_validation->set_rules('nama','Nama','required');
	$this->form_validation->set_rules('email','Email','required');
	if($this->form_validation->run() != false){
	$id = $this->session->userdata('id');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$where = array(
	'pengguna_id' => $id
	);
	$data = array(
	'pengguna_nama' => $nama,
	'pengguna_email' => $email );
	$this->m_data->update_data($where,$data,'pengguna');
	redirect(base_url().'admin/overview/profil/?alert=sukses');
	}else{
	// id pengguna yang sedang login
	$id_pengguna = $this->session->userdata('id');
	$where = array(
	'pengguna_id' => $id_pengguna
	);
	$data['profil'] = $this->m_data->edit_data($where,'pengguna')->result();
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_profil',$data);
	$this->load->view('lte/v_footer');
	}
	}

	function pengguna()
	{
	$data['pengguna'] = $this->m_data->get_data('pengguna')->result();
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pengguna',$data);
	$this->load->view('lte/v_footer');
	}

	function pengguna_tambah()
	{
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pengguna_tambah');
	$this->load->view('lte/v_footer');
	}

	function pengguna_aksi()
	{
	// Wajib isi
	$this->form_validation->set_rules('nama','Nama Pengguna','required');
	$this->form_validation->set_rules('email','Email Pengguna');
	$this->form_validation->set_rules('username','Username Pengguna','required');
	$this->form_validation->set_rules('password','Password Pengguna','required|min_length[5]');
	$this->form_validation->set_rules('level','Level Pengguna','required');
	$this->form_validation->set_rules('status','Status Pengguna','required');
	if($this->form_validation->run() != false){
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$username = $this->input->post('username');
	$password = md5($this->input->post('password'));
	$level = $this->input->post('level');
	$status = $this->input->post('status');
	$data = array(
	'pengguna_nama' => $nama,
	'pengguna_email' => $email,
	'pengguna_username' => $username,
	'pengguna_password' => $password,
	'pengguna_level' => $level,
	'pengguna_status' => $status
	);
	$this->m_data->insert_data($data,'pengguna');
	redirect(base_url().'admin/overview/pengguna');
	}else{
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pengguna_tambah');
	$this->load->view('lte/v_footer');
	}
	}

	function pengguna_edit($id)
	{
	$where = array(
	'pengguna_id' => $id
	);
	$data['pengguna'] = $this->m_data->edit_data($where,'pengguna')->result();
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pengguna_edit',$data);
	$this->load->view('lte/v_footer');
	}

	function pengguna_update()
	{
	// Wajib isi
	$this->form_validation->set_rules('nama','Nama Pengguna','required');
	$this->form_validation->set_rules('email','Email Pengguna');
	$this->form_validation->set_rules('username','Username Pengguna','required');
	$this->form_validation->set_rules('level','Level Pengguna','required');
	$this->form_validation->set_rules('status','Status Pengguna','required');
	if($this->form_validation->run() != false){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$username = $this->input->post('username');
	$password = md5($this->input->post('password'));
	$level = $this->input->post('level');
	$status = $this->input->post('status');
	//cek jika form password tidak diisi, maka jangan update kolum password, dan sebaliknya
	if($this->input->post('password') == ""){
	$data = array(
	'pengguna_nama' => $nama,
	'pengguna_email' => $email,
	'pengguna_username' => $username,
	'pengguna_level' => $level,
	'pengguna_status' => $status
	);
	}else{
	$data = array(
	'pengguna_nama' => $nama,
	'pengguna_email' => $email,
	'pengguna_username' => $username,
	'pengguna_password' => $password,
	'pengguna_level' => $level,
	'pengguna_status' => $status
	);
	}
	$where = array(
	'pengguna_id' => $id
	);
	$this->m_data->update_data($where,$data,'pengguna');
	redirect(base_url().'admin/overview/pengguna');
	}else{
	$id = $this->input->post('id');
	$where = array(
	'pengguna_id' => $id
	);
	$data['pengguna'] = $this->m_data->edit_data($where,'pengguna')->result();
	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pengguna_edit',$data);
	$this->load->view('lte/v_footer');
	}
	}

	function pengguna_hapus($pengguna_id)
	{
	$where = array('pengguna_id' => $pengguna_id);
		$this->mod_admin->hapus_data($where,'pengguna');
		redirect('admin/overview/pengguna');
	}


	function pengguna_hapus_aksi()
	{
	$pengguna_hapus = $this->input->post('pengguna_hapus');
	$pengguna_tujuan = $this->input->post('pengguna_tujuan');
	// hapus pengguna
	$where = array(
	'pengguna_id' => $pengguna_hapus
	);
	$this->m_data->delete_data($where,'pengguna');
	// pindahkan semua artikel pengguna yang dihapus ke pengguna yang dipilih
	$w = array(
	'artikel_author' => $pengguna_hapus
	);
	$d = array(
	'artikel_author' => $pengguna_tujuan
	);
	$this->m_data->update_data($w,$d,'artikel');
	redirect(base_url().'admin/overview/pengguna');
	}
	// end crud pengguna
}