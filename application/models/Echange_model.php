<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Echange_model extends CI_Model{

        public function allEchanges(){
            $req = "SELECT * FROM category";
            $fin = sprintf($req);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }
            return $query->result_array();
        }

        public function objets($idCategory){
            $req = "SELECT * FROM objetsdispocomplet WHERE idcategory = '%s'";
            $fin = sprintf($req,$idCategory);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }
            return $query->result_array();
        }

        public function insererDemande($idObjetPropose , $idObjetDemande){
            $req = "INSERT INTO demande VALUES(null , '%s' , '%s' , 0 , '%s' , null)";
            // $date = date('d-m-y h:i:s');
            date_default_timezone_set("Africa/Nairobi");
            $date = date('Y-m-d H:i:s');
            // echo $date;
            $fin = sprintf($req , $idObjetPropose , $idObjetDemande , $date);
            $query = $this->db->query($fin);
        }

    }

?>