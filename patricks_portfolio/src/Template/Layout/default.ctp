<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Patrick Portfolio
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <style>
   body {
       font: 400 15px/1.8 Lato, sans-serif;
       color: #777;
   }
   .container {
       padding: 80px 120px;
   }
   .navbar {
       font-family: ;
       margin-bottom: 0;
       background-color: #3D9970;
       border: 0;
       font-size: 20px;
       letter-spacing: 4px;
       opacity: 0.9;
   }
   .navbar li a, .navbar .navbar-brand {
       color: black !important;
       text-align: center;
   }
   .navbar-nav li a:hover {
       color: #fff !important;
   }
   .navbar-nav li.active a {
       color: #fff !important;
       background-color: #29292c !important;
   }
   .navbar-default .navbar-toggle {
       border-color: transparent;
   }
   .open .dropdown-toggle {
       color: #fff;
       background-color: #555 !important;
   }
   .dropdown-menu li a {
       color: #000 !important;
   }
   .dropdown-menu li a:hover {
       background-color: red !important;
   }
   footer {
       background-color: #2d2d30;
       color: #f5f5f5;
       padding: 32px;
   }
   footer a {
       color: #f5f5f5;
   }
   footer a:hover {
       color: #777;
       text-decoration: none;
   }
   .form-control {
       border-radius: 0;
   }
   textarea {
       resize: none;
   }
   </style>
 </head>
 
 <!--Navbar-->
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header ">
      <p class="navbar-brand">Patricks Portfolio</p>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <?= $this->Html->image("/img/LinkedIn_Logo.svg.png", [
                                                 "alt" => "LinkedIn",
                                                  'url' => "https://www.linkedin.com/in/patrick-callahan-greenriver/",
                                                 'height' => "50"
                                             ]);?></a></li>
      <li><a href="#"> <?= $this->Html->image("/img/GitHub-Logo.png", [
                                                 "alt" => "GitHub",
                                                 'url' => "https://github.com/pcallahan3",
                                                 'height' => "50"
                                             ]);?></a></li>

      </ul>
  </div>
</nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
