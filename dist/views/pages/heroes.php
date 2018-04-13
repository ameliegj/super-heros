<?php
$id_hero = "7607" ;

$url3 = 'http://comicvine.gamespot.com/api/character/4005-'.$id_hero.'/?api_key=e8ac7c91ab822cec84c096c2f38d0636c49fa9fe&field_list=name,aliases,deck,real_name,origin,creators,powers,first_appeared_in_issue,character_friends,character_enemies&format=json';
    $path3 = './cache/04/' . md5($url3) . '.txt' ;
    if(file_exists($path3) && time() - filemtime($path3) < 43200)
    {
        $data3 = file_get_contents($path3);
        $data3 = json_decode($data3);
    }
    else
    {
        $curl3 = curl_init($url3);
        curl_setopt($curl3, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl3, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl3, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        $data3 = curl_exec($curl3);
        $data3 = json_decode($data3);
        file_put_contents($path3, json_encode($data3));
    }

$infos_hero = $data3->results;



// handle aliases list
$aliases_array = $infos_hero->aliases;
$aliases = explode("
", $aliases_array);

// first appearence in comics
$first_comics_id = $infos_hero->first_appeared_in_issue->id;
$url4 = "https://comicvine.gamespot.com/api/issue/4000-".$first_comics_id."/?api_key=e8ac7c91ab822cec84c096c2f38d0636c49fa9fe&format=json&field_list=name,cover_date,image";
    $path4 = './cache/05/' . md5($url4) . '.txt' ;
    if(file_exists($path4) && time() - filemtime($path4) < 43200)
    {
        $data4 = file_get_contents($path4);
        $data4 = json_decode($data4);
    }
    else
    {
        $curl4 = curl_init($url4);
        curl_setopt($curl4, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl4, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl4, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        $data4 = curl_exec($curl4);
        $data4 = json_decode($data4);
        file_put_contents($path4, json_encode($data4));
    }
$first_comic_data = $data4->results;

// friends and ennemies
$all_friends = $infos_hero->character_friends;
$all_enemies = $infos_hero->character_enemies;
$friends_keys = array_rand($all_friends, 4);
$enemies_keys = array_rand($all_enemies, 4);
function getImage($id)
{
    $url_temp = 'https://comicvine.gamespot.com/api/character/4005-'.$id.'/?api_key=e8ac7c91ab822cec84c096c2f38d0636c49fa9fe&field_list=image&format=json';
    $curl_temp = curl_init($url_temp);
    curl_setopt($curl_temp, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_temp, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl_temp, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    $data_temp = curl_exec($curl_temp);
    $data_temp = json_decode($data_temp);
    $link = $data_temp->results->image->original_url;
    return $link;
}

echo '<pre>';
print_r($friends_keys[0]);
echo '</pre>';

?>

<section class="heroesContainer container-fluid">
    
    <div class="nameBar"></div>
    <article class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <h1 class="heroName col-lg-7 "><?=$infos_hero->name?></h1> 
        </div>
        <div class="row">
            <h3 class="heroUnderName col-lg-5 "><?=$aliases[0]?></h3>
        </div>
        <div class="infoContainer">
            <div class="pictureContainer">
                <div class="animRound">
                    <div class="circle1 circle"></div>
                    <div class="circle2 circle"></div>
                </div>
                <div class="heroPictures col-lg-3 "><img src="" alt=""></div>
            </div>
            
            <div class="col-lg-offset-1 col-lg-8">
                <div class="descriBack">
                    <h4 class="description col-lg-7">DESCRIPTION</h4>
                    <p class="descriptonText col-lg-10"><?=$infos_hero->deck?></p>
                </div>
                <div class="caracBack">
                    <div class="carac"><span class="titleCarac col-sm-2">Race :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac"><?=$infos_hero->origin->name?></div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Origin :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">/</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Real name :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac"><?=$infos_hero->real_name?></div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Team :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">/</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Creators :</span> 
                    
                    
                        <div class="col-sm-6 col-sm-offset-1 contentCarac"><?php foreach ($infos_hero->creators as $_creator): ?><?= $_creator->name ?> <?php endforeach; ?></div>
                
                    
                    </div>
                    <div class="carac">
                        <span class="titleCarac col-sm-2">Powers :</span> 
                        <div class="col-sm-8 col-sm-offset-1 contentCarac powers">
                            <?php foreach ($infos_hero->powers as $_power): ?>
                                <div class="power">
                                    <?= $_power->name ?>
                                </div>
                            <?php endforeach; ?> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="appearanceBack">
                    <h4 class="col-lg-7">FIRST APPEARANCE</h4>
                    <div class="timelineContainer">
                        <div class="comicAppear col-sm-3 appearLegend">
                            <span>(COMICS)</span>
                            <h5><?=$first_comic_data->name?></h5>
                            <div class="triangleTimeline"></div>
                            
                        </div>
                        <div class="appearLegend col-sm-3 movieAppear">
                            <span>(MOVIE)</span>
                            <h5>Thor</h5>
                            <div class="triangleTimeline"></div>
                            
                        </div>
                        <div class="arrowContainer">
                            <div class="arrowBar"></div>
                            
                        </div>
                        <div class="dateContainer">
                            <div class="appearLegend comicAppear dateAppear">
                                <?php 
                                    $array_date = $first_comic_data ->cover_date;
                                    $year_comic = explode("-", $array_date);
                                    echo $year_comic[0];
                                ?>
                            </div>
                            <div class="appearLegend movieAppear dateAppear dateL">2011</div>
                        </div>
                        <div class="posterContainer col-sm-12">
                            <div class="posterCard cardRight">
                                <img src="<?=$first_comic_data->image->original_url?>" alt="marvelFilm">
                            </div>
                            <div class="posterCard cardLeft">
                                <img src="" alt="marvelFilm">
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="totalBack">
                    <h4>Total number of appearances</h4>
                    <div class="ratingContainer">         
                        <div class="rating ">
                            <div class="">Comics</div>
                            <div class="lacet col-lg-offset-2"></div>
                            <div class="bubble col-lg-offset-8">
                                <div>10</div>
                            </div>
                        </div>

                        <div class="rating r2 ">
                            <div class="">Movie</div>
                            <div class="lacet l2 col-lg-offset-2"></div>
                            <div class="bubble b2 col-lg-offset-8">
                                <div>10</div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
        <div class="relationBack">
        <h4 class="col-lg-7">RELATIONS</h4>
                    <div class="diagramContainer">
                        <div class="alliesPortraitContainer">
                            <h5>Friends</h5>
                            <div class="alliesPortrait1 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_friends[$friends_keys[0]]->id);
                            ?>);background-size:cover"></div>
                            <div class="alliesPortrait2 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_friends[$friends_keys[1]]->id);
                            ?>);background-size:cover"></div>
                            <div class="alliesPortrait3 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_friends[$friends_keys[2]]->id);
                            ?>);background-size:cover"></div>
                            <div class="alliesPortrait4 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_friends[$friends_keys[3]]->id);
                            ?>);background-size:cover"></div>
                        </div>
                        <div class="mainPortraitContainer">
                            <div class="mainPortrait portrait">
                            </div>
                        </div>
                        <div class="vilainsPortraitContainer">
                            <h5>Ennemies</h5>
                            <div class="vilainsPortrait1 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_enemies[$enemies_keys[0]]->id);
                            ?>);background-size:cover"></div>
                            <div class="vilainsPortrait2 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_enemies[$enemies_keys[1]]->id);
                            ?>);background-size:cover"></div>
                            <div class="vilainsPortrait3 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_enemies[$enemies_keys[2]]->id);
                            ?>);background-size:cover"></div>
                            <div class="vilainsPortrait4 sidePortrait portrait" style="background:url(<?php
                                echo getImage($all_enemies[$enemies_keys[3]]->id);
                            ?>);background-size:cover"></div>
                        </div>
                    </div>
        </div>
        <!-- <div class="backPhotoContainer"></div> -->

    </article>



</section>
<section class="loaderContainer">
    <div class="loaderZone">
        <img class="roll" src="assets/img/loader.png" alt="loader">
        <img class="avg" src="assets/img/avengersLogo.png" alt="loader">
    </div>

</section>

<?
    
    if (strpos($q, 'heroes/') !== false) {

        echo '<script src="../../assets/js/main.min.js"> </script>';
    }
    else{
        echo '<script src="assets/js/main.min.js"> </script>';
    }
?>
<script>
    heroesAnimation()
</script>