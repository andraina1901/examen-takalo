<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class CategorieAdmin_model extends CI_Model{

        public function statistiques(){
            $query = $this->db->query("select count(iduser) as nombreuser from users");
            $table = array();
            $table['nombreuser'] =$query->row_array();
            $query = $this->db->query("select count(idhistoriqueobjectuser) as nombreechange from historiqueobjectuser ");
            $table['nombreechange'] = $query->row_array();
            $query = $this->db->query(" select count(idobjectuser) as nombreobjetaverifier from (select * from objectuser where idcategory= -1 ) as objetsaverifier;");
            $table['nombreobjetaverifier'] = $query->row_array();
            return $table;        
        }
        public function objetsaverifier(){
            $query =$this ->db->query("select * from objectuser where idcategory= -1 ");
            $data=array();
            $i=0;
            foreach($query->result_array() as $row){
                $data[$i]=$row;
                $i++;
            }
            return $data;
        }
        public function allcategories(){
            $query = $this ->db -> query("select * from category");
            $data=array();
            $i=0;
            foreach($query->result_array() as $row){
                $data[$i]=$row;
                $i++;
            }
            return $data;

        }
        public function alldatas(){
            $table = array();
            $table['stats'] = $this->statistiques() ;
            $table['verifier'] = $this ->objetsaverifier() ;
            $table['all'] = $this ->allcategories();
            return $table ;
        }

        // public function objets($idCategory){
        //     $req = "SELECT * FROM objetsdispocomplet WHERE idcategory = '%s'";
        //     $fin = sprintf($req,$idCategory);
        //     $query = $this->db->query($fin);
        //     if ($query->row_array()==null) {
        //         return 0;
        //     }
        //     return $query->result_array();
        // }
        public function add ($valeur){
            $this->db->query("INSERT INTO category values (null , '$valeur')");
        }
        public function update($key ,$idcategory){
            $this->db->query("UPDATE objectuser SET idcategory='$idcategory' where idobjectuser = $key ");
        }

    }

?>