<?php
class Users extends MY_controller
{
 public function  view()
  {
  	
  	$this->load->view('Users/homepage.php');
  }

  public function index()
  {
    $this->load->model('home_model');
    $articles = $this->home_model->listing();
    $this->load->view('users/homepage',['articles'=>$articles]);
  }
}

?>