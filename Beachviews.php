<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="The Park";
       header("Location:book.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="Beach Resort";
       header("Location:book.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="The Gateway";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="Palm Beach";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="Water hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="Saipriya hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="Hotel Rio";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="TaiTai hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="Reboot hotel";
       header("Location:book.php");                                                           
}

?>
<html>
	<head>
		<title>HOTELS</title>
		<link href="css/Soups.css" rel="stylesheet"/>
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
                        <a href="Dashboard.php"><button class="dash" type=submit>DASHBOARD</button></a>
                         <a href="location.php"><button class="location" type=submit><img src="img/location.jpg" width=100% /></button></a>
                          <!--a href="cart.php"><button class="cart" type=submit><img src="img/cart.png" width=100% /--></button></a>
                         <a href="login.php"><button class="out" type=submit>Sign out</button></a>
	              	</div>
                     <div class="menuitems">
                         <img src="img/dashboard_background.jpg" />
                          <div class="background">
                          
                          </div>
                         <div class="front">
                                   <ul>
                                       <li>
                                                 <p>The Park</p>
                                                 <img src="img/park.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Beach Resort</p>
                                                 <img src="img/beach.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>The Gateway hotel</p>
                                                 <img src="img/gateway.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Palm Beach</p>
                                                 <img src="img/palm.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Water hotel</p>
                                                 <img src="img/water.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Saipriya hotel</p>
                                                 <img src="img/sp.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Hotel Rio</p>
                                                 <img src="img/rio.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>TaiTai hotel</p>
                                                 <img src="img/taitai.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Reboot hotel</p>
                                                 <img src="img/re.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit9" value=book />
                                                 </form>
                                       </li>
                                       
                                       
                                   </ul>
                         </div>
                     </div>
              </div>
	</body>
</html>