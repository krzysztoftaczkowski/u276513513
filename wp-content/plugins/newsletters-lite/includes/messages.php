<?php
	
$messages = array();

$messages[1] = __('Preview has been sent to %s', $this -> plugin_name);
$messages[2] = __('Preview cannot be sent to %s, %s.', $this -> plugin_name);
$messages[3] = __('%s is an invalid email address', $this -> plugin_name);

$messages = apply_filters('newsletters_messageserrors', $messages);	
	
?>