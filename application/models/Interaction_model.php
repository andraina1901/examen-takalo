<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Interaction_model extends CI_Model{

        public function page(){
            if ($new_name == null || $new_email == null || $new_pwd == null || $dtn == null) {
                return "invalide";
            }else{
                $req2 = "SELECT COUNT(*) as isa FROM user WHERE email = '%s'";
                $fin2 = sprintf($req2 , $new_email);
                $query2 = $this->db->query($fin2);
                // if ($query->row_array()==null) {
                //     return 0;
                // }
                // return $query->row_array();

                $tab = $query2->row_array();
                if ($tab['isa'] == 0) {
                    $req = "INSERT INTO user VALUES (null , '%s' , '%s' , '%s' , '%s' , %s)";
                    $fin = sprintf($req,$new_name,$new_email,$new_pwd,$dtn,0);
                    $query = $this->db->query($fin);
                    return "vita";
                }else{
                    return "invalide";
                }


            }
        }

        public function getDemandes($idUser){
            $req = "select objectuser.iduser , idobjectpropose , idobjectdemande ,datedemande from objectuser join (select idobjectpropose ,idobjectdemande,datedemande from demande where etatdemande=0 ) as objetsenattente on idobjectpropose = idobjectuser WHERE objectuser.iduser = '%s' ;";
            $fin = sprintf($req,$idUser);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }

            $valiny = $query->result_array();
            $this->load->model('Interaction_model');
            for ($i=0; $i < count($valiny); $i++) { 
                $valiny[$i]['nomObjetPropose'] = $this->Interaction_model->getNomObjet($valiny[$i]['idobjectpropose']);
                $valiny[$i]['nomObjetDemande'] = $this->Interaction_model->getNomObjet($valiny[$i]['idobjectdemande']); 
            }

            return $valiny;
        }

        public function getNomObjet($id){
            $req2 = "select nomObjet from objectuser WHERE idobjectuser = '%s' ;";
            $fin2 = sprintf($req2,$id);
            $query2 = $this->db->query($fin2);
            if ($query2->row_array()==null) {
                return 0;
            }
            $valiny = $query2->row_array();
            return $valiny['nomObjet'];
        }

        public function getPropositions($idUser){
            $req = "select objectuser.iduser , idobjectpropose , idobjectdemande ,datedemande from objectuser join( select idobjectpropose ,idobjectdemande,datedemande from demande where etatdemande=0 ) as objetsenattente on idobjectdemande = idobjectuser WHERE objectuser.iduser = '%s';";
            $fin = sprintf($req,$idUser);
            $query = $this->db->query($fin);
            if ($query->row_array()==null) {
                return 0;
            }

            $valiny = $query->result_array();
            $this->load->model('Interaction_model');
            for ($i=0; $i < count($valiny); $i++) { 
                $valiny[$i]['nomObjetPropose'] = $this->Interaction_model->getNomObjet($valiny[$i]['idobjectpropose']);
                $valiny[$i]['nomObjetDemande'] = $this->Interaction_model->getNomObjet($valiny[$i]['idobjectdemande']); 
            }

            return $valiny;
        }

        public function delete($idObjetDemande , $idObjetPropose){
            $req = "UPDATE demande SET etatdemande = -4 WHERE idobjectdemande = '%s' AND idobjectpropose = '%s'";
            $fin = sprintf($req,$idObjetDemande , $idObjetPropose);
            $query = $this->db->query($fin);
        }

        public function refus($idObjetDemande , $idObjetPropose){
            $req = "UPDATE demande SET etatdemande = -10 WHERE idobjectdemande = '%s' AND idobjectpropose = '%s'";
            $fin = sprintf($req,$idObjetDemande , $idObjetPropose);
            $query = $this->db->query($fin);
        }

        public function acc($idObjetDemande , $idObjetPropose){

            $req2 = "SELECT * FROM objectuser WHERE idObjetDemande = idObjectUser OR idObjectPropose = idObjectUser";
            // $fin2 = sprintf($req2);
            $query2 = $this->db->query($req2);
            if ($query2->row_array()==null) {
                return 0;
            }
            $valiny = $query2->result_array();


            $req3 = "INSERT INTO historiqueobjectuser VALUES(null , '%s' , '%s' , '%s' , '%s' , '%s' , '%s' , '%s')";
            $fin3 = sprintf($req3 , $valiny[0]['idobjectuser'] , $valiny[0]['iduser'] , $valiny[0]['idcategory'] , $valiny[0]['nomobject'] , $valiny[0]['description'] , $valiny[0]['prixestimatif'] , $valiny[0]['datepublication']);
            $query3 = $this->db->query($fin3);
            

            $req4 = "INSERT INTO historiqueobjectuser VALUES(null , '%s' , '%s' , '%s' , '%s' , '%s' , '%s' , '%s')";
            $fin4 = sprintf($req4 , $valiny[1]['idobjectuser'] , $valiny[1]['iduser'] , $valiny[1]['idcategory'] , $valiny[1]['nomobject'] , $valiny[1]['description'] , $valiny[1]['prixestimatif'] , $valiny[1]['datepublication']);
            $query4 = $this->db->query($fin4);
            

            $req = "UPDATE demande SET etatdemande = 10 WHERE idobjectdemande = '%s' AND idobjectpropose = '%s'";
            $fin = sprintf($req,$idObjetDemande , $idObjetPropose);
            $query = $this->db->query($fin);


            $req5 = "UPDATE objectuser SET iduser = '%s' WHERE iduser = '%s'";
            $fin5 = sprintf($req5 , $valiny[0]['iduser'] , $valiny[1]['iduser']);
            $query5 = $this->db->query($fin5);

            $req6 = "UPDATE objectuser SET iduser = '%s' WHERE iduser = '%s'";
            $fin6 = sprintf($req6 , $valiny[1]['iduser'] , $valiny[0]['iduser']);
            $query6 = $this->db->query($fin6);

            // $temp = $valiny[0]['iduser'];
            // $valiny[0]['iduser'] = $valiny[1]['iduser'];
            // $valiny[1]['iduser'] = $temp;
        }

    }

?>