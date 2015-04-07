<?php
   class HTML {
	     const VERSION = '1.0.1';
         public $index_html = '/soundcloud/include/theme/index.html';
		 public function index(){
			    include($_SERVER['DOCUMENT_ROOT'].$this->index_html);
		 }
   }
?>
