<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {
    
    public $data = array(); // all controller view data
    public $errors;
    public $user;    

    function __construct() {
        
        parent::__construct();    
        $this->load->helper(array('url','html'));
        $this->load->library('ion_auth'); 
        $this->_init();
        $this->_auth();
       
        $profile = (ENVIRONMENT == 'development') ? TRUE : FALSE;
        #$this->output->enable_profiler($profile);
    }
    
    function _auth() {

        $this->load->library('user_agent');
       
        if ($this->ion_auth->logged_in()) {
            $this->data['logged_in'] = TRUE;
            $this->data['is_admin'] = FALSE;
            if($this->ion_auth->in_group('admin'))
                $this->data['is_admin'] = TRUE;
            $this->user = $this->ion_auth->user()->row();
            $this->data['login_name'] = $this->user->first_name/*.' '.$this->user->last_name*/;
            $this->data['last_login'] = date('m/d/Y H:i:s', $this->user->last_login);
        } else {           
           if($this->uri->segment(1) != 'auth') {
                redirect('auth/login');
            }
        }
        
    }
    
    function _init() {
        // setup some useful vars
        $this->data['my_controller'] = TRUE;
        $this->data['logged_in'] = FALSE;
        $this->data['is_admin'] = FALSE;        
        $body_class = $this->uri->segment(1);
        $this->data['body_class'] = empty($body_class) ? 'dashboard' : $body_class;                 
        $this->data['header_js'] = FALSE; 
        $this->data['head_content'] = NULL; // arbitrary <head> content        
        $this->data['page_title'] = '';
        $this->data['site_name'] = $this->config->item('site_name');  
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */