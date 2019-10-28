<?php
     class Auth extends CI_CONTROLLER{
          function login(){
               $email = $this->input->post('inputEmail');
               $pwd = $this->input->post('inputPassword');
               if($email == 'achunarmando@gmail.com' && $pwd == 'admin'){
                    echo 'Berhasil Login';
               }else{
                    $this->load->view('v_form');
               }
          }
     }
?>
