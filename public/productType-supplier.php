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
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Supplier /</span> Product Type</h4>

              
              <!-- Product Type Food -->
			  <form action="supplier.php" method="post">
              <div class="card mb-4">
                <h5 class="card-header"><span class="text-muted fw-light">Product Type /</span> Food</h5>
                <div class="card-body">
                  <div class="row gx-3 gy-2 align-items-center gap-3 gap-md-0">
                    <div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <select id="selectTypeOpt" class="form-select color-dropdown">
                          <option value="text-traditional" selected>Traditional</option>
                          <option value="text-sweetness">Sweetness</option>
                          <option value="text-appetizers">Appetizers</option>
                          <option value="text-drinks">Drinks</option>
                        </select>
                        <label for="selectTypeOpt">Type</label>
                      </div>
                    </div>
                    
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                          <?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "familydb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// SQL query to fetch data from the database
$sql = "SELECT ShopID, ShopName FROM shop";
$result = $conn->query($sql);
 
// Check if there are any results
if ($result->num_rows > 0) {
    echo '<select name="selectshops" class="form-select shops-dropdown" id="selectshops" onchange="this.form.submit()">';
	
    // Loop through each row and populate the select options
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["ShopID"] . '">' . $row["ShopName"] . '</option>';
    }
    echo '</select>';
} else {
    echo "0 results";
}
 
// Close the database connection
$conn->close();
?>
                        <label for="selectshops">Shops</label>
                      </div>
                    </div>
					
					
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
					  
					  <select name="selectshelfs"  class="form-select shelfs-dropdown" id="selectshelfs">
<?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "familydb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Check if the first select option has been selected
if(isset($_POST['selectshops'])) {
    $selectshops = $_POST['selectshops'];
 
    // SQL query to fetch data based on the selected option
    $sql = "SELECT ShelfID, ShelfPrice FROM shelf WHERE ShopID = $selectshops";
    $result = $conn->query($sql);
    // Check if there are any results
    if ($result->num_rows > 0) {
        // Loop through each row and populate the select options
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["ShelfID"] . '">' . $row["ShelfPrice"] .' OMR'. '</option>';
        }
    } else {
        echo '<option value="">No Shelfs are available</option>';
    }
}
else{
	echo '<option value="">Select an option first</option>';
}
 
// Close the database connection
$conn->close();
?>
						
	</select>	
<label for="selectshelfs">Shelfs</label>	
                      </div>
                    </div>
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <input class="form-control" type="date" id="html5-date-input" />
                        <label for="html5-date-input">Start Date</label>
						</div>
                    </div>
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <input class="form-control" type="date" id="html5-date-input" />
                        <label for="html5-date-input">End Date</label>
						</div>
                    </div>
                    <div class="col-md-3">
                      <button id="showToaclassification" class="btn btn-primary d-block" type="submit">Send</button>
                    </div>
                  </div>
                </div>
              </div>
			  </form>
			  
			 <!-- Product Type Hand-craft -->
			 			  <form action="supplier.php" method="post">
              <div class="card mb-4">
                <h5 class="card-header"><span class="text-muted fw-light">Product Type /</span> Hand-craft</h5>
                <div class="card-body">
                  <div class="row gx-3 gy-2 align-items-center gap-3 gap-md-0">
                    <div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <select id="selectTypeOpt" class="form-select color-dropdown">
                          <option value="text-Skincareproducts" selected>Skin Care Products</option>
                          <option value="text-accessories">Accessories</option>
                          <option value="text-Handcrafts">Hand crafts</option>
                        </select>
                        <label for="selectTypeOpt">Type</label>
                      </div>
                    </div>
                    
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                          <?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "familydb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// SQL query to fetch data from the database
$sql = "SELECT ShopID, ShopName FROM shop";
$result = $conn->query($sql);
 
// Check if there are any results
if ($result->num_rows > 0) {
    echo '<select name="selectshops" class="form-select shops-dropdown" id="selectshops" onchange="this.form.submit()">';
	
    // Loop through each row and populate the select options
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["ShopID"] . '">' . $row["ShopName"] . '</option>';
    }
    echo '</select>';
} else {
    echo "0 results";
}
 
// Close the database connection
$conn->close();
?>
                        <label for="selectshops">Shops</label>
                      </div>
                    </div>
					
					
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
					  
					  <select name="selectshelfs"  class="form-select shelfs-dropdown" id="selectshelfs">
<?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "familydb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Check if the first select option has been selected
if(isset($_POST['selectshops'])) {
    $selectshops = $_POST['selectshops'];
 
    // SQL query to fetch data based on the selected option
    $sql = "SELECT ShelfID, ShelfPrice FROM shelf WHERE ShopID = $selectshops";
    $result = $conn->query($sql);
    // Check if there are any results
    if ($result->num_rows > 0) {
        // Loop through each row and populate the select options
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["ShelfID"] . '">' . $row["ShelfPrice"] .' OMR'. '</option>';
        }
    } else {
        echo '<option value="">No Shelfs are available</option>';
    }
}
else{
	echo '<option value="">Select an option first</option>';
}
 
// Close the database connection
$conn->close();
?>
						
	</select>	
<label for="selectshelfs">Shelfs</label>	
                      </div>
                    </div>

					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <input class="form-control" type="date" id="html5-date-input" />
                        <label for="html5-date-input">Start Date</label>
						</div>
                    </div>
					<div class="col-md-3">
                      <div class="form-floating form-floating-outline">
                        <input class="form-control" type="date" id="html5-date-input" />
                        <label for="html5-date-input">End Date</label>
						</div>
                    </div>
                    <div class="col-md-3">
                      <button id="showToaclassification" class="btn btn-primary d-block">Send</button>
                    </div>
                  </div>
                </div>
              </div>
			  </form>
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
