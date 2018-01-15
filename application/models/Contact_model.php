<?php

/**
 * Created by PhpStorm.
 * User: sara
 * Date: 11/01/18
 * Time: 11:15 م
 */
   Class Contact_model extends CI_Model {

       Public function __construct() {
           parent::__construct();

           //if need use mssql
           //$this->mssql = $this->load->database ( 'my_mssql', TRUE );
       }

       public function listAllContact() {

           //use $this->mssql instead of $this->db
           $query = $this->db->get("contacts");
           return $query->result();
       }
       public function insert($data) {

           if ($this->db->insert("contacts", $data)) {
               return "success";
           }
           return 'failed';
       }
       public function getContactById($id) {

           $query = $this->db->get_where("contacts",array("id"=>$id));
           $data = $query->result();
           return $data;
       }

       public function update($data,$contact_id) {

           $this->db->set($data);
           $this->db->where("id", $contact_id);
           if($this->db->update("contacts", $data)){
               return "success";
           }
           return 'failed';
       }

       public function delete($contact_id) {

           $result  = $this->getContactById($contact_id);
           if($result){
               if ($this->db->delete("contacts", "id = ".$contact_id)) {
                   return "success";
               }
               return 'failed to delete';
           }

           return 'contact not exiist';
       }



   }
