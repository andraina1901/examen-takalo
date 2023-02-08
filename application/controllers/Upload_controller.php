<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Upload_controller extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->library('session');
        }

        public function uploadObject() {

        $this->load->helper('upload');

        $id = $this->session->get_userdata("info");
        $idUser = $_SESSION['info']['idUser'];
        $nomObj = $this->input->post("nom");
        $description = $this->input->post("description");
        $prixObj = $this->input->post("prix");
        // $nomPhoto = $this->input->post("photo");
        $nomPhoto = uploadImage($_FILES["photo"]);
        $this->load->model('Categorie_model');
        
        if($nomPhoto != "non") {
            $this->Categorie_model->insert_object($idUser,$nomObj,$prixObj,$description,$nomPhoto);
        }
            // $this->load->view('profile'); 
        } 
    }
?>

 