<section class="heroesContainer">
    <div class="tab col-sm-8 col-sm-offset-1 col-xs-12  ">
    <h1>Heroes List <div class="grdUnder"></div></h1>
    <table>
        <?php
        include 'views/actions/allHerosApi.php';
        
        for($i=1;$i<37;$i++){
            ?>        
                <tr class="on">
                    <th>
                        <a href="heroes/id">
                            <div class="heroesPicturesOpacity"></div>
                        </a>
                    </th>
                    <th class="thTitle">Drax the Destroyer</th>
                    <th>Thor</th>
                    <th>Thor : Dark worldt</th>
                    <th class="name1">Thor : Ragnarok</th>
                    <th class="spent1">First appearance : 2011</th>
                </tr>
                <tr class="under">
                    <th class='thImage'>
                        <div class="heroesPictures"></div>
                    </th>
                    <th class="thTitle">Lord of thunder</th>
                    
                </tr>
            
        <?php
            }
        ?>
        </table>
        
        
    </div>
    <div class="col-sm-3 filterPanel">
        <img src="../../assets/img/avengersMarvel.png" alt="Avengers">
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
