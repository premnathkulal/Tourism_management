<?php include '../database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus Ticket</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
<header>
      <div class="top top_backround">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-12 top_color">
                      <p>Online Bus Ticket</p>
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-xs number">
                      <ul>
                          <li><a href="#"><i class="fa fa-mobile"></i><span>+8801930854808</span></a></li>
                          <li><a href="#"><i class="fa fa-envelope"></i><span>mabud@myself.com</span></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="clearfix"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-1 col-sm-1">
                  <div class="logo">
                      <a href="../index.php"><img src="../images/logo1.png" width="55px" alt="logo"></a>
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
                           
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../search.php">Search Bus</a></li>
                            <li><a href="../showRoute.php">Show Route</a></li>
                            <li><a href="../service.php">Service</a></li>
                            
                             
                              
                               
                              <?php if($_SESSION['adminLog'] == true ): ?>
                              <li><a href="../admin.php">Admin Panel</a></li>
                            
                            <?php elseif($_SESSION['isLogged']== false ): ?>
                         
                            <?php endif; ?> 
                            
                            
                            
                            <?php if($_SESSION['cadminLog'] == true ): ?>
                              <li><a href="../CounterAdmin.php">CAdmin Panel</a></li>
                            
                            <?php elseif($_SESSION['cadminLog']== false ): ?>
                         
                            <?php endif; ?> 
                            
                              <?php if($_SESSION['cLog'] == true ): ?>
                              <li><a href="../counter.php">Counter Panel</a></li>
                            
                            <?php elseif($_SESSION['cadminLog']== false ): ?>
                         
                            <?php endif; ?> 
                            
                               
                               
                               
                          
                              <?php if($_SESSION['isLogged']==true): ?>
                              <li><a href="../profile.php">Profile</a></li>
                              
                            <?php elseif($_SESSION['isLogged']== false ): ?>
                         
                            <?php endif; ?>
                            
                           
                            
                          

                            <?php if($_SESSION['isLogged']==true ||  $_SESSION['adminLog'] == true || $_SESSION['cadminLog'] == true ||  $_SESSION['cLog'] == true): ?>
                            <li><a href="../logout.php">Logout</a></li>
                            <?php elseif($_SESSION['isLogged']== false ||  $_SESSION['adminLog'] == false): ?>
                            <li><a href="../login.php">Login</a></li>
                            <?php endif; ?>

                            <li><a href="../contact.php">Contact</a></li>
                          </ul>
                        </div>
                    </nav>
              </div>
          </div>
      </div>
  </header>
<div class="clearfix"></div>
<!--Header part ends-->