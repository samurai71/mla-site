<?php 
    $pageTitle = "Portfolio";
    include "includes/header.php";
 ?>
<div class="grid-x grid-margin-x content-wrap">
        <div class="large-12 cell">
          <h2>Portfolio</h2>
          <section class="filter-simple">
            <h2 class="hidden">Gallery</h2>
            <div class="button-group round">
              <button class="button hollow filter-simple-button is-active" data-filter="all">All</button>
              <button class="button hollow filter-simple-button" data-filter="web">Web</button>
              <!-- <button class="button hollow filter-simple-button" data-filter="design">Design</button> -->
              <button class="button hollow filter-simple-button" data-filter="illustration">Illustration</button>
              <button class="button hollow filter-simple-button" data-filter="photoshop">Photoshop</button>
            </div>
    
            <div class="grid-x grid-padding-x small-up-2 medium-up-3 large-up-4">
            <div class="cell column column-block filter-simple-item web">
              <a href="landtech.php"><img src="img/thumbs/LCC_thumb.png" alt="Landtech Computer Consulting" /></a>
            </div>
              
              <div class="cell column column-block filter-simple-item web">
                <a href="lcc.php"><img src="img/thumbs/LCC1_thumb.png" alt="Landtech Computer Consutling WordPress" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item web">
                <a href="ewn.php"><img src="img/thumbs/Energyworksnaturally_thumb.png" alt="Energy Works Naturally WordPress" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item web">
                <a href="gdr.php"><img src="img/thumbs/GDR_thumb.png" alt="Golf Destination Review" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item web">
                <a href="thg.php"><img src="img/thumbs/THG_thumb.png" alt="The Hair Garage WordPress" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item illustration">
                <a href="clayandgemma.php"><img src="img/thumbs/Clay_and_Gemma_thumb.png" alt="Clay and Gemma Digital Painting" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item illustration">
                <a href="jimmorrison.php"><img src="img/thumbs/Jim_Morrison_1968-painting_thumb.png" alt="Young Jim Morrison Digial Painting" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item illustration">
                <a href="yoda.php"><img src="img/thumbs/yoda_thumb.jpg" alt="Master Yoda Digital Painting" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item photoshop">
                <a href="ketchup.php"><img src="img/thumbs/ketchupbottle_thumb.jpg" alt="Ketchup Bottle in Photoshop" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item photoshop">
                <a href="jukebox.php"><img src="img/thumbs/jukebox_thumb.jpg" alt="Jukebox in Photoshop" /></a>
              </div>
    
              <div class="cell column column-block filter-simple-item web">
               <a href="ldao.php"> <img src="img/thumbs/LDALC_thumb.png" alt="Learning Disabilities Assoc of Lambton County" /></a>
              </div>
    
              <!-- <div class="cell column column-block filter-simple-item design">
                <img src="https://placeimg.com/350/350/design" alt="" />
              </div>
    
              <div class="cell column column-block filter-simple-item design">
                <img src="https://placeimg.com/350/350/design" alt="" />
              </div>
    
              <div class="cell column column-block filter-simple-item design">
                <img src="https://placeimg.com/350/350/design" alt="" />
              </div>
    
              <div class="cell column column-block filter-simple-item design">
                <img src="https://placeimg.com/350/350/design" alt="" />
              </div>
    
              <div class="cell column column-block filter-simple-item design">
                <img src="https://placeimg.com/350/350/design" alt="" />
              </div>
     -->
            </div>
          </section>
    
    
    
    
    
        </div>
        
      </div>
           <?php 
             include "includes/socialmedia.php";
             include "includes/footer.php";
      ?>