<?php 

$api_key = "e8ac7c91ab822cec84c096c2f38d0636c49fa9fe";

$url = 'http://comicvine.gamespot.com/api/movie/4025-2297/?api_key=e8ac7c91ab822cec84c096c2f38d0636c49fa9fe&format=json&field_list=characters';

$path = './cache/01/' . md5($url) . '.txt' ;

if(file_exists($path) && time() - filemtime($path) < 3600)
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

?>
<h1>Characters list from Infinity War</h1>
<?php 
    foreach($data->results->characters as $_result): 
    $id = $_result->id;
    // //call to the api for the character information
    
    $url2 = 'https://comicvine.gamespot.com/api/character/4005-'.$id.'/?api_key='.$api_key.'&format=json&field_list=deck';
    
    sleep(0.2);


    if (!file_exists('./cache/02/'.$id.'/')) {
        mkdir('./cache/02/'.$id.'/', 0777, true);
    }
    $path2 = './cache/02/'.$id.'/' . md5($url) . '.txt' ;

    if(file_exists($path2) && time() - filemtime($path2) < 3600)
    {
        $data2 = file_get_contents($path2);
    }
    else
    {
        $curl2 = curl_init($url2);
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl2, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        $data2 = curl_exec($curl2);
        $data2 = json_decode($data2);
        file_put_contents($path2, json_encode($data2));

    }
    $data2 = json_decode($data2);
?>
<h2><?= $_result->name ?></h2>
<p>
    <?= $data2->results->deck ?>
</p>
<?php endforeach; ?>