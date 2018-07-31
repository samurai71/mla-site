<?php
$pageTitle = "Stats";
include 'includes/header.php';
include 'includes/top-nav.php';
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
    <h2 class="text-center">Google Analytics</h2>
    <ul class="stats-list">
      <li>
        135 <span class="stats-list-label">Commits</span>
      </li>
      <li class="stats-list-positive">
        17,678 <span class="stats-list-label">Additions</span>
      </li>
      <li class="stats-list-negative">
        2,390 <span class="stats-list-label">Deletions</span>
      </li>
    </ul>
  </div>
</div>
</div>

<?php
include 'includes/footer.php';
 ?>
