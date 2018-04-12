<?php
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

?>

    <section class="homeContainer">
        <div class="landingContainer">
            <div class="introLaunding">
                <h1>Marvel Infinity War</h1>
                <h2>The theory of everything</h2>
            </div>
            <div class="discoverLaunding">
                <span>DISCOVER</span>
                <i class="fa fa-chevron-down"></i>
            </div>

        </div>

    </div>

        <div class="gauntletContainer">
            <div class="gauntletIntro">
                <h2>Will you be ready for the fight ?</h2>
                <p>Iron Man, Thor, the Hulk and the rest of the Avengers unite to battle their most powerful enemy yet -- the
                    evil Thanos. On a mission to collect all six Infinity Stones, Thanos plans to use the artifacts to inflict
                    his twisted will on reality. The fate of the planet and existence itself has never been more uncertain
                    as everything the Avengers have fought for has led up to this moment.</p>
            </div>
        </div>
        <div class="wheelContainer">
            <div class="midWheel col-md-12">
                <div class="animcard2">
                    <div class="animToreBar">
                        <?php
                        for($i=1;$i<=74;$i++){
                        ?>
                            <div class="contBar<?=$i?> contBar">
                                <div class="bar bar<?=$i?>"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <!-- RELATIONSHIP GRAPH -->
        <div class="relationContainer container">
        <?php include 'views/actions/relationshipGraph.php'; ?>

            <div class="row">
                <h1>TAKE A LOOK AT THOSE RELATIONS</h1>
            </div>
            <div class="row">
                <div class="relationshipGraph col-sm-10 col-md-8">
                    <div>
                        <?php 
                            $i =0;
                            foreach($data->results->characters as $_result): 
                        ?>
                                <div class="item item<?=$i?>">
                                    <div class="name name<?=$i?> id<?=$_result->id?>">
                                        <?= $_result->name ?>
                                    </div>
                                </div>
                        <?php 
                            $i++; 
                            endforeach; 
                        ?> 
                    </div>
                    <!-- CURVES -->
                    <svg width="320" height="320" 
                        style="
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            z-index: -100;
                            transform: translateX(-50%) translateY(-50%);">
                        <!-- <path d="M x1 y1 Q cx cy x2 y2"/> -->
                        <!-- FOREACH for the dots -->
                        <?php $i=0; 
                        foreach($friends as $_currentCharacId => $_currentFriendsArray):
                            $currentCoords = $arrayCoords[$_currentCharacId]; 
                        ?>
                            <!-- little dot : -->
                            <circle cx="<?= $currentCoords['x'] ?>" cy="<?= $currentCoords['y'] ?>" r="0" style="fill:white" class="dot dot<?=$i?> <?=$_currentCharacId?>"/>

                            <!-- FOREACH for the curves -->
                            <?php foreach($_currentFriendsArray as $_currentFriendId): //going through the friends arrays of this characters
                                $currentFriendCoords = $arrayCoords[$_currentFriendId];
                            ?>
                                    <path d="M <?= $currentCoords['x'] ?> <?= $currentCoords['y'] ?> Q 150 150 <?=$currentFriendCoords['x']?> <?=$currentFriendCoords['y']?>" stroke="white" fill="none" class="curve curve<?=$i?>" data-id="id<?=$_currentFriendId?>"/>
                            <?php endforeach;?>
                        <?php $i++; endforeach; ?>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="ratingContainer">
        <h1 class="col-lg-offset-2">MOVIE RATING</h1>
        <h2 class="col-lg-offset-1">Phase 1</h2>

        <div class="rating col-lg-offset-2">
            <div class="col-lg-offset-1">Iron Man</div>
            <div class="lacet col-lg-offset-2"></div>
            <div class="bubble col-lg-offset-8"></div>

        </div>
        
        
    </div>
</section>
    
<script src="assets/js/main.min.js"> </script>
<script>
    homeAnimation()
</script>

        <div class="rating col-lg-offset-2">
            <div class="col-lg-offset-1">The terrible Hulk</div>
            <div class="lacet col-lg-offset-2"></div>
            <div class="bubbleGreen col-lg-offset-8"></div>

        </div>
        <div class="rating col-lg-offset-2">
            <div class="col-lg-offset-1">Iron Man 2</div>
            <div class="lacet col-lg-offset-2"></div>
            <div class="bubble col-lg-offset-8"></div>

        </div>
        <div class="rating col-lg-offset-2">
            <div class="col-lg-offset-1">Thor</div>
            <div class="lacet col-lg-offset-2"></div>
            <div class="bubble col-lg-offset-8"></div>

        </div>
        <div class="rating col-lg-offset-2">
            <div class="col-lg-offset-1">Captain america: The first Avengers</div>
            <div class="lacetBlue col-lg-offset-2"></div>
            <div class="bubbleBlue col-lg-offset-8"></div>

        </div>






    </div>
</section>

    </section>

    <?php

                    
    ?>
