<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-semibold ms-2">LOGO</span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item">
                <?php 
                    $user_details = current_user();
                    if( $user_details['user_type'] == 'Supplier') 
                    {
                      echo '<a href="index.php" class="menu-link" style="background-color: #23683F; color:white">';
                    }elseif ($user_details['user_type'] == 'ShopOwner') {
                      echo '<a href="SOindex.php" class="menu-link" style="background-color: #23683F; color:white">';
                    }
                ?>
                <i class="menu-icon tf-icons mdi mdi-account-circle-outline"></i>
                <?php 
                    $user_details = current_user();
                    if( $user_details['user_type'] == 'Supplier') 
                    {
                      echo '<div data-i18n="Basic">Supplier Account</div>';
                    }elseif ($user_details['user_type'] == 'ShopOwner') {
                      echo '<div data-i18n="Basic">Shop Owner Account</div>';
                    }
                ?>
              </a>
            </li>
            <?php 
                $user_details = current_user();
                if( $user_details['user_type'] == 'Supplier') 
                {
                  echo '<li class="menu-item active open">
                  <a href="productType-supplier.php" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                    <div data-i18n="Basic">Products Type</div>
                  </a>
                </li>';
                }
            ?>
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-account-cog"></i>
                <div data-i18n="Dashboards">Accounts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a
                    href="customers.php"
                    class="menu-link">
                    <div data-i18n="Without menu">Customers Section</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="suppliers.php"
                    class="menu-link">
                    <div data-i18n="Without navbar">Suppliers Section</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="shop_owners.php"
                    class="menu-link">
                    <div data-i18n="Without navbar">Shop Owners section</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->