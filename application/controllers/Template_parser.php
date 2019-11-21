<?php 
class Template_parser extends CI_Controller {

    function __construct() { 
        parent::__construct();

        # Load libraries
        $this->load->library('parser');  

        # Load language
        $this->lang->load('template_parser', 'english');      
    }
        
    function index() {
        # Load variables into the template parser
        $data['title']       = $this->lang->line('title');
        $data['description'] = $this->lang->line('description');
        $data['homepage']    = $this->lang->line('homepage');

        # Display view
        $this->parser->parse('template_parser', $data);
    }

}

?>