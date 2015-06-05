<?php
class Home extends CI_Controller {

   function index()
   {
      
      $this->load->view('headerTemplate');
      $this->load->view('homeTemplate');
   	  $this->load->view('footerTemplate');	
   }

}
?>