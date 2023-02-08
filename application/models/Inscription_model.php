<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Inscription_model extends CI_Model{

        public function inscription($new_name , $new_email , $new_pwd , $dtn){
            if ($new_name == null || $new_email == null || $new_pwd == null || $dtn == null) {
                return "invalide";
            }else{
                $req2 = "SELECT COUNT(*) as isa FROM users WHERE email = '%s'";
                $fin2 = sprintf($req2 , $new_email);
                $query2 = $this->db->query($fin2);
                // if ($query->row_array()==null) {
                //     return 0;
                // }
                // return $query->row_array();

                $tab = $query2->row_array();
                if ($tab['isa'] == 0) {
                    $req = "INSERT INTO users VALUES (null , '%s' , '%s' , '%s' , '%s' , %s)";
                    $fin = sprintf($req,$new_name,$new_email,$new_pwd,$dtn,0);
                    // echo $fin;
                    $query = $this->db->query($fin);
                    return "vita";
                }else{
                    return "invalide";
                }


                
            }


            
        }

    }

?>