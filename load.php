<?php
class Load {
	function view( $fileName, $data = null ) {

		if(is_array($data)) {
			extract( $data );	
		}

		$view = 'views/'.$fileName;
		include $view;
	}
}

?>