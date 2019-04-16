<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="The Ginger";
       header("Location:book.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="Villa56";
       header("Location:book.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="Treebo";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="Rajadhani";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="Rockdale";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="Hotel Lorven";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="layer hotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="clarkk";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="Green Park";
       header("Location:book.php");                                                           
}

?>
<html>
	<head>
		<title>HOTELS</title>
		<link href="css/Biryanis.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>TYPES</p>
                     <ul>
                          <a href="Toprated.php"><li class="nonhighlight">TopRated</li></a>
                           <a href="Highprice.php"><li class="nonhighlight">Highprice</li></a>
                           <a href="Beachviews.php"><li class="nonhighlight">Beachviews</li></a>
                           <a href="Lowprices.php"><li class="highlight">Lowprices</li></a>
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
                                                 <p>The Ginger</p>
                                                 <img src="img/ginger.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Villa56</p>
                                                 <img src="img/villa.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Treebo</p>
                                                 <img src="img/treebo.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Rajadhani</p>
                                                 <img src="img/rajadhani.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Rockdale</p>
                                                 <img src="img/rockdale.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Hotel Lorven</p>
                                                 <img src="img/lorven.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>layer hotel</p>
                                                 <img src="img/layer.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>clarkk</p>
                                                 <img src="img/clark.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Green Park</p>
                                                 <img src="img/gp.jpg" />
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