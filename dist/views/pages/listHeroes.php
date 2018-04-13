<section class="heroesContainer">
    <div class="tab col-sm-8 col-sm-offset-1 col-xs-12  ">
    <h1>Heroes List <div class="grdUnder"></div></h1>
    <table>
            <tr class="on">
                <th>
                    <a href="heroes/id">
                        <div class="heroesPicturesOpacity"></div>
                    </a>
                </th>
                <th class="thTitle"></th>
                <th></th>
                <th></th>
                <th class="name1"></th>
                <th class="spent1"></th>
            </tr>
            <tr class="under">
                <th class='thImage'>
                    <a href="/marvel/heroes/3324">
                        <div class="heroesPictures"></div>
                    </a>
                    
                </th>
                <th class="thTitle">Captain américa</th>
                
            </tr>
        <?php
        
        include 'views/actions/allHerosApi.php';
        
        for($i=1;$i<36;$i++){
            switch ($i){
                case 1:
                $imgId=1455;
                $nameHero="Iron Man";
                break;
                case 2:
                $imgId=7607;
                $nameHero="Thanos";
                break;
                case 3:
                $imgId=2268;
                $nameHero="Thor";
                break;
                case 4:
                $imgId=1443;
                $nameHero="Spider Man";
                break;
                case 5:
                $imgId=1451;
                $nameHero="Falcon";
                break;
                case 6:
                $imgId=1456;
                $nameHero="Dr. Strange";
                break;
                case 7:
                $imgId=1466;
                $nameHero="Scarlet Witch";
                break;
                case 8:
                $imgId=1475;
                $nameHero="Hawkeye";
                break;
                case 9:
                $imgId=1477;
                $nameHero="Black Panther";
                break;
                case 10:
                $imgId=1504;
                $nameHero="Vision";
                break;
                case 11:
                $imgId=1926;
                $nameHero="War Machine";
                break;
                case 12:
                $imgId=3200;
                $nameHero="Black Widow";
                break;
                case 13:
                $imgId=3324;
                $nameHero="Mantis";
                break;
                case 14:
                $imgId=3801;
                $nameHero="Man Ape";
                break;
                case 15:
                $imgId=4262;
                $nameHero="Happy Hogan";
                break;
                case 16:
                $imgId=4263;
                $nameHero="Pepper Potts";
                break;
                case 17:
                $imgId=4324;
                $nameHero="Loki";
                break;
                case 18:
                $imgId=6806;
                $nameHero="Gamora";
                break;
                case 19:
                $imgId=6807;
                $nameHero="Drax";
                break;
                case 20:
                $imgId=6809;
                $nameHero="Valkyrie";
                break;
                case 21:
                $imgId=10957;
                $nameHero="Starlord";
                break;
                case 22:
                $imgId=13987;
                $nameHero="Collector";
                break;
                case 23:
                $imgId=14558;
                $nameHero="Nebula";
                break;
                case 24:
                $imgId=19918;
                $nameHero="Okoye";
                break;
                case 25:
                $imgId=20577;
                $nameHero="Antman";
                break;
                case 26:
                $imgId=24341;
                $nameHero="Groot";
                break;
                case 27:
                $imgId=32814;
                $nameHero="Rocket Racoon";
                break;
                case 28:
                $imgId=40470;
                $nameHero="Barry Barns";
                break;
                case 29:
                $imgId=58997;
                $nameHero="Shuri";
                break;
                case 30:
                $imgId=88884;
                $nameHero="Devilmman";
                break;
                case 31:
                $imgId=90284;
                $nameHero="Blackdraw";
                break;
                case 32:
                $imgId=90606;
                $nameHero="Ebony Maw";
                break;
                case 33:
                $imgId=117767;
                $nameHero="Laura";
                break;
                

            }
            ChromePhp::log($i);
            ChromePhp::log($imgId);
            ?>        
                <tr class="on">
                <th>
                    <a href="heroes/id">
                        <div class="heroesPicturesOpacity"></div>
                    </a>
                </th>
                <th class="thTitle"></th>
                <th></th>
                <th></th>
                <th class="name1"></th>
                <th class="spent1"></th>
            </tr>
            <tr class="under">
                <th class='thImage'>
                    <a href="/marvel/heroes/3324">
                        <div class="heroesPictures"></div>
                    </a>
                    
                </th>
                <th class="thTitle">Iron Man</th>
                
            </tr>
            
        <?php
            }
        ?>
        </table>
        
        
    </div>
    <div class="col-sm-3 filterPanel">
        <img src="assets/img/avengersMarvel.png" alt="Avengers">
        <div class="filterBack">
            <div class="filterContent">
                
                <h5>Filters:</h5>
                <span><div class="filterCircle"></div> Name</span>
                <span><div class="filterCircle"></div> Faction</span>
                <span><div class="filterCircle"></div> First appearance</span>
                
            </div>
            
        </div>
    </div>
</section>
