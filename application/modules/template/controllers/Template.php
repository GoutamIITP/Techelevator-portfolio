<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller
{

	public $comp = array();

	function __construct()
	{
		parent::__construct();

		// Initialize common data for all templates
		$this->comp = array(
			'company_name' => 'TechElevatr Digital Solutions',
			'phone' => '+91-9876543210',
			'phone1' => '+91-9876543211',
			'phonehtml' => 'tel:+919876543210',
			'phonehtml1' => 'tel:+919876543211',
			'mail' => 'info@techelevator.com',
			'mailhtml' => 'mailto:info@techelevator.com',
			'registeredAddress' => '123, Tech Park, Sector 62, Noida, Uttar Pradesh - 201301, India',
			'officeAddress' => '456, Innovation Hub, Cyber City, Gurugram, Haryana - 122002, India',
			'themeColor' => '#1E40AF'
		);
	}
	public function layout1($data = array())
	{
		$data = array_merge($this->comp, $data);
		$this->load->view('header', $data);
		$this->load->view('navigation');
		$this->load->view('slider');
		$this->load->view('body');
		$this->load->view('footer');
	}

	public function layout2($data)
	{
		$data = array_merge($this->comp, $data);
		$this->load->view('header', $data);
		$this->load->view('navigation');
		$this->load->view('body');
		$this->load->view('footer');
	}
	public function layout3($data)
	{
		$data = array_merge($this->comp, $data);
		$this->load->view('header_error', $data);
		$this->load->view('navigation');
		$this->load->view('body');
		$this->load->view('footer');
	}
}
