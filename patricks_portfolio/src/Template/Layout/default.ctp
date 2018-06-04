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



      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       <style>
       body {
           font: 400 15px/1.8 Lato, sans-serif;
           color: #777;
       }
       h3, h4 {
           margin: 10px 0 30px 0;
           letter-spacing: 10px;
           font-size: 20px;
           color: #111;
       }
       .container {
           padding: 80px 120px;
       }
       .person {
           border: 10px solid transparent;
           margin-bottom: 25px;
           width: 80%;
           height: 80%;
           opacity: 0.7;
       }
       .person:hover {
           border-color: #f1f1f1;
       }
       .carousel-inner img {
           -webkit-filter: grayscale(90%);
           filter: grayscale(90%); /* make all photos black and white */
           width: 100%; /* Set width to 100% */
           margin: auto;
       }
       .carousel-caption h3 {
           color: #fff !important;
       }
       @media (max-width: 600px) {
         .carousel-caption {
           display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
         }
       }
       .bg-1 {
           background: #2d2d30;
           color: #bdbdbd;
       }
       .bg-1 h3 {color: #fff;}
       .bg-1 p {font-style: italic;}
       .list-group-item:first-child {
           border-top-right-radius: 0;
           border-top-left-radius: 0;
       }
       .list-group-item:last-child {
           border-bottom-right-radius: 0;
           border-bottom-left-radius: 0;
       }
       .thumbnail {
           padding: 0 0 15px 0;
           border: none;
           border-radius: 0;
       }
       .thumbnail p {
           margin-top: 15px;
           color: #555;
       }
       .btn {
           padding: 10px 20px;
           background-color: #333;
           color: #f1f1f1;
           border-radius: 0;
           transition: .2s;
       }
       .btn:hover, .btn:focus {
           border: 1px solid #333;
           background-color: #fff;
           color: #000;
       }
       .modal-header, h4, .close {
           background-color: #e0ccff;
           color: #e0ccff !important;
           text-align: center;
           font-size: 30px;
       }
       .modal-header, .modal-body {
           padding: 40px 50px;
       }
       .nav-tabs li a {
           color: #777;
       }
       .navbar {
           font-family: Montserrat, sans-serif;
           margin-bottom: 0;
           background-color: #e0ccff;
           border: 0;
           font-size: 11px !important;
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
                                                                                                                                                                 'height' => "65",
                                                                                                                                                                 'width' => "65"
                                                                                                                                                             ]); ?></a></li>
           <li><a href="#"> <?= $this->Html->image("/img/GitHub-Logo.png", [
                                                                                                                                                                 "alt" => "GitHub",
                                                                                                                                                                 'url' => "https://github.com/pcallahan3",
                                                                                                                                                                 'height' => "65",
                                                                                                                                                                 'width' => "65"
                                                                                                                                                             ]); ?></a></li>

                </ul>
    </ul>
  </div>
</nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

</body>
</html>
