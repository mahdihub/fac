<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MyTable{
    protected $table_view;
    protected $output;
    
    function set_table_view($table_view)
    {
        $this->table_view = $table_view;
    }
    
    function set_output($output)
    {
        $this->output = $output;
    }
    
    function show_table()
    {
        $CI =& get_instance();
        $data['output'] = $output;
        $CI->load->view($table_view,$data);
    }
}