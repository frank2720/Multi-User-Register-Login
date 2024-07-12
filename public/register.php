<?php
require_once __DIR__.'/../src/bootstrap.php';
require_once __DIR__.'/../src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>

  <body style="background-color: F9F9F9;">

    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
	
          <div class="card p-2">

            <div class="card-body mt-2">
              

              <form method="POST" class="mb-3" action="register.php">
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control <?= error_class($errors, 'username') ?>"
                    id="username"
                    name="username"
                    value="<?= $inputs['username'] ?? '' ?>"
                    placeholder="Enter your username" />
                  <label for="username">Username</label>
                  <small><?= $errors['username'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control <?= error_class($errors, 'name') ?>"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    autofocus />
                  <label for="name">Name</label>
                  <small><?= $errors['name'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control <?= error_class($errors, 'phone') ?>"
                    id="phone"
                    name="phone"
                    placeholder="Enter your name"
                    autofocus />
                  <label for="phone">Phone</label>
                  <small><?= $errors['phone'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                <select class="form-select <?= error_class($errors, 'user_type') ?>" id="usertype" name="user_type" aria-label="Select User Type">
                    <option value="Customer" selected>Customer</option>
                    <option value="Supplier">Supplier</option>
                    <option value="ShopOwner">Shop Owner</option>
                </select>
                <label for="usertype">Select User Type</label>
                <small><?= $errors['user_type'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input type="text" class="form-control <?= error_class($errors, 'email') ?>" id="email" name="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Enter your email" />
                  <label for="email">Email</label>
                  <small><?= $errors['email'] ?? '' ?></small>
                </div>
                
                <div class="form-floating form-floating-outline">
                  <input
                    type="password"
                    id="password"
                    class="form-control <?= error_class($errors, 'password') ?>"
                    name="password"
                    value="<?= $inputs['password'] ?? '' ?>"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <label for="password">Password</label>
                  <small><?= $errors['password'] ?? '' ?></small>
                </div>
                  
                <div class="form-floating form-floating-outline">
                  <input
                    type="password"
                    id="cpassword"
                    class="form-control <?= error_class($errors, 'cpassword') ?>"
                    name="cpassword"
                    value="<?= $inputs['cpassword'] ?? '' ?>"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <label for="cpassword">Confirm Password</label>
                  <small><?= $errors['cpassword'] ?? '' ?></small>
                </div>
                  
                <div class="mb-3">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="agree" value="checked" <?= $inputs['agree'] ?? '' ?> />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                    <small><?= $errors['agree'] ?? '' ?></small>
                  </div>
                </div>
                <div class="mb-3">
                    <center><button class="btn rounded-pill btn-outline-success" type="submit" style="background-color: #B5C268; color: black">Register</button></center>
                </div>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="login.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <?php view('footer') ?>
  </body>
</html>
<?php flash() ?>
