<?php
  # start theme globalnews
  $theme = new Theme('globalnews');
  # init routes
  $theme->routes();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$theme->title(); ?></title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <?php $theme->css(); ?>
  </head>
  <body>
    <!-- preloader start -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- preloader end --> 

    <!-- wrapper start -->
    <div class="wrapper"> 

      <!-- header toolbar start -->
      <?php $theme->component("header-toolbar"); ?>
      <!-- header toolbar end --> 

      <!-- sticky header start -->
      <div class="sticky-header"> 
      <?php $theme->page(); ?> 
      </div>

    </div>
    <!-- data end --> 

    <!-- Footer start -->
    <?php $theme->component("footer"); ?>

    <!-- Footer end -->
    <div id="create-account" class="white-popup mfp-with-anim mfp-hide">
      <form role="form">
        <h3>Create Account</h3>
        <hr>
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-16">
            <input type="submit" value="Register" class="btn btn-danger btn-block btn-lg" tabindex="7">
          </div>
        </div>
      </form>
    </div>

    <div id="log-in" class="white-popup mfp-with-anim mfp-hide">
      <form role="form">
        <h3>Log In Your Account</h3>
        <hr>
        <div class="form-group">
          <input type="text" name="access_name" id="access_name" class="form-control" placeholder="Name" tabindex="3">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="4">
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-16">
            <input type="submit" value="Log In" class="btn btn-danger btn-block btn-lg" tabindex="7">
          </div>
        </div>
      </form>
    </div>

    </div>
    <!-- wrapper end --> 
    <?php $theme->js(); ?>
  </body>
</html>