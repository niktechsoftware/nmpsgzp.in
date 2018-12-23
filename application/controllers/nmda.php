<?php
class Nmda extends CI_Controller{
	
	public function index(){
		$data['title'] = "New Modern Defence Academy";
		$data['body'] = "nmda/home";
		$this->load->view("include/nmda/template",$data);
	}
	
	public function about(){
		$data['title'] = "New Modern Defence Academy";
		$data['body'] = "nmda/about";
		$this->load->view("include/nmda/template",$data);
	}
	
	public function gallery(){
		$data['title'] = "New Modern Defence Academy";
		$data['body'] = "nmda/gallery";
		$this->load->view("include/nmda/template",$data);
	}
	
	public function contact(){
		$data['title'] = "New Modern Defence Academy";
		$data['body'] = "nmda/contact";
		$this->load->view("include/nmda/template",$data);
	}
}