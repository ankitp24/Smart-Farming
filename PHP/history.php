<?php

session_start();
$username = $_SESSION["username"];
$user1 = $_GET["usr"];


//connect to the database
 mysql_connect("localhost","root","");
 mysql_select_db("belogin");
 
 $sql = "SELECT * FROM `user` WHERE username like '$username'";
 
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
 
 
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>AgroConsultant: A Farmer's Assistant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<!--script  language="Javascript" type="text/javascript">
                var counter = 1;
                var limit = 5;
                function addInput(divName){
                    if (counter == limit)  {
                        alert("You have reached the limit of adding " + counter + " inputs");
                    }
                    else {
                        var newdiv = document.createElement('div');
                        newdiv.innerHTML =" ";
                        document.getElementById(divName).appendChild(newdiv);
                        counter++;
                    }
                }
</script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
				<img src="farmer.png"/>
                <br>
                <img src="logo.png"/>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper" >
                        <div id="login" class="animate form" >
                            <form  action="historystore.php" method="POST"> 
                                <h1>Enter Your previous harvest history
								</h1> 
								<p> 
                                    <label  class="uname" data-icon="u" > UserName</label>
                                    <input id="username" name="username" required="required" readonly type="text" value=<?php echo "$user1"; ?>  />
                                </p>
                                <p> 
                                    <label  class="uname" data-icon="u" > Crop Cultivated </label>
                                    <input id="crop" name="crop" required="required" type="text" placeholder="Enter the crop name"/>
                                </p>
                                <p> 
                                    <label  class="youpasswd" data-icon="p"> Production </label>
                                    <input id="production" name="production" required="required" type="text" placeholder="Enter the production obtained" /> 
                                </p>
								<p> 
                                    <label  class="uname" data-icon="u" > Start Date </label>
                                    <input id="startdate" name="startdate" required="required" type="date" placeholder="Enter the sow date"/>
                                </p>
								<p> 
                                    <label  class="uname" data-icon="u" > End Date </label>
                                    <input id="enddate" name="enddate" required="required" type="date" placeholder="Enter the harvest date"/>
                                </p>
								<p> 
                                    <label  class="uname" data-icon="u" > Profit </label>
                                    <input id="profit" name="profit" required="required" type="text" placeholder="Enter the profit obtained"/>
                                </p>
								<p> 
                                    <label  class="uname" data-icon="u" > Area under cultivation </label>
                                    <input id="area" name="area" required="required" type="text" placeholder="Enter the area under construction"/>
                                </p>
                 
                               
                                <p class="login button"> 
                                    <input type="submit" id="submit" name="submit" value="Submit"/> 
								</p>
								
                               
                                
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>

