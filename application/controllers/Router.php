<?php
defined("BASEPATH") or exit();
class Router extends MY_Controller
{
   function index()
   {
      $this->renderFront("homepage/home","Explore Sumatra");
   }
}
