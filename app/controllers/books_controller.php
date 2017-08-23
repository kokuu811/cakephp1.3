<?php
    class BooksController extends  AppController{
        var $name = "Books";// ten cua Controller Book
        var $layout = 'register';
        var $helpers = array('Paginator','Html');
        var $components = array('Session');
        var $paginate = array();
     
        function paging(){
            $this->paginate = array(
                                    'limit' => 4,
                                    'order' => array('title' => 'desc'),
                                 );
            $data = $this->paginate("Book");
            $this->set("data",$data);
        }
    }
?>