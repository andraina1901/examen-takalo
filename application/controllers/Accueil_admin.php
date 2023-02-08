<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('CategorieAdmin_model');
        $this->load->library('session');
    }
    public function afficher(){

        $data = $this->CategorieAdmin_model->alldatas();
        $this->load->view('header_admin');
        $this->load->view('mainAcceuil_admin',$data);
        $this->load->view('footer_admin');
    }
    public function addCategory(){
        $data= $this->input->get('nom');
        $this->CategorieAdmin_model->add($data);
        $this->afficher();
    }
    public function updateCategoryForObject(){
        $key= $this->input->get('hidden');
        $select = $this->input->get('select');
        $this->CategorieAdmin_model->update($key ,$select);
        $this->afficher();
    }
}