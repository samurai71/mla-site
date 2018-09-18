<?php
    $pageTitle = "Landtech Computer Consulting";
    $pageDesc = "Mark Landeryou Artisan is an web designer/developer, graphic designer and digital artist, based out of Sarnia Ontario serving Sarnia and London areas";
    $pageKeywords = "Mark Landeryou Artisan Sarnia London Canada Graphic Designer Web Designer Web developer Digital Artist";
    include "includes/header.php";
 ?>
 <div class="work-feature-block row">
      <div class="columns medium-5">
        <a class="lightbox" href="#landtech"><img class="work-feature-block-image" src="img/thumbs/LCC_thumb.png" alt="Landtech Computer Consulting" /></a>
      </div>
      <div class="columns medium-7">
        <h2 class="work-feature-block-header">Project Description</h2>
        <p>Landtech Computer Consulting was a computer consulting and web design/development company, based in London Ontario, Canada. The site was done in HTML and CSS.</p>
        <h2>Project Details</h2>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
        </ul>
      </div>
    </div>

      <div class="port-btns row align-center">
      <a href="portfolio.php" class="button"><i class="fa fa-home" aria-hidden="true"> Back to Portfolio</i></a>
      </div>

      <div class="lightbox-target" id="landtech">
         <img src="img/LCC.png" alt="Landtech Computer Consulting">
         <a class="lightbox-close" href="landtech.php"></a>
      </div>
      <?php
        include "includes/socialmedia.php";
        include "includes/footer.php";
 ?>
