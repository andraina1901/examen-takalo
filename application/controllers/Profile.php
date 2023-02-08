<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Profile extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            // session_start();
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        }

        public function profiler(){
            $this->load->model('Categorie_model');
            $category= $this->Categorie_model->allcategories() ;
            $donnee = array();
            $donnee['cate'] = $category;

            // $id = $this->session->get_userdata("info");
            $idUser = $_SESSION['info']['idUser'];
            $this->load->model('Categorie_model');
            $object= $this->Categorie_model->get_object_user($idUser) ;
            
            $donnee2 = array();
            $donnee2['ob'] = $object;

            $data['object'] = $donnee2['ob'];
            $data['category'] = $donnee['cate'];
            $data['contents'] = 'profile';
            $this->load->view('template',$data);
        }

        public function allObject(){
            
        }
    }

?>