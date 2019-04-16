<?php
include('db.php');
session_start();

if(isset($_POST["submit1"]))
 {
       $_SESSION["getitem"]="TajMahal";
       header("Location:book.php");
}
if(isset($_POST["submit2"]))
{      
       $_SESSION["getitem"]="Taj Falaknum";
       header("Location:book.php");                                         
}
if(isset($_POST["submit3"]))
{
       $_SESSION["getitem"]="Umaid Bhavan";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit4"]))
{
       $_SESSION["getitem"]="Lodhi";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit5"]))
{
       $_SESSION["getitem"]="Taj Exotica";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit6"]))
{
       $_SESSION["getitem"]="Novotel";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit7"]))
{
       $_SESSION["getitem"]="BKC hotels";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit8"]))
{
       $_SESSION["getitem"]="Fortune Inn ";
       header("Location:book.php");                                                           
}
if(isset($_POST["submit9"]))
{
       $_SESSION["getitem"]="Winsar park";
       header("Location:book.php");                                                           
}

?>
<html>
	<head>
		<title>HOTELS</title>
		<link href="css/Pizzas.css" rel="stylesheet"/>
	</head>
	<body>
              <div class="slider">
                     <p>TYPES</p>
                     <ul>
                          <a href="Toprated.php"><li class="nonhighlight">TopRated</li></a>
                           <a href="Highprice.php"><li class="nonhighlight">Highprice</li></a>
                           <a href="Beachviews.php"><li class="nonhighlight">Beachviews</li></a>
                           <a href="Lowprices.php"><li class="nonhighlight">Lowprices</li></a>
                           <a href="5star.php"><li class="highlight">5star</li></a>
                          
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
                                                 <p>TajMahal</p>
                                                 <img src="img/tajmahal.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit1" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Taj Falaknuma</p>
                                                 <img src="img/falak.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit2" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Umaid Bhavan</p>
                                                 <img src="img/umlad.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit3" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Lodhi</p>
                                                 <img src="img/lodhi2.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit4" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Taj Exotica</p>
                                                 <img src="img/exotica.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit5" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Novotel</p>
                                                 <img src="img/novotel.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit6" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>BKC hotels</p>
                                                 <img src="img/bkc.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit7" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Fortune Inn</p>
                                                 <img src="img/fortune.jpg" />
                                                 <form method="post">
                                                        <input class="submit" type=submit name="submit8" value=book />
                                                 </form>
                                       </li>
                                       <li>
                                                 <p>Winsar park</p>
                                                 <img src="img/winsar.jpg" />
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