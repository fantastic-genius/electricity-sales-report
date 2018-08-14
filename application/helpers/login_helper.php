<?php
  if(! defined('BASEPATH')) exit ('No direct script access allowed');

  if(! function_exists('is_user_login')){

    function is_user_login($context){
      $username = $context->session->userdata('username');
      if($username != ''){
        return TRUE;
      }else {
        return FALSE;
      }
    }
  }

?>
