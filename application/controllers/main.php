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
   $this->load->view('partial/about');
   $this->load->view('partial/transbox_bottom');  
   $this->load->view('partial/sidebar');
   $this->load->view('partial/footer');
  
 
   }

function view($page = 'about')
   {
   $data = array(
		'title' => $page
		);
	
	if ( ! file_exists('application/views/partial/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
  
   $this->load->view('partial/head', $data);
   $this->load->view('partial/transbox_top');
   $this->load->view('partial/header');
   $this->load->view('partial/menu');
   $this->load->view('partial/'.$page);
   $this->load->view('partial/transbox_bottom');  
   $this->load->view('partial/sidebar');
   $this->load->view('partial/footer');
  
 
   }   
function budowa()
   {
   $data = array(
		'title' => 'Budowa domów'
		);
  
   $this->load->view('partial/head', $data);
   $this->load->view('partial/transbox_top');
   $this->load->view('partial/header');
   $this->load->view('partial/menu');
   $this->load->view('partial/budowa');
   $this->load->view('partial/transbox_bottom');  
   $this->load->view('partial/sidebar');
   $this->load->view('partial/footer');
  
 
   }      
  
  
}
 ?>