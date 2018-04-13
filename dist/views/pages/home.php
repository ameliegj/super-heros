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

    <div class="gauntletContainer">
        <div class="gauntletIntro">
            <h2>Will you be ready for the fight ?</h2>
            <p>Iron Man, Thor, the Hulk and the rest of the Avengers unite to battle their most powerful enemy yet -- the evil Thanos. On a mission to collect all six Infinity Stones, Thanos plans to use the artifacts to inflict his twisted will on reality. The fate of the planet and existence itself has never been more uncertain as everything the Avengers have fought for has led up to this moment.</p>
        </div>
    </div>
    <div class="wheelContainer">
        <div class="midWheel col-md-12">
            <div class="factGather">
                <?php

                $req = $pdo->query('SELECT * FROM facts');
                $facts = $req->fetchAll();
                ?>
                <p><?= ChromePhp::log($facts[0]); ?></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
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
                <svg width="320" height="320" style="
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
    <div class="spiderContainer col-sm-offset-1  col-sm-11 ">
        <img class="col-sm-3" src="../../assets/img/Spider.png" alt="spider-man">
        <div class="col-sm-offset-1 col-sm-5">
            <h1>HEY! LIKE WHAT YOU SEE...</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam architecto aliquam alias sapiente dicta voluptatem cupiditate repudiandae blanditiis, delectus quisquam iusto ducimus laboriosam officiis cumque, atque, repellat laudantium. Dignissimos, ullam.</p>
        </div>
        <div class="button col-sm-offset-4 col-sm-10">
            <div> <a href="#">SEE MORE</a></div>
        </div>
    </div>

    <div class="spiderContainer col-sm-offset-1  col-sm-11  ">
        <img class="col-sm-3" src="../../assets/img/MARVEL-LEGENDS-SERIES-INFINITY-GAUNTLET-oop-2.png" alt="spider-man">
        <div class="col-sm-offset-1 col-sm-5">
            <h1>WILL YOU READY FOR THE BIG FIGHT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam architecto aliquam alias sapiente dicta voluptatem cupiditate repudiandae blanditiis, delectus quisquam iusto ducimus laboriosam officiis cumque, atque, repellat laudantium. Dignissimos, ullam.</p>
        </div>
        <div class="button col-sm-offset-4 col-sm-10">
            <div><a href="#">BUY TICKET</a></div>

        </div>

    </div>



</section>

<script src="assets/js/main.min.js">


</script>
<script>
    homeAnimation()

</script>
