<?php
require __DIR__ . '/../src/bootstrap.php';
require_login();
?>
<?php view('main_header', ['title' => 'ShopOwners-Data']) ?>

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
            <div class="row gy-4">
            <!-- Data Tables -->
            <div class="col-12">
                <div class="card">
                <div class="table-responsive">
                    <table class="table">
                    <thead class="table-light">
                        <tr>
                        <th class="text-truncate">ShopOwner Name</th>
                        <th class="text-truncate">ShopOwner Email</th>
                        <th class="text-truncate">Role</th>
                        <th class="text-truncate">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $ShopOwners=ShopOwners() ?>
                    <?php foreach ($ShopOwners as $ShopOwner) {
                        echo '<tr>
                        <td>
                            <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0 text-truncate">'.$ShopOwner['SOname'].'</h6>
                            </div>
                            </div>
                        </td>
                        <td class="text-truncate">'.$ShopOwner['OEmail'].'</td>
                        <td class="text-truncate">
                            shopOwner
                        </td>
                        <td class="text-truncate">'.$ShopOwner['OPhoneNum'].'</td>
                        </tr>';
                    }?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!--/ Data Tables -->
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
