<?php
     class Cookies_controller extends CI_Controller{
          function __construct(){
               parent::__construct();
               $this->load->helper(array('cookie', 'url'));
          }

          public function index(){
               set_cookie('cookie_name', 'cookie_value', '3600');
               $this->load->view('cookies_view');
          }

          public function display_cookie(){
               echo get_cookie('cookie_name');
               redirect(base_url('cookie_ex'));
          }

          public function delete_cookie(){
               delete_cookie('cookie_name');
               redirect(base_url('cookie_ex/display_cookie'));
          }
     }
?>
