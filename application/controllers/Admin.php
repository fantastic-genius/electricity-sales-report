<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{

  public $data = array();
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('login_helper');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->data['name'] = $this->session->userdata('name');
    $this->load->model('user');
  }

  public function index(){
    if(is_user_login($this)){

      $this->load->view('admin/common/header', $this->data);
      $this->load->view('admin/common/sidebar');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/common/footer');

    }else{
      redirect('login');
    }
  }

  public function settings(){
    if(is_user_login($this)){
      if($_POST){

        $tev = $this->input->post('tev');
        $price = $this->input->post('price');
        $datas = array(
          'tev' => ['options' => 'total_energy_vendable', 'value' => $tev],
          'price' => ['options' => 'price', 'value' => $price]
        );

        $this->user->add_settings($datas['tev']);
        $this->user->add_settings($datas['price']);
        redirect('admin/settings');
      }

      $this->data = array(
        'tev' => $this->user->get_settings_val('total_energy_vendable'),
        'price' => $this->user->get_settings_val('price'),
      );


      $this->load->view('admin/common/header', $this->data);
      $this->load->view('admin/common/sidebar');
      $this->load->view('admin/settings');
      $this->load->view('admin/common/footer');

    }else{
      redirect('login');
    }
  }

  public function add_sales(){
    if(is_user_login($this)){
      if($_POST){
        $this->form_validation->set_rules('energy_vend', 'Energy Vended', 'trim|required');
        $this->form_validation->set_rules('otd', 'Time and Date', 'trim|required');
        if($this->form_validation->run() == False){
          $data["pferror"] = '<div class="alert alert-warning alert-dismissible" role="alert">
                                        <i class="fa fa-warning"></i>
                                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <strong>Warning!</strong> '.$this->form_validation->error_string().'
                                    </div>';
        }else {
          $energy_vended = $this->input->post('energy_vend');
          $otd = $this->input->post('otd');
          $price = $this->user->get_settings_val('price');
          $tev = $this->user->get_settings_val('total_energy_vendable');
          $eb = $this->user->get_settings_val('energy_balance');
          $amount = $price * $energy_vended;
          if(! empty($eb)){
            $curr_energy_balance = $eb - $energy_vended;
          }else{
            $curr_energy_balance = $tev - $energy_vended;
          }

          $datas = array(
            'energy_vended' => $energy_vended,
            'otd' => $otd,
            'price' => $price,
            'amount' => $amount,
            'energy_balance' => $curr_energy_balance,
          );

          $eb_arr = array('options' => 'energy_balance', 'value' => $curr_energy_balance);
          $this->user->add_settings($eb_arr);
          $this->user->add_vending($datas);
          redirect('admin/vending_report');
        }
      }


      $this->load->view('admin/common/header', $this->data);
      $this->load->view('admin/common/sidebar');
      $this->load->view('admin/sales_form');
      $this->load->view('admin/common/footer');

    }else{
      redirect('login');
    }
  }

  public function vending_report(){
    if(is_user_login($this)){
      $this->data['reports'] = $this->user->get_report();

      $this->load->view('admin/common/header', $this->data);
      $this->load->view('admin/common/sidebar');
      $this->load->view('admin/vending_report');
      $this->load->view('admin/common/footer');
    }else {
      redirect('login');
    }
  }
}

?>
