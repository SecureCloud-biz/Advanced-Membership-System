<?php
/*****************************************************************
*    MDS Installer for Advanced Member System                    *
*    Copyright (c) 2013 MasDyn Studio, All Rights Reserved.      *
*****************************************************************/
$zgxawkqe0="Advanced Member System";$lngdbylq1="3.5";$kzbjcsju2="3";?><!DOCTYPE html><html lang="en"> <head> <meta charset="utf-8"> <title>MDS Installer - <?php echo $zgxawkqe0;?></title> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="author" content="MasDyn Studio"> <!-- The styles --> <link href="css/bootstrap.css" rel="stylesheet"> <link href="css/bootstrap-responsive.css" rel="stylesheet"> <link href="css/custom.css" rel="stylesheet"> <style> body{ margin-top: 5%; } </style> <!-- The HTML5 shim, for IE6-8 support of HTML5 elements --> <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> <script src="js/jquery.js"></script> <script src="js/custom.js"></script> </head> <body> <div class="container"><div class="hero-unit"> <h1>MDS Installer - <?php echo $zgxawkqe0;?> <span class="script_version">v<?php echo $lngdbylq1;?></span></h1> <hr /> <div class="row-fluid center"> <div class="span12"> <img src="img/logo.jpg" alt="Logo"> </div> </div> <hr /> <div class="row-fluid center"> <div class="span12"> <label>Thank You for purchasing <?php echo $zgxawkqe0;?> from CodeCanyon. If you have any questions or would like support, please feel free to <a href="http://www.masdyn.com/support/">Contact Us</a>.</label> </div> </div> <hr /> <div class="row-fluid center"> <div class="span6" style="margin-top: -21px;padding: 15px;float: left;"> <a href="#upgrade" data-toggle="modal" class="btn btn-link"><h3 style="color: rgb(99, 99, 99);">Upgrade</h3></a> <!-- <h3 style="color: rgb(162, 162, 162);margin-top: 15px;">No Upgrade Available</h3> --> </div> <div class="span6" style="border-left: 1px solid lightgray;margin-top: -21px;padding: 15px;float: right;"> <a href="#install" data-toggle="modal" class="btn btn-link"><h3 style="color: rgb(99, 99, 99);">Fresh Install</h3></a> </div> </div> </div><div id="upgrade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <h3 id="myModalLabel">Upgrade</h3> </div> <div class="modal-body"> Before continuing please make sure that you have done the following: <ul> <li>Backed Up the Target Database if it is not empty.</li> <li>Backed Up All Script Files.</li> </ul> <strong>This installer will NOT delete any data inside of the target database, but to be safe, make sure you have a backup of it.</strong><br /> </div> <div class="modal-footer"> <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> <a href="upgrade.php" class="btn btn-primary">Upgrade</a> </div></div><div id="install" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <h3 id="myModalLabel">Fresh Install</h3> </div> <div class="modal-body"> Before continuing please make sure that you have done the following: <ul> <li>Backed Up the Target Database if it is not empty.</li> </ul> <strong>This installer WILL delete all data inside of the target database, so make sure no other script is using the database you select during the installation wizard.</strong><br /> </div> <div class="modal-footer"> <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button> <a href="install.php" class="btn btn-primary">Install</a> </div></div> <footer> <p style="float:left;">&copy; <?php echo date("Y");?> MasDyn Studio - <a href="http://www.masdyn.com/">MasDyn.com</a></p> <span style="text-align:right;float:right;font-size:12px">Installer Version: <?php echo $kzbjcsju2;?></span> </footer> </div> <!-- /container --> <script src="js/bootstrap.min.js"></script> </body></html>