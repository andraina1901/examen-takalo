<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Historique_model extends CI_Model{


        public function gethistoriques(){
            $req = " SELECT nom ,nomobjet , description,prixestimatif,datepublication from historiqueobjectuser join users on historiqueobjectuser.idUser = users.idUser  ";
            $query = $this->db->query($req);
            $data=array();
            $i=0;
            foreach($query->result_array() as $row){
                $data[$i]=$row;
                $i++;
            }
            return $data;
        }
        
    }


?>