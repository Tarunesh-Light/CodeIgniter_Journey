<?php

class Feedbackmodel extends CI_Model{

          public function insert($data){
            $this->load->database();            //Loaded the database library and many query builder class asscoiated with it
            return $this->db->insert('codeignitershareup',$data);       //Inserted the data in the db-codeignitershareup             
          }

          public function getdata(){
            $this->load->database();
            return $this->db->get('codeignitershareup')->result();
          }

          public function update($id){
             $this->load->database();
             $this->db->where('id',$id);
             return $this->db->get('codeignitershareup')->result();
          }

          public function updatealter($data,$id){
            $this->load->database();
            $this->db->where('id',$id);
            return $this->db->update('codeignitershareup',$data);
          }

          public function delete($id){
            $this->load->database();
            $this->db->where("id", $id);
            return $this->db->delete('codeignitershareup');
          }
}

?>