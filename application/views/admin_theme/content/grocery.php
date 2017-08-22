<?php 
	foreach($render->css_files as $css){
		echo link_tag($css);
	}
	foreach($render->js_files as $js){
		echo script_tag($js);
	}
	echo $render->output;
?>