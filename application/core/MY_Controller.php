<?php
defined("BASEPATH") or exit();
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
	   parent::__construct();
	}

	//Front end rendering
	function renderFront($content,$title,$data = NULL)
	{
	   	$data['title'] = $title;

		$data['style'] = $this->load->view("temps/front/style",$data,TRUE);
		$data['script'] = $this->load->view("temps/front/script",$data,TRUE);
		$data['meta'] = $this->load->view("temps/front/meta",$data,TRUE);
		$data['header'] = $this->load->view("temps/front/header",$data,TRUE);
		$data['footer'] = $this->load->view("temps/front/footer",$data,TRUE);
		$data['content'] = $this->load->view("pages/front/".$content,$data,TRUE);
		$this->load->view("base/front/base",$data);
	}

	//Backend Rendering
	function renderBack($content,$title,$data = NULL)
	{

	}
}
