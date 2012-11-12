<?php

class Model {
	public function publicMethod() {
		return array(
			'greeting' => 'hello world',
			'day' => date('l')
		);
	}
}
?>