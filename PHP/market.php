<?php

session_start();

$username = $_SESSION["username"] ;

//connect to the database
 mysql_connect("localhost","root","");
 mysql_select_db("belogin");
 
 $sql = "SELECT * FROM `user` WHERE username like '$username'";
 
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);

//die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>AgroConsultant: A Farmer's Assistant</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
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
    <style type="text/css">
        body
        {
            font-family: Arial;
            
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin:auto;
            font-size: 10pt;
            font-weight: bold;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border-color: #ccc;
        }
    </style>

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
                    <br><br>
                   
                   <!-- <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>-->
                </ul>
                <!--<div class="center p-20">
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
                        <h4 class="page-title">Fair Market</h4> </div>
                         <div align="right" id="google_translate_element"></div>
                    <!--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Blank Page</li>
                        </ol>
                    </div>-->
                    <!-- /.col-lg-12 -->
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                    <table id="tblCustomers" cellpadding="0" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>Farmer Username</th>
                            <th>Item for sale</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                            <th>Order Placed By</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><input type="text" id="txtName" /></td>
                            <td><input type="text" id="txtitem" /></td>
                            <td><input type="text" id="txtquantity" /></td>
                            <td><input type="text" id="txtprice" /></td>
                            <td><input type="button" onclick="Add()" value="Add" /></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    </table>
                </div>
                </div>
               
            </div>
            <!-- /.container-fluid -->
            <!--<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>-->
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- for table -->
    <script type="text/javascript">
        window.onload = function () {
            //Build an array containing Customer records.
            var customers = new Array();
            customers.push(["John Hammond", "Wheat", "10", "5000"]);
            customers.push(["Mudassar Khan", "rice", "10", "5000"]);
            customers.push(["Suzanne Mathews", "pulses", "10", "5000"]);
            customers.push(["Robert Schidner", "sugarcane", "10", "5000"]);

            //Add the data rows.
            for (var i = 0; i < customers.length; i++) {
                AddRow(customers[i][0], customers[i][1], customers[i][2], customers[i][3]);
            }
        };

        function Add() {
            var txtName = document.getElementById("txtName");
            var txtCountry = document.getElementById("txtitem");
            var txtquantity = document.getElementById("txtquantity");
            var txtprice = document.getElementById("txtprice");
            AddRow(txtName.value, txtCountry.value, txtquantity.value, txtprice.value);
            txtName.value = "";
            txtitem.value = "";
            txtquantity.value = "";
            txtprice.value = "";
        };

        function Remove(button) {
            //Determine the reference of the Row using the Button.
            var row = button.parentNode.parentNode;
            var name = row.getElementsByTagName("TD")[0].innerHTML;
            if (confirm("Do you want to delete: " + name)) {

                //Get the reference of the Table.
                var table = document.getElementById("tblCustomers");

                //Delete the Table row using it's Index.
                table.deleteRow(row.rowIndex);
            }
        };
        
        var user_ka_naam, user_ka_phone;
        user_ka_naam='<?php echo $row["name"];?>';
        user_ka_naam=user_ka_naam.trim().toString();
        user_ka_phone='<?php echo $row["contact"];?>';
        user_ka_phone=user_ka_phone.trim().toString();

        function Buy(button) {
            //Determine the reference of the Row using the Button.
            var row = button.parentNode.parentNode;
            var item = row.getElementsByTagName("TD")[1].innerHTML;
            var name = row.getElementsByTagName("TD")[0].innerHTML;
            if(confirm("Do you want to buy: " + item + " from "+name)){
            var person = prompt("Please enter your name", user_ka_naam);
            var person = person.concat(" : ");
            var contact = prompt("Please enter your contact", user_ka_phone);
            if (person != null && contact!=null) {
                var x = button.parentNode.parentNode;
                x.bgColor = "Yellow";
                cell = x.insertCell(-1);
                cell.innerHTML = person.concat(contact);
                button.disabled = true;
                var array= new Array(2);
                array[0]=user_ka_naam;
                array[1]=user_ka_phone;
                var aa= JSON.stringify(array);
                 $.ajax({
                 url: 'sendsms.php', 
                 type: "POST",
                 data: ({This_Key: aa}),
                 success: function(result)
                    {
                        console.log(result);
                    }
        
    });  
                
            }
        }
        };
        



        function AddRow(name, country, quantity, price) {
            //Get the reference of the Table's TBODY element.
            var tBody = document.getElementById("tblCustomers").getElementsByTagName("TBODY")[0];

            //Add Row.
            row = tBody.insertRow(-1);

            //Add Name cell.
            var cell = row.insertCell(-1);
            cell.innerHTML = name;

            //Add Country cell.
            cell = row.insertCell(-1);
            cell.innerHTML = country;

            cell = row.insertCell(-1);
            cell.innerHTML = quantity;

            cell = row.insertCell(-1);
            cell.innerHTML = price;

            //Add Button cell.
            cell = row.insertCell(-1);
            var btnRemove = document.createElement("INPUT");
            btnRemove.type = "button";
            btnRemove.value = "Remove";
            btnRemove.setAttribute("onclick", "Remove(this);");
            cell.appendChild(btnRemove);

            cell = row.insertCell(-1);
            var btnBuy = document.createElement("INPUT");
            btnBuy.type = "button";
            btnBuy.value = "Buy";
            btnBuy.setAttribute("onclick", "Buy(this);");
            cell.appendChild(btnBuy);
        }
    </script>
    
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
