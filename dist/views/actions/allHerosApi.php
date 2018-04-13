<?php
$api_key_lucas = '8c4c39d1e352f0af0fbe809a3d3deefc2a74852a';
$url = 'http://comicvine.gamespot.com/api/movie/4025-2297/?api_key=8c4c39d1e352f0af0fbe809a3d3deefc2a74852a&field_list=characters&format=json';
$path = './cache/06/' . md5($url) . '.txt' ;
    if(file_exists($path) && time() - filemtime($path) < 43200)
    {
        $data = file_get_contents($path);
        $data = json_decode($data);
        
    }
    else
    {
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        $data = curl_exec($curl);
        $data = json_decode($data);
        file_put_contents($path, json_encode($data));
    }
    $charactersArray=array();

    foreach($data->results->characters as $_result)
    {
        array_push( $charactersArray, $_result->id );
    } 

