<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $this->data['view_file'] = 'home/index';

        $this->load->view('_layouts/main', $this->data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */