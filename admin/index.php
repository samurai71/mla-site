<?php
$pageTitle = "Dashboard";
include 'includes/header.php';
include 'includes/top-nav.php';
//include 'includes/side-nav.php';
 ?>


   <div class="app-dashboard-body off-canvas-wrapper">
     <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
       <div class="app-dashboard-sidebar-title-area">
         <div class="app-dashboard-close-sidebar">
           <h3 class="app-dashboard-sidebar-block-title">Navigation</h3>
           <!-- Close button -->
           <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
             <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
           </button>
         </div>
         <div class="app-dashboard-open-sidebar">
           <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
             <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
           </button>
         </div>
       </div>
       <div class="app-dashboard-sidebar-inner">
         <ul class="menu vertical">
           <li><a href="index.php" class="is-active">
             <i class="large fa fa-home"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
           </a></li>
           <li><a href="media.php">
             <i class="large fa fa-cloud"></i><span class="app-dashboard-sidebar-text">Media</span>
           </a></li>
           <li><a href="pages.php">
             <i class="large fa fa-cogs"></i><span class="app-dashboard-sidebar-text">Pages</span>
           </a></li>
           <li><a href="categories.php">
             <i class="large fa fa-industry"></i><span class="app-dashboard-sidebar-text">Categories</span>
           </a></li>
           <li><a href="posts.php">
             <i class="large fa fa-paste"></i><span class="app-dashboard-sidebar-text">Posts</span>
           </a></li>
           <li><a href="comments.php">
             <i class="large fa fa-comment"></i><span class="app-dashboard-sidebar-text">Comments</span>
           </a></li>
           <li><a href="users.php">
             <i class="large fa fa-users"></i><span class="app-dashboard-sidebar-text">Users</span>
           </a></li>
           <li><a href="stats.php">
             <i class="large fa fa-google"></i><span class="app-dashboard-sidebar-text">Google Analytics</span>
           </a></li>
         </ul>
       </div>
     </div>

     <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
       <h2 class="text-center">Mark Landeryou Artisan Dashboard</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit ligula eget est feugiat viverra. Duis a arcu laoreet, rhoncus libero imperdiet, placerat velit. Vestibulum euismod mi et ornare sodales. Donec efficitur mattis blandit. Proin in massa elit. Praesent malesuada iaculis nisl, a venenatis dui. Nullam venenatis tincidunt placerat. Suspendisse egestas urna a aliquet pretium.</p>

       <p>Curabitur ullamcorper mollis lobortis. Integer a scelerisque turpis, sed dictum lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam quis placerat sem. Suspendisse vulputate, leo ac sollicitudin lobortis, dui dui blandit justo, ut molestie justo sem in ipsum. Vestibulum convallis ex ac est tristique tincidunt. Vivamus dui dui, viverra et urna vitae, aliquam facilisis erat. Nam lorem nibh, elementum semper commodo at, fermentum quis justo. Donec finibus sapien eget scelerisque rhoncus. Nullam at nisi sed mi congue vestibulum. Vivamus nec scelerisque orci, vel fringilla nisi. Sed dictum, leo in consectetur porttitor, quam nibh aliquet nisi, in pulvinar sapien ante id dui. Aliquam massa nisl, auctor eget nisl in, faucibus gravida lectus. Nullam mattis orci at turpis finibus egestas. Nam vitae lorem accumsan, tempus lectus vitae, rutrum diam. Integer pulvinar placerat magna aliquam scelerisque.</p>

       <p>Duis consectetur magna velit, nec porttitor velit fermentum pulvinar. Duis varius justo eu varius pellentesque. Curabitur aliquet velit mauris, quis aliquam leo pharetra in. Integer rhoncus ut dui in rhoncus. Maecenas nec libero neque. Duis ac lacus at justo ullamcorper efficitur. Praesent ornare urna ante. Aliquam dapibus posuere nisl sit amet vestibulum. Quisque dapibus iaculis justo non egestas. Curabitur interdum semper justo, eget condimentum orci bibendum nec.</p>

       <p>Vivamus pharetra massa non risus sollicitudin iaculis. Donec semper finibus hendrerit. Nam ut volutpat mauris, sit amet molestie nisi. Curabitur ac nisi urna. Nulla id turpis nec dui ornare tempor in ac justo. Cras quis cursus nisi. Donec vel pellentesque ante. Maecenas non nisi risus. Praesent posuere scelerisque varius. Cras vitae mollis quam. Etiam ut dui massa. Etiam mattis aliquam enim, eget facilisis erat elementum eu. Proin et lorem volutpat, pretium massa a, venenatis mi. Suspendisse quam orci, feugiat eget suscipit ac, vehicula a ante. Nam ut mauris at tortor cursus interdum.</p>

       <p>Nullam hendrerit tincidunt risus. Sed nec nibh vel nibh euismod lobortis sed a sem. Nulla nec libero dolor. Pellentesque non sodales orci. Phasellus odio ligula, varius non orci ac, fermentum pulvinar nibh. Aliquam erat volutpat. Curabitur vehicula varius porttitor. Integer purus sapien, placerat sodales eros et, interdum vestibulum sem. Duis faucibus felis vitae augue ultricies, aliquet tempor orci vestibulum. Duis eu justo mi. Praesent feugiat, ante interdum fringilla auctor, ex nibh aliquet neque, sed feugiat tellus tortor non dui. Suspendisse potenti. Aliquam fringilla sapien felis, at faucibus justo interdum congue.</p>


     </div>
   </div>
 </div>
    <?php
    include 'includes/footer.php';
     ?>
