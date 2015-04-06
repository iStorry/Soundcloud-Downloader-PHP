<?php
set_time_limit(0);
    require_once dirname(__FILE__) . "/functions/class.function.api.php";
    require_once dirname(__FILE__) . "/functions/class.function.html.php";
class Web_Api extends HTML {
	     private $Api;
	     public function __construct(){
		      $this->Api = new Api;
	     } public function __call($method, $args){
	          $this->Api->$method($args[0]);
	     }
}
$web = new Web_Api;
if(isset($_POST["q"])){
		print_r($web->trackid($_POST["q"]));
}