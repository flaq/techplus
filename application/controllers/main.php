<?php
class Main extends CI_Controller
{
function index()
   {
   $data = array(
		'title' => 'O nas'
		);
  
   $this->load->view('partial/head', $data);
   $this->load->view('partial/transbox_top');
   $this->load->view('partial/header');
   $this->load->view('partial/menu');
   $this->load->view('partial/content');
   $this->load->view('partial/transbox_bottom');  
   $this->load->view('partial/sidebar');
   $this->load->view('partial/footer');
  
 
   }
}
 ?>