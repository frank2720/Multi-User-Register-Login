<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';
?>
<?php view('header', ['title' => 'Login']) ?>
<body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
        <?php if (isset($errors['login'])) : ?>
            <div class="alert alert-error">
                <?= $errors['login'] ?>
            </div>
        <?php endif ?>
          <!-- Login -->
          <div class="card p-2">
            

            <div class="card-body mt-2">
              <p class="mb-4">Please sign-in </p>

              <form class="mb-3" action="login.php" method="post">
                <div class="form-floating form-floating-outline mb-3">
                  <select class="form-select" id="usertype" name="user_type" aria-label="Select User Type">
                      <option value="Customer" selected>Customer</option>
                      <option value="Supplier">Supplier</option>
                      <option value="ShopOwner">Shop Owner</option>
                  </select>
                  <label for="usertype">Select User Type</label>
                  <small><?= $errors['user_type'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    value="<?= $inputs['username'] ?? '' ?>"
                    placeholder="Enter your username"
                    autofocus />
                  <label for="username">Username</label>
                  <small><?= $errors['username'] ?? '' ?></small>
                </div>
                <div class="form-floating form-floating-outline">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <label for="password">Password</label>
                  <small><?= $errors['password'] ?? '' ?></small>
                </div>
                      
                <div class="mb-3 d-flex justify-content-between">
                  <a href="auth-forgot-password-basic.html" class="float-end mb-1">
                    <span>Forgot Password?</span>
                  </a>
                </div>
                <div class="mb-3">
                    <center><button class="btn rounded-pill btn-outline-success" type="submit" style="background-color: #B5C268; color: black">Log In</button></center>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="register.php">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <?php view('footer') ?>
  </body>
</html>
