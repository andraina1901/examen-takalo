<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Search_model extends CI_Model{

        public function search($key, $idcategory){
            $req = "SELECT * FROM objectuser where nomobjet like '%s%s%s' and idcategory=%s";
            $rep = sprintf($req,'%',$key,'%',$idcategory);
            $query = $this->db->query($rep);
            return $query->result_array();
        }

    }

?>