<?php 
class HomesController extends AppController {
	var $name = 'Homes';
	var $uses = array('Product', 'Home');
	// var $component = array('Session');
	var $helper = array('Html', 'Session');
	var $layout = 'home';
	var $components = array('Session');

	function index() {
		$this->set('products', $this->Product->find('all', array(
													'condition' => array(
															'limit' => 8
														)
					)));
	}
}
?>