<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function afficher(){
        $this->load->view('login');
    }

    public function page(){

        $this->load->model('Interaction_model');
        $demandes = $this->Interaction_model->getDemandes($_SESSION['info']['idUser']);
        $propositions = $this->Interaction_model->getPropositions($_SESSION['info']['idUser']);
        $data['demandes'] = $demandes;
        $data['propositions'] = $propositions;
        $data['contents'] = 'interaction';
        $this->load->view('template',$data);
    }

    public function supprimer($idDemande , $idPropose){
        $this->load->model('Interaction_model');
        $del = $this->Interaction_model->delete($idDemande , $idPropose);
        $demandes = $this->Interaction_model->getDemandes($_SESSION['info']['idUser']);
        $propositions = $this->Interaction_model->getPropositions($_SESSION['info']['idUser']);
        $data['demandes'] = $demandes;
        $data['propositions'] = $propositions;
        $data['contents'] = 'interaction';
        $this->load->view('template',$data);
    }

    public function refuser($idDemande , $idPropose){
        $this->load->model('Interaction_model');
        $del = $this->Interaction_model->refus($idDemande , $idPropose);
        $demandes = $this->Interaction_model->getDemandes($_SESSION['info']['idUser']);
        $propositions = $this->Interaction_model->getPropositions($_SESSION['info']['idUser']);
        $data['demandes'] = $demandes;
        $data['propositions'] = $propositions;
        $data['contents'] = 'interaction';
        $this->load->view('template',$data);
    }

}
?>