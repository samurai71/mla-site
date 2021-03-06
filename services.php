<?php
    $pageTitle = "Contact Us";
    $pageDesc = "Mark Landeryou Artisan is an web designer/developer, graphic designer and digital artist, based out of Sarnia Ontario serving Sarnia and London areas";
    $pageKeywords = "Mark Landeryou Artisan Sarnia London Canada Graphic Designer Web Designer Web developer Digital Artist";
    include "includes/header.php";
 ?>
 <div class="grid-x grid-margin-x content-wrap">
         <div class="large-12 cell">
           <h2>Services</h2>

         <p>Mark Landeryou offers a variety of services, you can hire him to create your web site. Commission him to create a digital illustration and much more. Please feel free to contact me, by visiting the contact page.</p>
      <div class="row small-up-1 medium-up-4">
                     <div class="column flex-container">

                       <div class="card">
                         <img src="img/thumbs/GDR_thumb.png" alt="Web Design & Development">
                         <div class="card-section">
                         <h4>Web Design & Development</h4>
                           <button class="button" type="button" data-toggle="web-dropdown-bottom-center">Learn More</button>
                           <div class="dropdown-pane" data-position="bottom" data-alignment="center" id="web-dropdown-bottom-center" data-dropdown data-auto-focus="true">
                           <p><span class="bold italic">Web Design & Development</span><br> with 20 years experience in the field of creating web sites. Leave your thoughts to us and we will amaze you with our work.</p>
                           </div>
                         </div>
                       </div>

                     </div>
                     <div class="column flex-container">

                       <div class="card">
                         <img src="img/MLA-Logo-Outlined.png" alt="Design & Branding">
                         <div class="card-section">
                         <h4>Graphic Design & Branding</h4>
                           <button class="button" type="button" data-toggle="design-dropdown-bottom-center">Learn More</button>
                           <div class="dropdown-pane" data-position="bottom" data-alignment="center" id="design-dropdown-bottom-center" data-dropdown data-auto-focus="true">
                           <p><span class="bold italic">Graphic Design & Branding</span> <br>I have studied Graphic Design and Branding in College, so let me create your new graphic or work on your branding.</p>
                           </div>
                         </div>
                       </div>

                     </div>
                 <div class="column flex-container">
                       <div class="card">
                         <img src="img/thumbs/Jim_Morrison_1968-painting_thumb.png" alt="Digital Illustration/Painting">
                         <div class="card-section">
                         <h4>Illustration & Painting</h4>
                           <button class="button" type="button" data-toggle="painting-dropdown-bottom-center">Learn More</button>
                           <div class="dropdown-pane" data-position="bottom" data-alignment="center" id="painting-dropdown-bottom-center" data-dropdown data-auto-focus="true">
                           <p><span class="bold italic">Digital Illustration & Painting</span> <br>Send me your ideas or photo that you would like digitaly painted or illustrated, and I would be more then happy to create it for you.</p>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="column flex-container">
                           <div class="card">
                             <img src="img/thumbs/jukebox_thumb.jpg" alt="Photoshop Work">
                             <div class="card-section">
                             <h4>Photoshop Work</h4>
                               <button class="button" type="button" data-toggle="photoshop-dropdown-bottom-center">Learn More</button>
                               <div class="dropdown-pane" data-position="bottom" data-alignment="center" id="photoshop-dropdown-bottom-center" data-dropdown data-auto-focus="true">
                               <p><span class="bold italic">Photoshop Work</span><br>I have many years experience using Photoshop and can touch up photos.</p>
                               </div>
                             </div>
                           </div>
                         </div>
                 </div>

         </div>

       </div>

    <?php
           include "includes/socialmedia.php";
           include "includes/footer.php";
?>
