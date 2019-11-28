<?php

session_start();
$username = $_SESSION["username"] ;


//connect to the database
 mysql_connect("localhost","root","");
 mysql_select_db("belogin");
 
 $sql = "SELECT * FROM `user` WHERE username like '$username'";
 
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
 
 $query = "SELECT * FROM cropsheet WHERE username like '$username'";
 $result1 = mysql_query($query);
 $row1 = mysql_fetch_array($result1);
 
  $query2 = "SELECT * FROM history WHERE username like '$username'";
 $result2 = mysql_query($query2);
 $row2 = mysql_fetch_array($result2);
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>AgroConsultant: A Farmer's Assistant</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="admin.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="admin.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!--<li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>-->
                    <li>
                        <a class="profile-pic" href="#"> <img src="man.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $row["name"]; ?></b></a>
                    </li>
					 <li>
                        <a class="profile-pic" href="logout.php"> <img src="logout.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"></b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User Profile</a>
                    </li>
                    <li>
                        <a href="predictor.php" class="waves-effect"><i class="fa fa-codepen fa-fw" aria-hidden="true"></i>Predictor</a>
                    </li>
                    <li>
                        <a href="notif.php" class="waves-effect"><i class="fa fa-bell fa-fw" aria-hidden="true"></i>Notifications</a>
                    </li>
                    <li>
                        <a href="map.php" class="waves-effect"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>Map View</a>
                    </li>
                     <li>
                        <a href="market.php" class="waves-effect"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>Farmer's Market</a>
                    </li>
                    <li>
                        <a href="submitquery.php" class="waves-effect"><i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>Submit Query</a>
                    </li>
                    <li>
                        <a href="feedback.php" class="waves-effect"><i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>Feedback</a>
                    </li>
                    
                  <!--  <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>-->

                </ul>
               <!-- <div class="center p-20">
                     <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Upgrade to Pro</a>
                 </div>-->
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                        <div align="right" id="google_translate_element"></div>
                  <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
               
              
               
                <!--div class="row" >
                    <div class="col-lg-4 col-sm-6 col-xs-12" style="width:100%;">
                        <div class="white-box analytics-info" >
                            <h3 class="box-title">
                           <?php 
                            //$query = "SELECT MIN(startdate) FROM history WHERE username like '$username'";
                            //$result = mysql_query($query);
                            
                            //$row = mysql_fetch_array($result);
                            //echo $row["crop"];
                            //echo $row["crop"];?> </h3>
                            <h5> (Oct 2017- Dec 2017) Hectares produced </h5>
                           <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                               <li class="text-right"><i class="ti-arrow-up text-purple"></i><span class="counter text-purple">869 </span></li>
                            </ul>
                        </div>
                    </div>                    
                </div> 
              
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                           <h2>CROP INFORMATION SHEET</h2>
                           <center>
                           <div>
                           <img src="cash.png" onclick="ModalDisplayCash()" >
                           <h4><?php echo $row1["cash"];?></h4>
                           </div>
                          
                           <div>
                           <label id="one"></label>
                           </div>
                           <div id="two">
                           </div>
                           <div id="three">
                           </div>
                           <div id="four">
                           </div>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div>
                            <h3 class="box-title">My Yield History</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>CROP</th>
                                            <th>PRODUCTION</th>
                                            <th>SOW DATE</th>
                                            <th>HARVEST DATE</th>
											<th>PROFIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo"><?php echo $row2["crop"];?> </td>
                                            <td class="txt-oflo"><?php echo $row2["production"];?> </td>
                                            <td class="txt-oflo"><?php echo $row2["startdate"];?></td>
                                            <td><span class="txt-oflo"><?php echo $row2["enddate"];?></span></td>
											<td class="txt-oflo"><?php echo $row2["profit"];?> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Wheat</td>
                                            <td class="txt-oflo">1000</td>
                                            <td class="txt-oflo">2016-09-12</td>
                                            <td><span class="txt-oflo">2016-12-12</span></td>
											<td class="txt-oflo">10000 </td>
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Sugarcane</td>
                                            <td class="txt-oflo">3000</td>
                                            <td class="txt-oflo">2016-01-07</td>
                                            <td><span class="txt-oflo">2016-05-01</span></td>
											<td class="txt-oflo">4000</td>
                                        </tr>
                                        </tr>
                                         <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Jute</td>
                                            <td class="txt-oflo">11000</td>
                                            <td class="txt-oflo">2015-09-04</td>
                                            <td><span class="txt-oflo">2016-11-02</span></td>
											<td class="txt-oflo">5000</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                         <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Information Sheet</h3>               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!--<p> You can grow: </p> -->
           <div id="showithere"></div>
               <!--<input type="radio" name="major"  id="wheat" value="wheat"/><i class="fa fa-check fa-fw" aria-hidden="true"></i>Wheat<br><br>
               <input type="radio" name="major" id="rice" value="rice"/><i class="fa fa-check fa-fw" aria-hidden="true"></i>Rice<br><br>
               <input type="radio" name="major" id="sugar" value="sugar"/><i class="fa fa-check fa-fw" aria-hidden="true"></i>Sugar -->
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
           
        </div>
    </div>
</div>
                
         <!----END MODAL--------------> 

                
                <script>
                var cereal, oil, pulses, minor, cash;
				
                cash='<?php echo $row1["cash"]; ?>';
				cash=cash.trim().toString();
				
                cereal='<?php echo $row1["cereals"]; ?>';
                cereal=cereal.trim().toString();
				 
			    oil='<?php echo $row1["oilseeds"]; ?>';
				oil=oil.trim().toString();
				 
			    pulses='<?php echo $row1["pulses"]; ?>';
				pulses=pulses.trim().toString(); 
				   
				minor='<?php echo $row1["minor"]; ?>'
				minor=minor.trim().toString();
				
				
				if (cereal!="null")
                {
                document.getElementById('one').innerHTML="<img src='cereal.png' onclick='ModalDisplayCereal()'>";
                document.getElementById('one').innerHTML= document.getElementById('one').innerHTML+ "<br>"+cereal;
                }
                
                
                if (oil!="null")
                {
                document.getElementById('two').innerHTML="<img src='dash.png' onclick='ModalDisplayOil()'>";
                document.getElementById('two').innerHTML= document.getElementById('two').innerHTML+ "<br>"+oil;
                }
                
               
                if (pulses!="null")
                {
                document.getElementById('three').innerHTML="<img src='pulses.png' onclick='ModalDisplayPulses()'>";
                document.getElementById('three').innerHTML= document.getElementById('three').innerHTML+ "<br>"+pulses;
                }
                
              
                if (minor!="null")
                {
                document.getElementById('four').innerHTML="<img src='minor.png' onclick='ModalDisplayMinor()'>";
                document.getElementById('four').innerHTML= document.getElementById('four').innerHTML+ "<br>"+minor;
                } 
				 
                function ModalDisplayCash()
                {
                   $("#exampleModal").modal('show');
                    //console.log(cer);
                    if (cash == 'Sugarcane')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Sugarcane<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (cash == 'Tobacco')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Tobacco<br><br><h4>Type of Crop</h4><br>Rabi<br><br><h4>Fertilizers required</h4><br>Tomato and Pepper fertilizer<br><br><h4>Diseases which may occur</h4><br>Black Shank<br>Nematodes<br><h4>Pests/Insects which may cause harm</h4><br>Cut Worms<br>Flea Beetles<br>";
                    }  
					if (cash == 'Cotton')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Cotton<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (cash == 'Jute')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Jute<br><br><h4>Type of Crop</h4><br>…<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					
                }
                
				function ModalDisplayCereal()
                {
                   $("#exampleModal").modal('show');
                    //console.log(cer);
                    if (cereal == 'Wheat')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4>Wheat<br><br><h4>Type of Crop</h4>Rabi Crop<br><br><h4>Fertilizers required</h4><br>Magnesium Sulfate(Epsom Salt)<br><br><h4>Diseases which may occur</h4>Barley Yello Dwarf<br>Black Chaff<br><br><h4>Pests/Insects which may cause harm</h4>Brown Wheat Mite <br> Army Worm<br><br><h4>Farm Harvest Price</h4>Rs.5,000/hectares<br><h4>Minimum Support Price</h4>Rs. 2500/hectares";
                    }  
					if (cereal == 'Rice')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Rice<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (cereal == 'Maize')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Maize<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (cereal == 'Barley')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Barley<br><br><h4>Type of Crop</h4><br>Rabi Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (cereal == 'Ragi')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Ragi<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    } 
					if (cereal == 'Bajra')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Bajra<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    } 
					if (cereal == 'Jowar')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Jowar<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    } 
					
                }
				
				function ModalDisplayOil()
                {
                   $("#exampleModal").modal('show');
                    //console.log(cer);
                    if (oil == 'GroundNut')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>GroundNut<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (oil == 'sesamum')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Sesamum<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
                }
               
			   function ModalDisplayPulses()
                {
                   $("#exampleModal").modal('show');
                    //console.log(cer);
                    if (pulses == 'Gram')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Gram<br><br><h4>Type of Crop</h4><br>…<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (pulses == 'Tur Dal')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Tur Dal<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (pulses == 'Other Pulses')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Other Pulses<br><br><h4>Type of Crop</h4><br>…<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
                }
				
				function ModalDisplayMinor()
                {
                   $("#exampleModal").modal('show');
                    //console.log(cer);
                    if (minor == 'Potato')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Potato<br><br><h4>Type of Crop</h4><br>Rabi Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (minor == 'Rapeseed')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Rapeseed<br><br><h4>Type of Crop</h4><br>…<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (minor == 'Soyabean')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Soyabean<br><br><h4>Type of Crop</h4><br>Kharif Crop<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					if (minor == 'Sunflower')
                    {
                        document.getElementById('showithere').innerHTML="<h4>Name of the Crop</h4><br>Sunflower<br><br><h4>Type of Crop</h4><br>…<br><br><h4>Fertilizers required</h4><br>….<br><br><h4>Diseases which may occur</h4><br>….<br><br><h4>Pests/Insects which may cause harm</h4><br>….<br><br>";
                    }  
					
                }
                
                </script>
          
           <footer class="footer text-center"><div id="google_translate_element"></div> </footer>
           

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
