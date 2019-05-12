<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Brunei');
        if (strtolower($this->session->userdata('status')) != 'login'){
            redirect(base_url() . 'index.php/login');
        }
    }

	public function index()
	{
		$this->halaman_awal();
	}

	public function halaman_awal(){
        //konfigurasi pagination
        $config['base_url'] = base_url() . 'index.php/blog/halaman_awal';
        $config['total_rows'] = $this->db->count_all('postingan'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="text-center"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#!">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tagl_close']  = '</li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           
        $data = $this->db->order_by('id', 'DESC')->get('postingan', $config["per_page"], $data['page'])->result();
 
        // $data['pagination'] = $this->pagination->create_links();
        $halaman = $this->pagination->create_links();
		// $data = $this->db->order_by('id', 'DESC')->get('postingan')->result();
		return view('blog.halaman_awal', array(
			'data' => $data,
            'halaman' => $halaman
		));
	}

    public function detail($id){
        $data = $this->db->get_where('postingan', array(
            'id' => $id
        ))->result();
        return view('blog.detail', array(
            'data' => $data[0]
        ));
    }

    public function hapus($id){
        $this->db->delete('postingan', array(
            'id' => $id
        ));
        redirect(base_url());
    }

    public function baru(){
        return view('blog.baru');
    }

    public function posting(){
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $dipublish_di_media = $this->input->post('dipublish_di_media');
        $waktu_posting_pertama = date("Y-m-d H:i:s");
        $this->db->insert('postingan', array(
            'judul' => $judul,
            'isi' => $isi,
            'dipublish_di_media' => $dipublish_di_media,
            'waktu_posting_pertama' => $waktu_posting_pertama,
            'waktu_update' => $waktu_posting_pertama
        ));
        redirect(base_url());
    }

    public function edit($id){
        $data = $this->db->get_where('postingan', array(
            'id' => $id
        ))->result();
        return view('blog.edit', array(
            'data' => $data[0]
        ));
    }

    public function edit_do($id){
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $dipublish_di_media = $this->input->post('dipublish_di_media');
        $waktu_update = date("Y-m-d H:i:s");
        $this->db->update('postingan', array(
            'judul' => $judul,
            'isi' => $isi,
            'dipublish_di_media' => $dipublish_di_media,
            'waktu_update' => $waktu_update
        ), array(
            'id' => $id
        ));
        redirect(base_url() . 'index.php/blog/detail/' . $id);
    }

    public function ganti_password(){
        return view('blog.ganti_password');
    }

    public function ganti_password_do(){
        $password = $this->input->post('password');
        $this->db->update('login', array(
            'password' => $password
        ), array(
            'id' => '1'
        ));
        redirect(base_url());
    }
}
