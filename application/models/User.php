<?php

/**
 *
 */
class User extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_logged_user($username, $password){

    $query = $this->db->query("SELECT * FROM users WHERE user_name = '". $username . "' AND password = '". $password . "' LIMIT 1");
    if($query->row() == 1){
      $result = $query->row();

      $name = $result->first_name . " " . $result->last_name;
      $user_data = array(
        userid => $result->id,
        username => $result->user_name,
        name => $name
      );

      $this->session->set_userdata($user_data);
    }else{
      echo "Not Exist";
    }

  }

  public function add_settings($array){
    $option = $array['options'];
    $query= $this->db->query("SELECT * FROM site_settings WHERE options = '". $option . "' LIMIT 1");
    $row = $query->row();
    if($row){
      $this->db->update('site_settings', $array, array('id' => $row->id));
    }else{
      $this->db->insert('site_settings', $array);
    }

  }

  public function get_settings_val($option){
    $query= $this->db->query("SELECT * FROM site_settings WHERE options = '". $option . "' LIMIT 1");
    $row = $query->row();
    if($row){
      return $row->value;
    }
  }

  public function add_vending($array){
    $this->db->insert('vending', $array);
  }

  public function get_report(){
    $query= $this->db->query("SELECT * FROM vending");
    $result = $query->result();
    return $result;
  }

}

?>
