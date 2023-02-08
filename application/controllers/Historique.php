<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historique extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Historique_model');
    }

    public function getData(){
        $data =$this->Historique_model->gethistoriques( );
        return $data ;
    }
    public function afficher(){
        // $key= $this->input->get('key');
        $data['historia'] = $this->getData() ;
        $this->load->view('header');
        $this->load->view('mainHistorique' ,$data);
        $this->load->view('footer');
    }
}
?>