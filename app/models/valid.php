<?php
	class Valid extends AppModel { 
		var $useTable = false; // không sử dụng table valid ðồng nghĩa là không sử dụng database
		var $validate = array(); // name space mặc ðịnh khi sử dụng datavalidation

		function valid_01(){
	        $this->validate = array(
	                                    "title" => array(
	                                                            "rule" => "notEmpty",
	                                                            "message" => "Please enter title !",
	                                                        ),
	                                    "info" => array(
	                                                            "rule" => "notEmpty", // tập luật là không rỗng
	                                                            "message" => "Please enter info !", // thông báo khi có lỗi
	                                                        )
	                                ); 
	       if($this->validates($this->validate)) // nếu dữ liệu đã được validate (hợp lệ)
	        return TRUE; 
	       else 
	        return FALSE;
	    }
	}
?>