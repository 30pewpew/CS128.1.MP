<?php
	class AssignSpecimenCode extends CI_controller
	{
		public function index()
		{
			//echo "Assign Specimen Code";
			$this->load->helper('url');
			$this->load->view('specimen-assign');
		}
	}
?>