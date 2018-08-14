<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
  class Login extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');
    }

    public function index(){

      if($_POST){

        $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == False){
          echo "Incomplete information";
        }else{
          $username = $this->input->post('user_name');
          $password = md5($this->input->post('password'));
          //var_dump($username, $password);

          $this->load->model('user');
          $this->user->get_logged_user($username, $password);
          redirect('admin');
        }
      }
      $this->load->view('login/login');

    }

    public function Logout(){
      $this->session->unset_userdata('username');
      redirect('login');
    }

  }

?>
