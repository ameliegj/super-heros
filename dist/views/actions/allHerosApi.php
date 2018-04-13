<?php
$api_key_lucas = '8c4c39d1e352f0af0fbe809a3d3deefc2a74852a';
$urlL = 'http://comicvine.gamespot.com/api/movie/4025-2297/?api_key=8c4c39d1e352f0af0fbe809a3d3deefc2a74852a&field_list=name&format=json';
$curl = curl_init($urlL);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$dataL = curl_exec($curl);
$dataL = json_decode($dataL);


