<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Select\Select;

$id = $_GET['id'];
$show = new Select();
$oneshow = $show->show($id);
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Select | Show</title>
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
                                    <li><a href="Views/BITM/SEIP116718/Books/index.php">Book</a></li>
                                    <li><a href="../Birthday/index.php">Birthday</a></li>
                                    <li><a href="Views/BITM/SEIP116718/Textarea/index.php">Textarea</a></li>
                                    <li><a href="Views/BITM/SEIP116718/Email/index.php">Email</a></li> 
                                    <li><a href="Views/BITM/SEIP116718/Profile/index.php">Profile Picture</a></li>
                                    <li><a href="Views/BITM/SEIP116718/Gender/index.php">Gender</a></li>
                                    <li><a href="Views/BITM/SEIP116718/Checkbox/index.php">Checkbox</a></li> 
                                    <li><a href="Views/BITM/SEIP116718/Select/index.php">Select</a></li> 
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
        <div class="table_area create_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover" boder = 1>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Select</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tr>
                                    <td><?php echo $oneshow['id']?></td>
                                    <td><?php echo $oneshow['title']?></td>
                                    <td><?php echo $oneshow['create_at']?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $oneshow['id']?>"><i class="fa fa-pencil-square-o fontedit"></i></a> |
                                        <a href="softdelete.php?id=<?php echo $oneshow['id']; ?>"><i class="fa fa-trash fontedit"></i></a> 
                                    </td>
                                </tr>
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
                                    <li><a href="">Atomic Project <i class="fa fa-copyright"></i> <?php echo date("Y");?> | Developed by Rakib Hossain</a></li>   
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

