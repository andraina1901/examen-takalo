<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Login_model extends CI_Model{

        public function check($email, $mdp){
            $req = "SELECT * FROM users WHERE email= '%s' and password= '%s'";
            $fin = sprintf($req,$email,$mdp);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }
            return $query->row_array();
        }

    }

    // public function get_user_detail($iduser){
    //     $req = "SELECT * FROM users where iduser= '%s'";
    //     $fin = sprintf($req,$iduser);
    //     $query = $this->db->query($fin);
    //     return $query->row_array();
    // }
?>