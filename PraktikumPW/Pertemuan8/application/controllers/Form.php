<?php
     class Form extends CI_CONTROLLER{
          function index(){
               $this->load->helper(array('form', 'url'));
               $this->load->library('form_validation');
               $this->form_validation->set_rules('inputEmail', 'Email', 'required');
               if ($this->form_validation->run() == FALSE) {
                    $this->load->view('v_form');
               }else{
                    $this->load->view('')
               }
          }
     }
?>
