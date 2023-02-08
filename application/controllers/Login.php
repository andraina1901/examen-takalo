<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        // session_start();
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }

    public function afficher(){
        $this->load->view('login');
    }

    public function get_info(){
        $this->load->model('Login_model');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');


        $rep = $this->Login_model->check($email,$mdp);
        //  echo $rep;
        if ($rep==0) {
            redirect('login/afficher');

        } else{
            $this->session->set_userdata("info",$rep);
            if ($rep['isadmin'] == 1) {
                redirect('accueil_admin/afficher');
            }else if ($rep['isadmin'] == 0){
                $this->load->model('Categorie_model');
                $category= $this->Categorie_model->allcategories() ;
                $donnee = array();
                $donnee['cate'] = $category;
                $data['category'] = $donnee['cate'];
                $data['contents'] = 'accueil';
                 $this->load->view('template',$data);
            }
            
        }
        
    }

    // public function accueil
    public function accueil(){
        $this->load->model('Categorie_model');
        $category= $this->Categorie_model->allcategories() ;
        $donnee = array();
        $donnee['cate'] = $category;
        $data['category'] = $donnee['cate'];
        $data['contents'] = 'accueil';
     //   var_dump($data['category'] );
         $this->load->view('template',$data);
    }

    
}
?>