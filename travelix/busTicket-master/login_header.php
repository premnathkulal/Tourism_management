<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus Ticket</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
<header>
      <div class="clearfix"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-2 col-sm-1">
                  <div class="logo">
                     <a href="../"><img src="../images/logo.png"  alt="logo"><strong style="color:black;">&nbsp;K_Tourist</strong></a>
                  </div>
              </div>
              <div class="col-md-10 col-sm-11">
                   <nav class="navbar-default">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="navbar-right">
                             <?php session_start(); ?>
                           
                            <?php

                            if(!isset($_SESSION['isLogged'])){


                                $_SESSION['isLogged'] = false;
                            }
                              
                              
                              if(!isset($_SESSION['adminLog'])){


                                $_SESSION['adminLog'] = false;
                            }
                              
                               if(!isset($_SESSION['cadminLog'])){


                                $_SESSION['cadminLog'] = false;
                            }
                            
                               if(!isset($_SESSION['cLog'])){


                                $_SESSION['cLog'] = false;
                            }

                            ?>
                           
                            <li><a href="../">Home</a></li>
                          
                            <?php if($_SESSION['isLogged']==true ||  $_SESSION['adminLog'] == true || $_SESSION['cadminLog'] == true ||  $_SESSION['cLog'] == true): ?>
                            <li><a href="logout.php">Logout</a></li>
                            <?php elseif($_SESSION['isLogged']== false ||  $_SESSION['adminLog'] == false): ?>
                            <li><a href="login.php">Login</a></li>
                            <?php endif; ?>
                          </ul>
                        </div>
                    </nav>
              </div>
          </div>
      </div>
  </header>
<div class="clearfix"></div>
<!--Header part ends-->