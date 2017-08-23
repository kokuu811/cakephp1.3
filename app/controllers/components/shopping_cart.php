<?php
class ShoppingCartComponent extends Object {
	public $components = array('Session');

    function getArrCart() {
        $arrCart = array();
		foreach($this->Session->read('Carts') as $key => $value){
			$arrCart[] = $value;
		}
        return $arrCart;
    }
}
?>