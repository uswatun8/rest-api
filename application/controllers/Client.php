<?php
Class Client extends CI_Controller{
    
    private $_client;
    function __construct() {
        parent::__construct();
    }
    
    // menampilkan data mahasiswa
    function index(){
        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'https://uswatun82.000webhostapp.com/rest-api/api');
        $data['data'] = json_decode($response->getBody()->getContents());
        $this->load->view('crud/list',$data);
    }
    public function add()
    {
        $this->load->view('crud/add');
    }
    // insert data mahasiswa
    function create(){
        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        // Send a request to https://foo.com/api/test
        $response = $client->request('POST', 'https://uswatun82.000webhostapp.com/rest-api/api',[
            'form_params' => [
                'kdmk'=>$this->input->post('kdmk'),
                'nmmk'=>$this->input->post('nmmk'),
                'sks'=>$this->input->post('sks'),
                'prodi'=>$this->input->post('prodi')
            ]
        ]);
        // echo $response->getBody()->getContents();
        return redirect(base_url('client'),'refresh');
    }
    
    // edit data mahasiswa
    function edit($id){
        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'https://uswatun82.000webhostapp.com/rest-api/api',[
            'query' => [
                'kdmk'=>$id
            ]
        ]);
        $data['data'] = json_decode($response->getBody()->getContents())[0];

        $this->load->view('crud/edit',$data);
    }
    
    public function update()
    {
        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        // Send a request to https://foo.com/api/test
        $response = $client->request('PUT', 'https://uswatun82.000webhostapp.com/rest-api/api',[
            'json' => [
                'kdmk'=>$this->input->post('kdmk'),
                'nmmk'=>$this->input->post('nmmk'),
                'sks'=>$this->input->post('sks'),
                'prodi'=>$this->input->post('prodi'),
            ]
        ]);
        // echo $response->getBody()->getContents();
        return redirect(base_url('client'),'refresh');
    }
    
    // delete data mahasiswa
    function delete($id){
        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        // Send a request to https://foo.com/api/test
        $response = $client->request('DELETE', 'https://uswatun82.000webhostapp.com/rest-api/api',[
            'form_params' => [
                'kdmk'=>$id,
            ]
        ]);
        // echo $response->getBody()->getContents();
        return redirect(base_url('client'),'refresh');
    }
}