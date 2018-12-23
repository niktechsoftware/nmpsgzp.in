<?php
class Nmps extends CI_Controller{

	public function index(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/home";
		$this->load->view("include/nmps/template",$data);
	}
	
	public function about(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/about";
		$this->load->view("include/nmps/template",$data);
	}
	public function admission(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/admission";
		$this->load->view("include/nmps/template",$data);
	}
	public function feature(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/feature";
		$this->load->view("include/nmps/template",$data);
	}
	public function gallery(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/gallery";
		$this->load->view("include/nmps/template",$data);
	}
	public function contact(){
		$data['title'] = "New Modern Public School";
		$data['body'] = "nmps/contact";
		$this->load->view("include/nmps/template",$data);
	}
}