<?php
 function load_view($view,$data=NULL)
 {
     $CI =& get_instance();
     $CI->load->view('templates/header.php');
     $CI->load->view($view,$data);
     $CI->load->view('templates/footer.php');
 }