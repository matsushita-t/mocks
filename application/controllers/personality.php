<?php defined('BASEPATH') OR exit('No direct script access allowed');

class personality extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('PersonalityLogic');
    }

	public function index() {
        $template = $this->twig->loadTemplate(__CLASS__."/".__FUNCTION__.'.html');
        $this->output->set_output($template->render($this->view_data));
    }

    function analytic() {

        $data = $this->input->post('text');
        $result = $this->personalitylogic->analytic($data);

        var_dump($result);

    }




}
