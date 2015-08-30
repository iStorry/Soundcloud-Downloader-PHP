<?php
   class HTML {
	     const VERSION = '1.0.1';
	     public $index_html = '/include/theme/index.html';
		 public function index(){
				$dir = dirname(__FILE__);
				$array = explode('/',$dir);
				$count = count($array);
			    include($_SERVER['DOCUMENT_ROOT'] . "/" . $array[$count-3] . "/" .$this->index_html);
		 }
   }
?>
