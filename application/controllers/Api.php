<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Api extends RestController {

	function __construct()
    {
        // Construct the parent class
        parent:: __construct();
	}
	public function index_get(){
		// testing response
		$kdmk = $this->get('kdmk');
        if ($kdmk == '') {
            $kontak = $this->db->get('matakuliah')->result();
        } else {
            $this->db->where('kdmk', $kdmk);
            $kontak = $this->db->get('matakuliah')->result();
        }
        $this->response($kontak, 200);
    }
    
    public function index_post()
    {
        $data = array(
            'kdmk'  => $this->post('kdmk'),
            'nmmk'  => $this->post('nmmk'),
            'sks'   => $this->post('sks'),
            'prodi' => $this->post('prodi')
        );
        $insert = $this->db->insert('matakuliah', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    public function index_put() {
        $kdmk = $this->put('kdmk');
        $data = array(
            'kdmk'  => $this->put('kdmk'),
            'nmmk'  => $this->put('nmmk'),
            'sks'   => $this->put('sks'),
            'prodi' => $this->put('prodi')
        );
        $this->db->where('kdmk', $kdmk);
        $update = $this->db->update('matakuliah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    public function index_delete() {
        $id = $this->delete('kdmk');
        
        $this->db->where('kdmk', $id);
        $delete = $this->db->delete('matakuliah');
        if ($delete) {
            $this->response(array('status' => 'success'.$id), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
