<?php
   class HTML {
	     const VERSION = '1.0.1';
         public $index_html = "/theme/index.html";
		 public function index(){
			    include($this->index_html);
		 }
   }
?>
		