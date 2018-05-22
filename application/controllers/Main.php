<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('registration_model');
		$this->load->model('report_model');
		if (!isset($_SESSION)) session_start();
	}

	public function index()
	{
		if(isset($_SESSION['ticket_no'])){
				redirect('maps', 'refresh');
		} else {
			$this->load->view('login');
		}
	}

	public function login() {

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('ticket_no', 'Ticket No', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			if(isset($_SESSION['ticket_no'])){
				redirect('maps', 'refresh');
			} else {
				$msg['type'] = "warning";
				$msg['message'] = "Ticket No is Empty. Please Insert Ticket No to Continue.";
				$this->load->view('login', $msg);
			}
		} else 
		{
			$data = array(
				'ticket_no' => $this->input->post('ticket_no')
			);
			$result = $this->registration_model->login($data);
			if ($result == TRUE) {

				$where = array(
				'ticket_no' => $this->input->post('ticket_no')
				);
				$result = $this->registration_model->select('*', $where, null, null);
				$session_data = array(
					'ticket_no' => $result[0]->ticket_no,
					'ticket_from' => $result[0]->ticket_from,
					'ticket_destination' => $result[0]->ticket_destination,
					'ticket_date' => $result[0]->ticket_date,
					'ticket_time' => $result[0]->ticket_time,
					'ticket_bus_detail' => $result[0]->ticket_bus_detail,
					'plat_no' => $result[0]->plat_no
					);

				$_SESSION['ticket_no'] = $session_data;
				
				redirect('maps');
				
			} else 
			{
				$msg['type'] = "danger";
				$msg['message'] = "Ticket No <b>".$this->input->post('ticket_no')."</b> Does Not Exist. <br/>Please Make Sure The Bus Passager Has Register in The App";
				$this->load->view('login', $msg);
			}
		}
	}

	public function maps()
	{

		if(!isset($_SESSION['ticket_no'])){
				redirect('login', 'refresh');
		} else {
			
			$where = array(
				'tiket_no' => $_SESSION['ticket_no']['ticket_no']
			);

			$result['report'] = $this->report_model->select('*', $where, null, null);

				$this->db->select('arrival_time');
			    $this->db->from('bet_report');
			    $this->db->where($where);
			    $this->db->order_by("arrival_time", "desc");
			    $this->db->limit(1);
			    $query = $this->db->get();
			    $row = $query->row();
			    if($row) {
			    	$result['arrival'] = $row->arrival_time;
			    } else {
			    	$result['arrival'] = "NONE";
			    }
			    
			$this->load->view('include/header-map', $result);
			$this->load->view('v1/maps', $result);
			$this->load->view('include/footer');
			$this->load->view('include/script-map');
		}
	}

	public function report()
	{

		if(!isset($_SESSION['ticket_no'])){
				redirect('login', 'refresh');
		} else {
			$where = array(
				'tiket_no' => $_SESSION['ticket_no']['ticket_no']
			);

			$result['report'] = $this->report_model->select('*', $where, null, null);

			$this->load->view('include/header-report');
			$this->load->view('v1/table', $result);
		}
	}

	public function logout() 
	{
		$_SESSION['ticket_no'] = NULL;
		unset($_SESSION['ticket_no']);
		redirect('/', 'refresh');
	}
}
