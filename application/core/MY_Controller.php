<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

    protected $twig;
    public $view_data = array();

    public function __construct()
    {
        parent::__construct();
        $loader = new Twig_Loader_Filesystem('application/views/');
        $this->twig = new Twig_Environment($loader, array('cache' => APPPATH.'/cache/twig', 'debug' => true));
        $this->view_data['base_url'] = $this->config->base_url();
        $this->view_data['url'] = $this->config->site_url($this->uri->uri_string());

    }
}
