<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->view('welcome_message');


    }

    public function addContacts()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Model_users');
        $data = array(
            'ID' => $this->input->post('ID'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->Model_users->addContacten($data);
        $this->load->view('welcome_message', $data);

    }

    public function loadContactenAanmaken()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->view('contactenAanmaken');
    }

    public function loadContactenLijstOpvragen()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Model_users');
        $data["fetch_data"] = $this->Model_users->getContacten();
        $this->load->view("contactenLijstOpvragen", $data);

    }

    public function loadContactenWijzigen()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->view('contactenWijzigen.html');
    }

    public function loadAboutUs()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->view('AboutUs');
    }

}