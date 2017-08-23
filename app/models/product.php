<?php
	class Product extends AppModel {
		var $name = 'Product';
		var $validate = array(
				'name' => array(
						'rule' => 'notEmpty'
					),
				'price' => array(
				        'rule' => 'numeric'
				    ),
				'description' => array(
						'rule' => 'notEmpty'
					),
				'file' => array(
					'rule' => array(
						'extension',
						array('gif', 'jpeg', 'png', 'jpg', 'jfif')
					),
					'message' => 'Please supply a valid image.'
				)
			);
	}
?>