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
        $this->load->model('Model_users');
        $res = $this->Model_users->getNames();
        if ($res) {
            $data['result'] = $res;
            $this->load->view('welcome_message', $data);

        } else {

            echo "Fail";

        }


        $date = array('ID' => $this->input->post('id'),
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'));
    }}