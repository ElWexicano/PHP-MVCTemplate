<?php


class Controller {
	public $load;
	public $model;

	function __construct() {

		$this->load = new Load();
		$this->model = new Model();

		// determine what page you're on
		$this->home();
	}

	function home() {
		$data = $this->model->publicMethod();

		$this->load->view('view.php', $data);
	}

}


?>