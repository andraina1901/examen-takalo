<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function afficher(){
        $this->load->view('test');
    }

    public function effectuerEchange($idObject){
        $this->load->model('Echange_model');
        $donnee = array();

        $this->session->get_userdata("info");
        $idUser = $_SESSION['info']['idUser'];
        $this->load->model('Categorie_model');
        $object= $this->Categorie_model->get_object_user($idUser) ;
        
        $donnee2 = array();
        $donnee2['ob'] = $object;

        $data['object'] = $donnee2['ob'];
        $data['idObject'] = $idObject;

        $data['contents'] = 'echange';
        $this->load->view('template',$data);
    }

    public function confirmerDemande($idObjetDemande){
        $this->load->model('Echange_model');

        $objets = array();

        for ($i=0; $i < 12; $i++) { 
            $objets[$i] = $this->input->post('box'.$i);
            // echo $i."  ".$objets[$i]."<br>";
        }
        


        for ($i=0; $i < count($objets); $i++) { 
            if ($objets[$i] == "on") {
                $valiny = $this->Echange_model->insererDemande($i , $idObjetDemande);
            }
        }

        $this->load->model('Categorie_model');
        $category= $this->Categorie_model->allcategories() ;
        $donnee = array();
        $donnee['cate'] = $category;
        $data['category'] = $donnee['cate'];
        $data['contents'] = 'accueil';
        $this->load->view('template',$data);

        // $this->load->view('template' , $data);
    }

}
?>