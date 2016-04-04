<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Select\Select;

$showalldata = new Select();

$getalldata = $showalldata->deleteitems();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Select | Delete Item</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="../../../../html/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../html/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../html/css/normalize.css">
        <link rel="stylesheet" href="../../../../html/css/main.css">
        <script src="../../../../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="main_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="../../../../index.html">Atomic Project</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="../Books/index.php">Book</a></li>
                                    <li><a href="../Birthday/index.php">Birthday</a></li>
                                    <li><a href="../Textarea/index.php">Textarea</a></li>
                                    <li><a href="../Email/index.php">Email</a></li> 
                                    <li><a href="#">Profile Picture</a></li>
                                    <li><a href="#">Gender</a></li>
                                    <li><a href="#">Checkbox</a></li> 
                                    <li><a href="index.php">Select</a></li> 
                                </ul>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="Sub_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php">Select</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="create.php">Create</a></li>
                                    <li><a href="deleteitem.php">Delete Item</a></li>
                                </ul>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="table_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-inverse table_index">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Select Item</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($getalldata) && !empty($getalldata)){
                                   $serial = 0;
                                    foreach($getalldata as $row){
                                       $serial++;
                                       ?>
                                        <tr>
                                            <td><?php echo $serial?></td>
                                            <td><?php echo $row['title']?></td>
                                            <td>
                                                <a href="restore.php?id=<?php echo $row['id']?>"><i class="fa fa-retweet"></i> </a>|
                                                <a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                   <tr>
                                          <td colspan="3"><?php echo "No data available";?></td>
                                   </tr>
                                   <?php
                                }
                                   ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="col-lg-4"></div>
                                <ul class="nav navbar-nav">
                                    <li><a href="">Atomic Project <i class="fa fa-copyright"></i> <?php echo date("Y");?> | Developed by Rakib Hossain. All rights reserved.</a></li>   
                                </ul>
                                <div class="col-lg-3"></div>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../../../../html/js/bootstrap.min.js"></script>
        <script src="../../../../html/js/plugins.js"></script>
        <script src="../../../../html/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

