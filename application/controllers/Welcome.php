<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->view('welcome_message');
	}

public function savingdata()
{
	$this->load->helper('url');
	//this array is used to get fetch data from the view page.
	$data = array(
		'Name'     => $this->input->post('Name'),
		'Phone_number'  => $this->input->post('phone_number'),
		'check-in'   => $this->input->post('check-in'),

	);
	//insert data into database table.
	$this->db->insert('bookings',$data);

	$this->load->view('booking_successful');
}
}

