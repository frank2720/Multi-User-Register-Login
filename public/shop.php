<?php
require __DIR__ . '/../src/bootstrap.php';
require_login();
?>
<?php view('main_header', ['title' => 'Shop-Home']) ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <?php view('navbar') ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <style>
                .product-card {
                    border: 1px solid #e0e0e0;
                    border-radius: 10px;
                    overflow: hidden;
                    transition: box-shadow 0.3s ease-in-out;
                }
                .product-card:hover {
                    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                }
                .product-card img {
                    width: 100%;
                    height: auto;
                    max-height: 200px;
                    object-fit: contain;
                    padding: 20px;
                    background-color: #f8f9fa;
                }
                .product-card-body {
                    padding: 20px;
                    text-align: center;
                }
                .product-card-title {
                    font-size: 1.25rem;
                    font-weight: bold;
                    margin: 10px 0;
                }
                .product-card-price {
                    font-size: 1rem;
                    color: #28a745;
                    margin-bottom: 15px;
                }
            </style>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row gy-4">
                    
                <div class="col-md-12 col-lg-4">
                    <div class="card product-card">
                        <img src="../assets/img/illustrations/trophy.png" alt="Product Image" />
                        <div class="product-card-body">
                            <div class="product-card-title">Product Name</div>
                            <div class="product-card-price">$99.99</div>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card product-card">
                        <img src="../assets/img/illustrations/trophy.png" alt="Product Image" />
                        <div class="product-card-body">
                            <div class="product-card-title">Product Name</div>
                            <div class="product-card-price">$99.99</div>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card product-card">
                        <img src="../assets/img/illustrations/trophy.png" alt="Product Image" />
                        <div class="product-card-body">
                            <div class="product-card-title">Product Name</div>
                            <div class="product-card-price">$99.99</div>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card product-card">
                        <img src="../assets/img/illustrations/trophy.png" alt="Product Image" />
                        <div class="product-card-body">
                            <div class="product-card-title">Product Name</div>
                            <div class="product-card-price">$99.99</div>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card product-card">
                        <img src="../assets/img/illustrations/trophy.png" alt="Product Image" />
                        <div class="product-card-body">
                            <div class="product-card-title">Product Name</div>
                            <div class="product-card-price">$99.99</div>
                            <a href="javascript:;" class="btn btn-sm btn-primary">Add to Cart</a>
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
