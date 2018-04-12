<section class="heroesContainer container-fluid">
    
    <div class="backgroundContainer">
        <div class="background background1">
            <img src="../../assets/img/Gant.png" alt="Thanos">
        </div>
    </div>
    <div class="nameBar"></div>
    <article class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <h1 class="heroName col-lg-7 ">Thor Odinson </h1> 
        </div>
        <div class="row">
            <h3 class="heroUnderName col-lg-5 ">Lord of Thunder</h3>
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
                    <p class="descriptonText col-lg-6">is a fictional superhero appearing in American comic books published by Marvel Comics. The character, based on the Norse deity of the same name, is the Asgardian god of thunder and possesses the enchanted hammer Mjolnir, which grants him the ability to fly and manipulate weather amongst his other superhuman attributes.</p>
                </div>
                <div class="caracBack">
                    <div class="carac"><span class="titleCarac col-sm-2">Race :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">GOD</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Origin :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">Azgard</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Alter ego :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">/</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Team :</span> <div class="col-sm-4 col-sm-offset-1 contentCarac">Avengers</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Creators :</span> <div class="col-sm-6 col-sm-offset-1 contentCarac">Stan Lee, Jack Kirby, Larry Lieber</div></div>
                    <div class="carac"><span class="titleCarac col-sm-2">Powers :</span> <div class="col-sm-6 col-sm-offset-1 contentCarac"> </div></div>
                    
                </div>
                
                <div class="appearanceBack">
                    <h4 class="col-lg-7">FIRST APPEARANCE</h4>
                    <div class="timelineContainer">
                        <div class="comicAppear col-sm-2 appearLegend">
                            <span>(COMICS)</span>
                            <h5>Journey into mistery</h5>
                            <div class="triangleTimeline"></div>
                            
                        </div>
                        <div class="appearLegend col-sm-2 movieAppear">
                            <span>(MOVIE)</span>
                            <h5>Thor</h5>
                            <div class="triangleTimeline"></div>
                            
                        </div>
                        <div class="arrowContainer">
                            <div class="arrowBar"></div>
                            
                        </div>
                        <div class="dateContainer">
                            <div class="appearLegend comicAppear dateAppear">1962</div>
                            <div class="appearLegend movieAppear dateAppear dateL">2011</div>
                        </div>
                        <div class="posterContainer col-sm-12">
                            <div class="posterCard cardRight">
                                <img src="" alt="marvelFilm">
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
                    <div class="diagramContainer">
                        <div class="alliesPortraitContainer">
                            <h5>Friends</h5>
                            <div class="alliesPortrait1 sidePortrait portrait"></div>
                            <div class="alliesPortrait2 sidePortrait portrait"></div>
                            <div class="alliesPortrait3 sidePortrait portrait"></div>
                            <div class="alliesPortrait4 sidePortrait portrait"></div>
                        </div>
                        <div class="mainPortraitContainer">
                            <div class="mainPortrait portrait">
                            </div>
                        </div>
                        <div class="vilainsPortraitContainer">
                            <h5>Ennemies</h5>
                            <div class="vilainsPortrait1 sidePortrait portrait"></div>
                            <div class="vilainsPortrait2 sidePortrait portrait"></div>
                            <div class="vilainsPortrait3 sidePortrait portrait"></div>
                            <div class="vilainsPortrait4 sidePortrait portrait"></div>
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