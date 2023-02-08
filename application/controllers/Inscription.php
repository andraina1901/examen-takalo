<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function afficher(){
        $this->load->view('login');
    }

    public function inscrire(){
        $this->load->model('Inscription_model');

        $new_name = $this->input->post('newname');
        $new_email = $this->input->post('newemail');
        $new_pwd = $this->input->post('newpass');
        $date = $this->input->post('dtn');

        $ins = $this->Inscription_model->inscription($new_name , $new_email , $new_pwd , $date);
        var_dump($ins);
        if ($ins == "vita") {
            $rep = array();
            $rep['new_name'] = $new_name;
            $rep['new_email'] = $new_email;
            $rep['new_pwd'] = $new_pwd;
            $rep['date'] = $date;
            $this->session->set_userdata("info",$rep);
            $this->load->view('login/afficher');
        }else{
            redirect('login/afficher');
        }
        
    }
}
?>