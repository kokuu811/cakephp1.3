<?php
// App::import('AppModel', 'Model');
// App::import('model/datasources','CakeSession');
class Cart extends AppModel {
    var $name = 'Cart';
    var $components = array('Session');

    public $useTable = false;
     
    // public function getCount() {
    //     // $CakeSession = new CakeSession;
    //     $allProducts = $this->Session->read('cart');
        
    //     if (count($allProducts)<1) {
    //         return 0;
    //     }
        
    //     $count = 0;
    //     foreach ($allProducts as $product) {
    //         $count=$count+$product;
    //     }
        
    //     return $count;
    // }   

    // public function saveProduct($data) {
    //     return Session::write('cart',$data);
    // }

    // /*
    //  * read cart data from session
    //  */
    // public function readProduct() {
    //     return Session::read('cart');
    // }
}
?>