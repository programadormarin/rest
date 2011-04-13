<?php
$handler = curl_init();
//curl_setopt($handler, CURLOPT_URL, "http://api.flickr.com/services/feeds/photos_public.gne?tags=cobucci&tagmode=any&format=json");
curl_setopt($handler, CURLOPT_URL, "http://localhost/rest/public/truerest/users/");
curl_setopt($handler, CURLOPT_HEADER, false);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handler, CURLOPT_TIMEOUT, 10);
//curl_setopt($handler, CURLOPT_POST, true);
//curl_setopt($handler, CURLOPT_POSTFIELDS, array('nome' => 'Testando da silva'));
$output = curl_exec($handler);

//$flikr = json_decode(str_replace("jsonFlickrFeed(",'', substr($output, 0, -1)));

//var_dump($flikr);

var_dump($output);

//foreach ($flikr as $obj) {
//	var_dump($obj);
//	echo '<img src="'. $obj->media()->m . '"/>';
//}

?>