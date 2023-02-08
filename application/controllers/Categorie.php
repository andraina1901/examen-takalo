<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

    // public function __construct(){
    //     parent::__construct();
    //     $this->load->library('session');
    // }

    public function afficher(){
        $this->load->view('test');
    }

    public function getObjets($id){
        // $idf = $this->session->get_userdata("info");
        $idUser = $_SESSION['info']['idUser'];
        $this->load->model('Categorie_model');
        $object = $this->Categorie_model->objets($id,$idUser);
        // var_dump($object);
        echo json_encode($object);
        // var_dump($object);
    }
}
?>