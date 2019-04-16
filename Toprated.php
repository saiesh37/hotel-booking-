<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="vishaka valley";
       header("Location:book.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="Oberoi";
       header("Location:book.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="ITC hotels";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="The tajhotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="ITDC hotels";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="Manor hotel";
       header("Location:book.php");                                                           
}

?>
<html>
	<head>
		<title>HOTELS</title>
		<link href="css/Breakfast.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>TYPES</p>
                     <ul>
                          <a href="Toprated.php"><li class="highlight">TopRated</li></a>
                           <a href="Highprice.php"><li class="nonhighlight">Highprice</li></a>
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
                                                 <p>Vishaka Valley</p>
                                                 <img src="img/breakfast/vv.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=book />
                                                 </form>    
                                       </li>
                                       <li>
                                                 <p>Oberoi hotels</p>
                                                 <img src="img/breakfast/ob.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>ITC hotels</p>
                                                 <img src="img/breakfast/itc.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=book />
                                                 </form>
                                       </li>
                                       
                                       <li>
                                                 <p>The tajhotel</p>
                                                 <img src="img/breakfast/taj.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>ITDC hotels</p>
                                                 <img src="img/breakfast/itdc.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Manor hotel</p>
                                                 <img src="img/breakfast/manor.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=book />
                                                 </form>
                                       </li>
                                       
                                       <!--<li>
                                                 <p>idli</p>
                                                 <img src="img/8.jpg" />
                                                 <button>order</button>
                                       </li>-->
                                   </ul>
                         </div>
                     </div>
              </div>
	</body>
</html>