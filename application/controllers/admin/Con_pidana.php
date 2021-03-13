<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Con_pidana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }

		if($this->session->userdata('status')!="telah_login"){
redirect(base_url().'login?alert=belum_login');
}
		$this->load->model('mod_pidana');
		 $this->load->helper('tgl_indo');
		 $this->load->library('pagination');
      $this->load->helper('url');
	}

	function index(){
		  $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');
      

      $search = array('nama_responden'=> $cari );

      $batas =  5; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'admin/con_pidana/?cari='.$cari;
  		$config['total_rows'] 			 = $this->mod_pidana->jumlah_row($search);

  		$config['per_page'] 				 = $batas;
  		$config['uri_segment'] 			 = $page;

  		$config['full_tag_open'] 		= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 			= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] 				= 'last';
  		$config['last_tag_open']	 	= '<li><a>';
  		$config['last_tag_close'] 	= '</a></li>';

  		$config['next_link'] 				= '&raquo;';
  		$config['next_tag_open'] 		= '<li><a>';
  		$config['next_tag_close'] 	= '</a></li>';

  		$config['prev_link'] 				= '&laquo;';
  		$config['prev_tag_open'] 		= '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] 		= '<li class="active"><a>';
  		$config['cur_tag_close'] 		= '</a></li>';

  		$config['num_tag_open'] 		= '<li><a>';
  		$config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;
			

      $data['all_pidana'] = $this->mod_pidana->get($batas,$offset,$search);

		$this->load->view('lte/v_header');
		$this->load->view('lte/v_pidana', $data);
		$this->load->view('lte/v_footer');

	}

	
	 function edit($id_responden){
	$where = array('id_responden' => $id_responden);
	$data['responden'] = $this->mod_pidana->edit_data($where,'responden')->result();

	$this->load->view('lte/v_header');
	$this->load->view('lte/v_pidana_edit',$data);
	$this->load->view('lte/v_footer');
    }

    function update(){
	$id_responden = $this->input->post('id_responden');
	$id_bagian = $this->input->post('id_bagian');
    $nama_responden = $this->input->post('nama_responden');
    $umur_responden = $this->input->post('umur_responden');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $pekerjaan_responden = $this->input->post('pekerjaan_responden');
    $pendidikan_responden = $this->input->post('pendidikan_responden');
    $saran = $this->input->post('saran');
    $tanggal = $this->input->post('tanggal');
    $tingkat_kepuasan = $this->input->post('tingkat_kepuasan');

	$data = array(
		'id_responden' => $id_responden,
		'id_bagian' => $id_bagian,
		'nama_responden' => $nama_responden,
		'umur_responden' => $umur_responden,
		'jenis_kelamin' => $jenis_kelamin,
		'pekerjaan_responden' => $pekerjaan_responden,
        'pendidikan_responden' => $pendidikan_responden,
        'saran' => $saran,
        'tanggal' => $tanggal,
        'tingkat_kepuasan' => $tingkat_kepuasan
	);

	$where = array(
		'id_responden' => $id_responden
	);

	$this->mod_pidana->update_data($where,$data,'responden');
	redirect('admin/con_pidana/index');
}

    function hapus($id_responden){
		$where = array('id_responden' => $id_responden);
		$this->mod_pidana->hapus_data($where,'responden');
		redirect('admin/con_pidana/index');
	}

	 function search(){
		$keyword = $this->input->post('keyword');
		$data['all_pidana']=$this->mod_pidana->get_product_keyword($keyword);
		$this->load->view('lte/v_header');
		$this->load->view('lte/v_pidana_cari',$data);
		$this->load->view('lte/v_footer');
  }
}