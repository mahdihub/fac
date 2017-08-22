<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layout {
	private $theme = 'default';

	public function set_theme($theme) {
		$this->theme = $theme;
	}
	
	public function view($name, $data = array()) {
		$CI =& get_instance();
		$params['content_for_layout'] = $CI->load->view($this->theme . '/content/' . $name, $data, true);
		$CI->load->view($this->theme . '/template', $params);
	}
}