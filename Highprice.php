<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="Hyatt hotel";
       header("Location:book.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="Novotel";
       header("Location:book.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="The Kay";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="Gate hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="The Taj";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="Keys";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="S&N hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="TDC hotel";
       header("Location:book.php");                                                           
}

?>
<html>
	<head>
		<title>HOTELS</title>
		<link href="css/Appetizers.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>TYPES</p>
                     <ul>
                           <a href="Toprated.php"><li class="nonhighlight">TopRated</li></a>
                           <a href="Highprice.php"><li class="highlight">Highprice</li></a>
                           <a href="Beachviews.php"><li class="nonhighlight">Beachviews</li></a>
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
                                                 <p>Hyatt hotel</p>
                                                 <img src="img/appetizer/hyatt.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Novotel</p>
                                                 <img src="img/appetizer/novotel.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>The Kay</p>
                                                 <img src="img/appetizer/kay.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Gate hotel</p>
                                                 <img src="img/appetizer/gate hotel.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>The Taj</p>
                                                 <img src="img/appetizer/the taj.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Keys</p>
                                                 <img src="img/appetizer/keys.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>S&N hotel</p>
                                                 <img src="img/appetizer/sn hotel.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>TDC hotel</p>
                                                 <img src="img/appetizer/tds.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=book />
                                                 </form>
                                       </li>
                                       
                                       
                                   </ul>
                         </div>
                     </div>
              </div>
	</body>
</html>