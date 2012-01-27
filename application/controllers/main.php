<?php
class Main extends CI_Controller
{
function index()
   {
   $data = array(
		'title' => 'O nas'
		);
   $this->load->view('partial/head', $data);
   $this->load->view('index', $data);
   }
}
 ?>