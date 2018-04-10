<?php

// $url = 'http://gateway.marvel.com/v1/public/comics?ts=1&apikey=4a6a0808c873b76c4d43092a13024f43&hash=875d824fd34e619729bc73ae4cb7c906';
$url = 'http://gateway.marvel.com/v1/public/characters?orderBy=name&limit=100&ts=1&apikey=4a6a0808c873b76c4d43092a13024f43&hash=875d824fd34e619729bc73ae4cb7c906';
// $url = 'https://gateway.marvel.com:443/v1/public/characters?name=hulk&apikey=4a6a0808c873b76c4d43092a13024f43';

$data = file_get_contents($url);
$data = json_decode($data);

// echo('<pre>');
// print_r($data);
// echo('</pre>');

foreach($data->data->results as $_characters):
    echo($_characters->name."<br/>");
endforeach;

// echo('<pre>');
// print_r($data);
// echo('</pre>');
// ?orderBy=name&limit=100