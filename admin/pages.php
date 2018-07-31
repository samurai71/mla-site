<?php
$pageTitle ="Pages";
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
    <h2 class="text-center">Pages</h2>
    <table class="dashboard-table">
      <colgroup>
        <col width="150">
        <col width="80">
        <col width="200">
        <col width="60">
        <col width="220">
        <col width="170">
      </colgroup>
      <thead>
        <tr>
          <th><a href="#">Column 1 <i class="fa fa-caret-down"></i></a></th>
          <th><a href="#">Column 2 <i class="fa fa-caret-down"></i></a></th>
          <th><a href="#">Column 3 <i class="fa fa-caret-down"></i></a></th>
          <th><a href="#">Column 4 <i class="fa fa-caret-down"></i></a></th>
          <th><a href="#">Column 5 <i class="fa fa-caret-down"></i></a></th>
          <th><a href="#">Column 6 <i class="fa fa-caret-down"></i></a></th>
        </tr>
      </thead>
      <tbody>
      </tbody>
        <tr>
          <td>
            <div class="flex-container align-justify align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/50/50/people/">
              </div>
              <div class="flex-child-grow">
                <h6 class="dashboard-table-text">A Person</h6>
                <span class="dashboard-table-timestamp">03/04/2017</span>
              </div>
            </div>
          </td>
          <td>Single Line</td>
          <td class="bold">A Bold Line</td>
          <td>A Date</td>
          <td>
            <div class="flex-container align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/50/50/people/">
              </div>
              <div class="flex-child">
                <h6 class="dashboard-table-text">Another person did something</h6>
                <span class="dashboard-table-timestamp">03/08/2017</span>
              </div>
            </div>
          </td>
          <td class="listing-inquiry-status">

            <div class="flex-container align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/25/25/abstract/">
              </div>
              <div class="flex-child">
                <h6 class="dashboard-table-text"><a href="#">A longer wrapping item with an image that is aligned to the top</a></h6>
              </div>
            </div>

          </td>
        </tr>
        <tr>
          <td>
            <div class="flex-container align-justify align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/50/50/people/">
              </div>
              <div class="flex-child-grow">
                <h6 class="dashboard-table-text">A Person</h6>
                <span class="dashboard-table-timestamp">03/04/2017</span>
              </div>
            </div>
          </td>
          <td>Single Line</td>
          <td class="bold">A Bold Line</td>
          <td>A Date</td>
          <td>
            <div class="flex-container align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/50/50/people/">
              </div>
              <div class="flex-child">
                <h6 class="dashboard-table-text">Another person did something</h6>
                <span class="dashboard-table-timestamp">03/08/2017</span>
              </div>
            </div>
          </td>
          <td class="listing-inquiry-status">

            <div class="flex-container align-top">
              <div class="flex-child-shrink">
                <img class="dashboard-table-image" src="http://lorempixel.com/25/25/abstract/">
              </div>
              <div class="flex-child">
                <h6 class="dashboard-table-text"><a href="#">A longer wrapping item with an image that is aligned to the top</a></h6>
              </div>
            </div>

          </td>
        </tr>
      </tbody>
    </table>



  </div>
</div>
</div>
<?php
include 'includes/footer.php';
 ?>
