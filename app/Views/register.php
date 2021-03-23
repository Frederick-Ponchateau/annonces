<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>User Register </title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("app-assets/vendors/vendors.min.css")?>">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("app-assets/css/themes/materialize.css")?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("app-assets/css/themes/style.css")?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("app-assets/css/pages/register.css")?>">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("app-assets/css/custom/custom.css")?>">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
          <div id="register-page" class="row">
              <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
                <form class="login-form" action="/register/save" method="post">
                  <div class="row">
                    <div class="input-field col s12">
                      <h5 class="ml-4">Register</h5>
                      <p class="ml-4">Join to our community now !</p>
                    
                    </div>
                    <?php if(isset($validation)):?>
                                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif;?>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s6">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="InputForName" type="text" name="name"value="<?= set_value('name') ?>">
                      <label for="InputForName"  class="center-align">Nom</label>
                    </div>
                 
                    <div class="input-field col s6">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="InputForPrenom" name="prenom" type="text" value="<?= set_value('prenom') ?>">
                      <label for="InputForPrenom" class="center-align">Prenom</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s6">
                      <?php if(isset($validation)):?>
                                  <div class="alert alert-danger"><?= $validation->hasError("login") ?></div>
                      <?php endif;?>
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="InputForLogin" value="<?= set_value('login') ?>" name="login" type="text">
                      <label for="InputForLogin" class="center-align">Login</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="InputForPhone" type="number" name="phone" value="<?= set_value('phone') ?>">
                      <label for="InputForPhone" class="center-align">Phone</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">mail_outline</i>
                      <input id="InputForEmail" type="email" name="email" value="<?= set_value('email') ?>">
                      <label for="InputForEmail">Email</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">lock_outline</i>
                      <input id="InputForPassword" name="password" type="password">
                      <label for="InputForPassword">Password</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">lock_outline</i>
                      <input id="InputForConfPassword" name="confpassword" type="password">
                      <label for="InputForConfPassword">Password again</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <p class="margin medium-small"><a href="<?= base_url('login/')?>">Vous avez deja un compte? Connexion</a></p>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="<?=base_url("app-assets/js/vendors.min.js")?>"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?=base_url("app-assets/js/plugins.js")?>"></script>
    <script src="<?=base_url("app-assets/js/search.js")?>"></script>
    <script src="<?=base_url("app-assets/js/custom/custom-script.js")?>"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>


