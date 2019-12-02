<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->helper('url');
		$this->load->model('queries');

	}
	
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
	**/

	public function index()
	{
		$this->load->model('queries');
		$activities= $this->queries->getActivities();
		$this->load->view('welcome_message', ['activities'=>$activities]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($Activity_Key){
		$this->load->model('queries');
		$activity = $this->queries->getSingleActivity($Activity_Key);
		$this->load->view('update', ['activity'=>$activity]);
	}

	public function save(){
		$this->form_validation->set_rules('PIMS_Project_Number', 'PIMS Project Number', 'required');
		$this->form_validation->set_rules('Project_Output_Number', 'Project Output Number', 'required');
		$this->form_validation->set_rules('Project_Activity_Number', 'Project Activity Number', 'required');
		$this->form_validation->set_rules('Project_Activity', 'Project Activity', 'required');
		$this->form_validation->set_rules('dates_from_gcf', 'Dates from GCF', 'required');
		$this->form_validation->set_rules('Start_Date', 'Start Date', 'required');
		$this->form_validation->set_rules('End_Date', 'End Date', 'required');
		$this->form_validation->set_rules('Status', 'Status', 'required');
		$this->form_validation->set_rules('Modified', 'Modified', 'required');
		$this->form_validation->set_rules('User', 'User', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addActivities($data)){
				$this->session->set_flashdata('msg', 'Activity Saved Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Failed to Save Activity');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($Activity_Key){
		echo $Activity_Key;
		$this->form_validation->set_rules('PIMS_Project_Number', 'PIMS Project Number', 'required');
		$this->form_validation->set_rules('Project_Output_Number', 'Project Output Number', 'required');
		$this->form_validation->set_rules('Project_Activity_Number', 'Project Activity Number', 'required');
		$this->form_validation->set_rules('Project_Activity', 'Project Activity', 'required');
		$this->form_validation->set_rules('dates_from_gcf', 'Dates from GCF', 'required');
		$this->form_validation->set_rules('Start_Date', 'Start Date', 'required');
		$this->form_validation->set_rules('End_Date', 'End Date', 'required');
		$this->form_validation->set_rules('Status', 'Status', 'required');
		$this->form_validation->set_rules('Modified', 'Modified', 'required');
		$this->form_validation->set_rules('User', 'User', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateActivities($data, $Activity_Key)){
				$this->session->set_flashdata('msg', 'Activity Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg', 'Failed to Update Activity');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function view($Activity_Key){
		$this->load->model('queries');
		$activity = $this->queries->getSingleActivity($Activity_Key);
		$this->load->view('view', ['activity'=>$activity]);
	}

	/*public function api(){
		$sql = $this->db->query("SELECT * FROM projects_table")->result();
		echo json_encode($sql);
	}*/

	public function delete($Activity_Key){
		$this->load->model('queries');
		if($this->queries->deleteActivities($Activity_Key)){
			$this->session->set_flashdata('msg', 'Activity Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg', 'Failed to Delete Activity');
		}
		return redirect('welcome');
	}		

	public function chart(){
		//$data['title'] = 'Funding Trends';
		$this->load->model('queries');
		$data = $this->queries->get_data()->result();
		$data['charts'] = json_encode($data);
		$this->load->view('charts', $data);
	  }
}