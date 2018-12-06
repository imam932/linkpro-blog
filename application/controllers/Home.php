<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends User_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model(array('Model_article', 'Model_category'));
  }

  function index()
  {
    // load data
    $data['article']          = $this->Model_article->select_all(4, TRUE);
    $data['article_footer']   = $this->Model_article->select_all(4);
    $data['category'] = $this->Model_category->select_all();
    $data['article'] = $this->Model_article->select_all(null, TRUE);

    $data['content'] = $this->load->view('article', $data, TRUE);
    $data['title'] = "Home";
    $data['desc'] = "desc";
    $data['breadcrumb'] = array("Home");
    $data['home'] = true;

    $this->load->view('template', $data);
  }

}
