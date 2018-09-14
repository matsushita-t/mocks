<?php defined('BASEPATH') OR exit('No direct script access allowed');

class speech_to_text extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('translate');
    }

	public function index() {
        $template = $this->twig->loadTemplate(__CLASS__."/".__FUNCTION__.'.html');
        $this->output->set_output($template->render($this->view_data));
    }

    function upload() {

        $uploaddir = APPPATH. 'cache/';
        $originalFile = $uploaddir . time().".wav";

        if (move_uploaded_file($_FILES['data']['tmp_name'], $originalFile)) {
            echo $this->translate->text_translate($originalFile);
        } else {
            echo "error upload failed.\n";
            die();
        }
    }




}
