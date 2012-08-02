<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_c extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index_v');
		$this->add();
		
		
	}
	
	public function home()
	{
		$data["title"] = "this is header";
		$data["body"] = "this is body";
				
		$this->load->view("home_v",$data);
		
		
	}
	
	public function add()
	{
		$this->load->model("math_m");
		echo $this->math_m->add_smth();
	}
	
	public function about()
	{
		$this->load->view("about_v");
		
	}
	
	
	public function getValues()
	{
	
		$this->load->model("db_m");
		
		$data["results"] = $this->db_m->getAll();
		
		$this->load->view("get_values_v",$data);
	
	}
	
	public function insertValue()
	{
	
		$this->load->model("db_m");
		
		$newRow = array (
		"user_isim" => "bob" 
		);
		
		$this->db_m->insert1($newRow);
		
		
	
		echo "it has been added";
	
	}
	
	public function insertValues()
	{
	
		$this->load->model("db_m");
		
		$newRow = array (
			array (
			"user_isim" => "kendedax", 
			"user_sifre" => "213d123"
			), array(
			"user_isim" => "kuasasne" ,
			"user_sifre" => "213d123"
			
			)
		);
		
		;
		
		$this->db_m->insert_multiple($newRow);

		echo "it has been added";
	
	}
	
	public function updateValue()
	{
		$this->load->model("db_m");
		
		$newRow = array (
			"user_isim" => "suyuuu"
			);
			
		$this->db_m->update1($newRow);
		
		echo "it has been updated";
		
	}
	
	
	public function updateValues()
	{
		$this->load->model("db_m");
		
		$newRow = array (
		
		
		// user_isim
			array (
			"id" => "1", 
			"user_sifre" => "qe"
			), array(
			"id" => "2" ,
			"user_sifre" => "qwer"
			
			)
		
		
			);
			
		$this->db_m->update_multiple($newRow);
		
		echo "it has been updated";
		
	}
	
	
	public function deleteValue()
	{
		$this->load->model("db_m");
		
		$oldRow = array (
			"id" => "4"
			);
			
		$this->db_m->delete1($oldRow);
		
		echo "it has been deleted";
		
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */