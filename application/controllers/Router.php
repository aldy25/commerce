<?php
defined("BASEPATH") or exit();
class Router extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model("M_user");
   }

   function index()
   {
      $this->renderFront("homepage/home","Explore Sumatra");
   }
}
