<?php 
    $pageTitle = "About";
  include "includes/header.php";
   // include "includes/nav.php";
 ?>

   <section class="bluebackground">
      <div class="grid-x grid-margin-x content-wrap">
        <div class="large-12 cell">
          <h2>About</h2>
          <img src="img/marklanderyou.png" alt="Mark Landeryou Photo" title="Mark Landeryou" class="float-left photo">
          <h4>I'm Mark Landeryou, and I'm an Digital Artisan.</h4>
    
          <p>Specializing in<span class="bold"> Web design and development</span>, graphic design, digital illustration and painting, Photoshop work. <br>Mark Landeryou is an Artisan from <span class="bold">London, Ontario Canada, as well as Sarnia-Lambton Area</span>. He brings a lot of different experiences to his craft, he utilizes many different mediums for his creations. Mark is also an experienced web developer. So if you need a design or web site created he is your man.</p>
    
          <p>The reason for the three coloured circles in the logo is to symbolize: Mind, body and Spirit. The significance of the three colours used is we as humans see in red, blue and green. Mark Landeryou tries to incorporate Mind, body and Spirit into his creations whether it be a web design or digital painting or illustration.</p>
    
          <p>To see <a href="resume/index.html" target="_blank">Mark Landeryou's Resume</a>.</p>
    
    
        </div>
        
      </div>
    </section>
    
      <section class="content-wrap">
      <h2 class="hidden">Video</h2>
      <div class="responsive-embed widescreen">
      <video poster="img/demoreel.png" controls>
        <source src="videos/DemoReel.mp4" type="video/mp4">
        <source src="videos/DemoReel.oggtheora.ogv" type="video/ogv">
        <source src="videos/DemoReel.webmhd.webm" type="video/webm">
      </video>
    </div>
    </section>
    
      <div class="grid-x grid-margin-x content-wrap">
      <div class="large-6 cell">
      <h2>Recent Work</h2></div>
      <div class="large-offset-3 large-6 cell">
      <div class="orbit" role="region" aria-label="Some Work Completed" data-orbit>
        <div class="orbit-wrapper">
          <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
          </div>
          <ul class="orbit-container">
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="img/thumbs/yoda_thumb.jpg" alt="Yoda">
                <figcaption class="orbit-caption">Master Yoda Digital Painting.</figcaption>
              </figure>
            </li>
            <li class="orbit-slide">
              <figure class="orbit-figure">
                <img class="orbit-image" src="img/thumbs/Prince_thumb.jpg" alt="Prince">
                <figcaption class="orbit-caption">Digital Painting of Prince.</figcaption>
              </figure>
            </li>
          </ul>
        </div>
        <nav class="orbit-bullets">
          <h2 class="hide">Slider navigation</h2>
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        </nav>
      </div>
      </div>
    
      
      </div>
      <section class="grid-x grid-margin-x content-wrap">
      <div class="large-12 cell">
        <h2>Coming Soon</h2>
          <p>At <span class="bold">Mark Landeryou Artisian</span> we will soon be offering <span class="bold">limited edition</span> prints of the art created for sale. Once they are sold no more will be sold.</p>
      </div>
      </section>
   <?php
   include "includes/socialmedia.php";
   include "includes/footer.php";
   ?>
      
    
    
    
    
    