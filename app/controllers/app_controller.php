<?php
class AppController extends Controller {
	var $uses = array('Controller', 'Controller');
	var $components = array('Session');

	public function beforeFilter() {
		parent::beforeFilter();
	}	
}
