<?php
include('db.php');
session_start();
?>
<html>
	<head>
		<title>Dashboard</title>
		<link href="css/Dashboard.css" rel="stylesheet"/>
              <?php
              $forname=$_SESSION['welcome'];
              $extract=mysqli_query($my,"select * from users where email='$forname'");
              $name=mysqli_fetch_assoc($extract);
              $welcome=$name["firstname"];
              ?>
             
	</head>
	<body>
              <div class="slider">
                     <p>TYPES</p>
                     <ul>
                           <a href="Toprated.php"><li class="nonhighlight">TopRated</li></a>
                           <a href="Highprice.php"><li class="nonhighlight">Highprice</li></a>
                           <a href="Beachviews.php"><li class="highlight">Beachviews</li></a>
                           <a href="Lowprices.php"><li class="nonhighlight">Lowprices</li></a>
                           <a href="5star.php"><li class="nonhighlight">5star</li></a>
                     </ul>
              </div>
              <div class="menu">
		       <div class="header">
                         <div class="upper">
                             <label class=welcome><?php echo "Welcome $welcome"; ?></label>
                         </div>
                         <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                         <ul>
                         <li><a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a></li>
                         <!--li><a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /></button></a></li-->
                         <li><a href="login.php"><button class="out" type=submit>Sign out</button></a></li>
                         </ul>
	              	</div>
                     <div class="menuitems">
                         <img src="img/dashboard_background.jpg" />
                         <div class="background">
                    
                         </div>
                         <div class="scrolltext">
                                   <p>HOTELS</p>
                         </div>
                         <div class="scroll">
                                   <marquee onmouseover="this.stop();" onmouseout="this.start();">
                                                 <a href="Toprated.php"><li><img src="img/novotel.jpg"/></li></a>
                                                 <a href="Toprated.php"><li><img src="img/park.jpg"/></li></a>
                                                 <a href="Lowprices.php"><li><img src="img/rajadhani.jpg"/></li></a>
                                                 <a href="Highprice.php"><li><img src="img/appetizer/tds.jpg"/></li></a>
                                   </marquee>
                                   <marquee direction=right onmouseover="this.stop();" onmouseout="this.start();"></a>
                                                 <a href="Highprice.php"><li><img src="img/appetizer/the taj.jpg"/></li></a>
                                                 <a href="Highprice.php"><li><img src="img/appetizer/keys.jpg"/></li></a>
                                                 <a href="Toprated.php"><li><img src="img/ob.jpg"/></li></a>
                                                 <a href="Lowprices.php"><li><img src="img/lorven.jpg"/></li></a>
                                   </marquee>
                                   <marquee onmouseover="this.stop();" onmouseout="this.start();"></a>
                                                 <a href="Lowprices.php"><li><img src="img/ginger.jpg"/></li></a>
                                                 <a href="Beachviews.php"><li><img src="img/sp.jpg"/></li></a>
                                                 <a href="Toprated.php"><li><img src="img/itdc.jpg"/></li></a>
                                                 <a href="Toprated.php"><li><img src="img/manor.jpg"/></li></a>
                                   </marquee>
                         </div>
                     </div>
              </div>
	</body>
</html>