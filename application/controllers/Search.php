<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function search(){
        $key = $this->input->get('key');
        $idcategory = $this->input->get('category');
        $this->load->model("Search_model");
        $rep = $this->Search_model->search($key, $idcategory);
        $this->load->model('Categorie_model');
        $category= $this->Categorie_model->allcategories() ;
        $donnee = array();
        $donnee['cate'] = $category;
        $data['category'] = $donnee['cate'];

        $donnee = array();
        $donnee['cate'] = $rep;
        $data['search'] = $donnee['cate'];
        $data['contents'] = 'recherche';
        //   var_dump($data['search'] );
        $this->load->view('template',$data);
    }
}
?>