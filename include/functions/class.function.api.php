<?php
   class Api {
	     const VERSION = '1.0.1';
		 protected $client_id = "b45b1aa10f1ac2941910a7f0d10f8e28";
		 protected $app_version = "028dc17";
		 
         public static $domain = array(
         'api'         => 'https://api.soundcloud.com/',
         'www'         => 'https://soundcloud.com/',
		 'preview'	   => 'https://ec-preview-media.sndcdn.com/',
		 'sndcdn'	   => 'https://cf-media.sndcdn.com/');
		 protected function makeurl($name, $path='', $params=array()) {
			       $url = self::$domain[$name];
				   	if($path) {
					   if($path[0] === '/') {
						   $path = substr($path, 1);
						   } $url .= $path; }
						   if ($params) {
                   $url .= '?' . http_build_query($params, null, '&');
                   } return $url;
		 }
		 public function trackid($url){
			 $file = @file_get_contents($this->makeurl('api', 'resolve.json', array('url' => $url, 'client_id' => $this->client_id)));
			 preg_match('/"id":(.*?)\,/', $file, $mfc);
		     return $this->callapi($mfc[1]);
		 }
		 public function callapi($track_id){
			 $file = @file_get_contents($this->makeurl('api', 'i1/tracks/'.$track_id.'/streams', array('client_id' => $this->client_id, 'app_version' => $this->app_version)));	
			 $a = json_decode($file);
			 print('<a href='.$a->http_mp3_128_url.'> Download </a>');
		 }
   }
?>
		