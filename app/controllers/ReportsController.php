<?php

class ReportsController extends BaseController {

	public function __construct()
    {
		$this->beforeFilter('auth');
	}

	public function index() {
	
		$this->listing();
	}
	
	public function listing() {
	}
	
	public function show($repport) {
	}
	
	public function getCreate() {
	}
	
	public function postCreate() {
	}
	
	public function getUpdate() {
	}
	
	public function postUpdate() {
	}
	
	public function delete($repport) {
		
		$repport->delete();
		return Redirect::back();
	}
}
?>
 
