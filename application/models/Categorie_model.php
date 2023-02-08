<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Categorie_model extends CI_Model{

        public function allCategories(){
            $req = "SELECT * FROM category";
            $fin = sprintf($req);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }
            return $query->result_array();
        }

        public function objets($idCategory, $idUser){
            $req = "SELECT * FROM objectuser WHERE idcategory = '%s' and idUser!= '%s'";
            $fin = sprintf($req,$idCategory,$idUser);
            // echo $fin;
            $query = $this->db->query($fin);
            return $query->result_array();
        }

        public function insert_object($idUser,$nom,$prix,$description,$nomphoto){
            $req = "INSERT INTO objectuser VALUES(null,'%s',-1,'%s','%s','%s','%s','%s')";
            date_default_timezone_set("Africa/Nairobi");
            $date = date('Y-m-d');
            $rep = sprintf($req,$idUser,$nom,$description,$prix,$date,$nomphoto);
            $query = $this->db->query($rep);
        }


        public function get_object_user($idUser){
            $req = "select * from objectuser where iduser='%s'";
            $rep = sprintf($req,$idUser);
            $query = $this->db->query($rep);
            return $query->result_array();
        }
    }

?>