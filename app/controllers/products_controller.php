<?php
class ProductsController extends AppController {
	var $name = 'Products';
	var $helper = array("Html", "Session");
	var $component = array("Session");
	var $layout = 'admin';

	function beforeFilter() {
		parent::beforeFilter();
	}

	function index() {
		$this->set('products', $this->Product->find('all'));
	}

	function add() {

		if(!empty($this->data)) {
			$this->Product->create();
			$file = $this->data['Product']['image']; //put the  data into a var for easy use

	        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
	        $arr_ext = array('jpg', 'jpeg', 'gif', 'jfif'); //set allowed extensions
	        if(in_array($ext, $arr_ext))
	        {
	            //do the actual uploading of the file. First arg is the tmp name, second arg is
	            //where we are putting it
	            if(move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . $file['name']))
	            {
	                $this->data['Product']['image'] = $file['name'];
	            }
	        }
			if($this->Product->save($this->data)) {
				$this->Session->setFlash('Your product has been created successfully');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The upload could not be saved. Please, try again.', true);
			}
		}
	}

	function edit($id = null) {
		$this->Product->id = $id;
		if(empty($this->data)) {
			$this->data = $this->Product->read();
		} else {
			$file = $this->data['Product']['image']; //put the  data into a var for easy use
	        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
	        $arr_ext = array('jpg', 'jpeg', 'gif', 'jfif'); //set allowed extensions
	        if(in_array($ext, $arr_ext))
	        {
	            //do the actual uploading of the file. First arg is the tmp name, second arg is
	            //where we are putting it
	            if(move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . $file['name']))
	            {
	                $this->data['Product']['image'] = $file['name'];
	            }
	        }
			if($this->Product->save($this->data)) {
				$this->Session->setFlash('Your product has been updated successfully');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	function delete($id) {
		if($this->Product->delete($id)) {
			$this->Session->setFlash('The Product with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}

}
?>