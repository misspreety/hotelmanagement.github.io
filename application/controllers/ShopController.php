<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShopModel');
	}

	private function ReturnJsonToArray($success,$error,$message){
		if($success==true && $error ==false){
			$data = array(
				'success'=>'true',
				'error'=>'false',
				'message'=>$message
			);
			header("Content-type:application/json");
			print(json_encode($data,JSON_PRETTY_PRINT));
		
			}else if ($success == false && $error == true){
				$data =array(
				'success'=>'false',
				'error'=>'true',
				'message'=>$message
			
				);
				header("Content-type:application/json");
				print(json_encode($data,JSON_PRETTY_PRINT));
			}
	}

	public function First()
	{
		$this->load->view('shop/first');
	}
	
	public function Furniture()
	{
		$this->load->view('shop/furniture');
	}


	public function Living()
	{
		$this->load->view('shop/living');
	}


	public function Cart()
	{
		$this->load->view('shop/cart');
	}


	
	public function Bedroom()
	{
		$this->load->view('shop/bedroom');
	}



	
	public function Kids()
	{
		$this->load->view('shop/kids');
	}


}

