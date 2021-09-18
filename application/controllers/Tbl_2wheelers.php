<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_2wheelers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('tbl_2wheelers_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'tbl_2wheelers/index/';
        $config['total_rows'] = $this->tbl_2wheelers_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'tbl_2wheelers.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $tbl_2wheelers = $this->tbl_2wheelers_model->index_limit($config['per_page'], $start);

        $data = array(
            'tbl_2wheelers_data' => $tbl_2wheelers,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('tbl_2wheelers_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'tbl_2wheelers/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'tbl_2wheelers/index/';
        }

        $config['total_rows'] = $this->tbl_2wheelers_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'tbl_2wheelers/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $tbl_2wheelers = $this->tbl_2wheelers_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'tbl_2wheelers_data' => $tbl_2wheelers,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_2wheelers_list', $data);
    }

    public function read($id) 
    {
        $row = $this->tbl_2wheelers_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'product_type' => $row->product_type,
		'product_name' => $row->product_name,
		'product_images' => $row->product_images,
		'product_logo' => $row->product_logo,
		'capacity' => $row->capacity,
		'weight' => $row->weight,
		'power' => $row->power,
		'features' => $row->features,
		'description' => $row->description,
		'brochure' => $row->brochure,
		'price' => $row->price,
	    );
            $this->load->view('tbl_2wheelers_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_2wheelers'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_2wheelers/create_action'),
	    'id' => set_value('id'),
	    'product_type' => set_value('product_type'),
	    'product_name' => set_value('product_name'),
	    'product_images' => set_value('product_images'),
	    'product_logo' => set_value('product_logo'),
	    'capacity' => set_value('capacity'),
	    'weight' => set_value('weight'),
	    'power' => set_value('power'),
	    'features' => set_value('features'),
	    'description' => set_value('description'),
	    'brochure' => set_value('brochure'),
	    'price' => set_value('price'),
	);
        $this->load->view('tbl_2wheelers_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            //var_dump($this->input->post('product_images',TRUE));exit;
            $data = array(
		'product_type' => $this->input->post('product_type',TRUE),
		'product_name' => $this->input->post('product_name',TRUE),
		'product_images' => $this->input->post('product_images',TRUE),
		'product_logo' => $this->input->post('product_logo',TRUE),
		'capacity' => $this->input->post('capacity',TRUE),
		'weight' => $this->input->post('weight',TRUE),
		'power' => $this->input->post('power',TRUE),
		'features' => $this->input->post('features',TRUE),
		'description' => $this->input->post('description',TRUE),
		'brochure' => $this->input->post('brochure',TRUE),
		'price' => $this->input->post('price',TRUE),
	    );

            $this->tbl_2wheelers_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_2wheelers'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->tbl_2wheelers_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_2wheelers/update_action'),
		'id' => set_value('id', $row->id),
		'product_type' => set_value('product_type', $row->product_type),
		'product_name' => set_value('product_name', $row->product_name),
		'product_images' => set_value('product_images', $row->product_images),
		'product_logo' => set_value('product_logo', $row->product_logo),
		'capacity' => set_value('capacity', $row->capacity),
		'weight' => set_value('weight', $row->weight),
		'power' => set_value('power', $row->power),
		'features' => set_value('features', $row->features),
		'description' => set_value('description', $row->description),
		'brochure' => set_value('brochure', $row->brochure),
		'price' => set_value('price', $row->price),
	    );
            $this->load->view('tbl_2wheelers_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_2wheelers'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'product_type' => $this->input->post('product_type',TRUE),
		'product_name' => $this->input->post('product_name',TRUE),
		'product_images' => $this->input->post('product_images',TRUE),
		'product_logo' => $this->input->post('product_logo',TRUE),
		'capacity' => $this->input->post('capacity',TRUE),
		'weight' => $this->input->post('weight',TRUE),
		'power' => $this->input->post('power',TRUE),
		'features' => $this->input->post('features',TRUE),
		'description' => $this->input->post('description',TRUE),
		'brochure' => $this->input->post('brochure',TRUE),
		'price' => $this->input->post('price',TRUE),
	    );

            $this->tbl_2wheelers_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_2wheelers'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->tbl_2wheelers_model->get_by_id($id);

        if ($row) {
            $this->tbl_2wheelers_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_2wheelers'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_2wheelers'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('product_type', ' ', 'trim|required');
	$this->form_validation->set_rules('product_name', ' ', 'trim|required');
	$this->form_validation->set_rules('product_images', ' ', 'trim|required');
	$this->form_validation->set_rules('product_logo', ' ', 'trim|required');
	$this->form_validation->set_rules('capacity', ' ', 'trim|required');
	$this->form_validation->set_rules('weight', ' ', 'trim|required');
	$this->form_validation->set_rules('power', ' ', 'trim|required');
	$this->form_validation->set_rules('features', ' ', 'trim|required');
	$this->form_validation->set_rules('description', ' ', 'trim|required');
	$this->form_validation->set_rules('brochure', ' ', 'trim|required');
	$this->form_validation->set_rules('price', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Tbl_2wheelers.php */
/* Location: ./application/controllers/Tbl_2wheelers.php */