<?php
class CartsController extends AppController {
    var $name = 'Carts';
    var $uses = array('Product','Cart');
    var $components = array('Session', 'ShoppingCart');
    var $layout = '';

    function add($id = null) {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $error = 0;
            foreach ($this->Session->read('Carts') as $a) {
                if($a == $id) $error = 1;
            }
            if($error == true) {
                $this->Session->setFlash('Product has been added to Cart');
            } else {
                $products = (isset($_SESSION['Carts'])) ? $this->Session->read('Carts') : array();
                $products[] = $id;
                $this->Session->write('Carts',$products);
            }
        }
        $this->redirect(array('controller' => 'homes','action' => 'index'));
    }

    function index() {
        if($this->Session->check('Carts')){
            $arrCart = $this->ShoppingCart->getArrCart();
            $carts = $this->Product->find('all', array(
                'conditions'=> array('id' => $arrCart),
                'recursive' => -1
            ));
            $this->set('carts', $carts);
        }else{
            $this->redirect('/');
        }
    }

    function delete($id) {
        if(!empty($id)) {
            $key = array_search($id, $this->Session->read('Carts'));
            $this->Session->delete('Carts.'.$key);
            $this->Session->setFlash('Success');
            $this->redirect(array('action' => 'index'));
        }
    }

    function delAll() {
        $this->Session->delete('Carts');
        $this->redirect(array('controller' => 'homes','action' => 'index'));
    }
}
?>