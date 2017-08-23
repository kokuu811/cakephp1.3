<?php
    class ValidsController extends AppController {
        var $name = "Valids";
        var $helpers = array ('Html','Form');
        var $components = array('Session'); // Use Flash messenger of Session component

        function demo01() {
	        $this->Valid->set($this->data);
	        if($this->Valid->valid_01()==TRUE){
	        $this->Session->setFlash("Data is avaliable !");
	        }else{
	        $this->Session->setFlash("Data is not avaliable !");
	    	}
	    } 
    }
?>