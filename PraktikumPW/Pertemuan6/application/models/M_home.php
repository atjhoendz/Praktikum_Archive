<?php
     class M_home extends CI_Model{
          public function getData($id = null){
               if($id != null){
                    $query = $this->db->get_where('User',['id'=>$id]);
                    return $query->result_array();
               }

               $query = $this->db->get('User');
               return $query->result_array();
          }
     }
?>
