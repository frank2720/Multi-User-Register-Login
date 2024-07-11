<?php
require __DIR__ . '/../src/bootstrap.php';
require_login();
?>
<?php view('main_header', ['title' => 'Home']) ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php view('sidebar') ?>

        <!-- Layout container -->
        <div class="layout-page">
          <?php view('navbar') ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <h4 class="card-header">Profile Details</h4>
                <div class="card-body pt-2 mt-1">
                    <div class="card mb-6">
                        <div class="card-body pt-12">
                            <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-4" src="../assets/img/avatars/1.png" height="120" width="120" alt="User avatar">
                                <div class="user-info text-center">
                                <h5>
                                  <?php 
                                      $user_details = current_user();
                                      echo $user_details['username'];
                                  ?>
                                </h5>
                                </div>
                            </div>
                            </div>
                            <div class="d-flex justify-content-around flex-wrap my-6 gap-0 gap-md-3 gap-lg-4">
                            </div>
                            <h5 class="pb-4 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                            <ul class="list-unstyled mb-6">
                                <li class="mb-2">
                                <span class="h6">Username:</span>
                                <span>
                                  <?php 
                                     $user_details = current_user();
                                     echo $user_details['username'];
                                  ?>
                                </span>
                                </li>
                                <li class="mb-2">
                                <span class="h6">Email:</span>
                                <?php $account_details = current_user_details()?>
                                <span><?php echo $account_details['OEmail'] ?></span>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php view('main_footer')?>

  </body>
</html>
