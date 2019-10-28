<?php
     class Session_controller extends CI_Controller{
          public function index(){
               $this->load->library('session');
               $this->load->view('session_view');
          }

          public function set_session(){
               $data = array(
                    'name' => 'Mohamad Achun Armando',
                    'npm' => '140810170020',
                    'kelas' => 'B'
               );
               $this->session->set_userdata($data);
               redirect(base_url('session_ex'));
          }

          public function unset_userdata($data){
               $this->session->unset_userdata($data);
               redirect(base_url('session_ex'));
          }

          public function destroy_session(){
               $this->session->sess_destroy();
               redirect(base_url('session_ex'));
          }
     }
?>
