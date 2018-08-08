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
   .rotator {
     width: 160px;
     height: 105px;
     margin: 20px;
     background-color:teal;
   }
   .transition {
     -webkit-transition: all 1000s linear;
     -moz-transition: all 1000s linear;
     -ms-transition: all 1000s linear;
     -o-transition: all 1000s linear;
     transition: all 1000s linear;
   }
   .translateAnimationClass {
     -webkit-transform: rotateX(43200deg) rotateY(14400deg);
     -moz-transform: rotateX(43200deg) rotateY(14400deg);
     -ms-transform: rotateX(43200deg) rotateY(14400deg);
     -o-transform: rotateX(43200deg) rotateY(14400deg);
     transform: rotateX(43200deg) rotateY(14400deg);
   }
   .animation {
     -webkit-animation: rotator 25s linear infinite;
     -moz-animation: rotator 25s linear infinite;
     -ms-animation: rotator 25s linear infinite;
     -o-animation: rotator 25s linear infinite;
     animation: rotator 25s linear infinite;
   }

   @-webkit-keyframes rotator {
     0%   { -webkit-transform: rotateX(0deg)    rotateY(0deg);    }
     100% { -webkit-transform: rotateX(1080deg) rotateY(360deg);  }
   }
   @-moz-keyframes rotator {
     0%   { -moz-transform: rotateX(0deg)    rotateY(0deg);    }
     100% { -moz-transform: rotateX(1080deg) rotateY(360deg);  }
   }
   @-ms-keyframes rotator {
     0%   { -ms-transform: rotateX(0deg)    rotateY(0deg);    }
     100% { -ms-transform: rotateX(1080deg) rotateY(360deg);  }
   }
   @-o-keyframes rotator {
     0%   { -o-transform: rotateX(0deg)    rotateY(0deg);    }
     100% { -o-transform: rotateX(1080deg) rotateY(360deg);  }
   }
   @keyframes rotator {
     0%   { transform: rotateX(0deg)    rotateY(0deg);    }
     100% { transform: rotateX(1080deg) rotateY(360deg);  }
   }
   body {
       font: 400 15px/1.8 Lato, sans-serif;
       color: #777;
   }
   .container {
       padding: 80px 120px;
   }
   .navbar {
       font-family: Sans-serif;
       margin-bottom: 0;
       color: black;
       background-color: #3D9970;
       border: 0;
       font-size: 34px;
       letter-spacing: 4px;
       opacity: 0.9;
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
   </style>
 </head>
 
 <!--Navbar-->
<body>
<!--JQuery animation-->
<script>
    window.onload = function() {
    document.getElementsByClassName('transition')[0].classList.add('translateAnimationClass');
    }
</script>
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
