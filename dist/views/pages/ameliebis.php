<?php 

$api_key = "e8ac7c91ab822cec84c096c2f38d0636c49fa9fe";
$url = 'http://comicvine.gamespot.com/api/movie/4025-2297/?api_key=e8ac7c91ab822cec84c096c2f38d0636c49fa9fe&format=json&field_list=characters';
$path = './cache/01/' . md5($url) . '.txt' ;

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

    // create the big array of friendship
    $friends=array();

    // create character array and push the id into it
    $characters=array();
    foreach($data->results->characters as $_result){
        array_push( $characters, $_result->id );
    } 

    // foreach
    foreach($data->results->characters as $_result): 
    $id = $_result->id;  
    // get informations  
    $url2 = 'https://comicvine.gamespot.com/api/character/4005-'.$id.'/?api_key='.$api_key.'&format=json&field_list=character_friends';
    sleep(0.2);
    if (!file_exists('./cache/03/'.$id.'/')) {
        mkdir('./cache/03/'.$id.'/', 0777, true);
    }
    $path2 = './cache/03/'.$id.'/' . md5($url) . '.txt' ;
    if(file_exists($path2) && time() - filemtime($path2) < 43200)
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

    // create array of friends(inside the loop) and add it into the big array
    ${"friendsOf".$id} = array();

?>
<h2><?= $_result->name ?></h2>
<p>
    <?php 
        foreach($data2->results->character_friends as $_result):  
        // push the id of the friend inside the array if this id is inside the array characters
        foreach($characters as $_character) {
            if($_result->id == $_character) {
                array_push( ${"friendsOf".$id}, $_result->id );
            }
        }
        
        
    ?>
        <!-- <p><?= $_result->id ?>  <?= $_result->name ?></p> -->
    <?php 
        endforeach; 
        // add the array of friends in the big array of friendship
        $friends[$id] = ${"friendsOf".$id} ;
    ?>
</p>
<?php endforeach; 

// $arrlength=count($friends);
// for($i=0;$i<$arrlength;$i++)
//     {
    echo "<pre>";
    print_r($friends);
    echo "</pre>";
// }

?>
