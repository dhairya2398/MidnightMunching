<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
	

</head>
<body id="page6">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
            <?php
            session_start();
            if(isset($_SESSION['name']) && !empty($_SESSION['name']) && $_SESSION["logout"] == 0){ 
            ?>
                 &nbsp;&nbsp;<a href="logout.php"><strong>Logout</strong></a>
                 <a href="user.php" style="float:right;"><strong>My Profile</strong></a>
          <?php  }
            ?>            

        	<div class="main">
            
            	<div class="wrapper">
                	<h1><a href="index.html">Midnight Munching</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="hotels.php">Menu</a></li>
                            <li><a href="comp.php">Reviews</a></li>
                            <li><a class="active" href="contact.html">Contact</a></li>
                        </ul>
 
                    </nav>
                   
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food  <span>Delivery</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
        <div class="wrapper">
        <article class="col-2">
              <?php  
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $sql="select *from grp13.complaint";
  $r=mysql_query($sql,$con);
  while($row=mysql_fetch_array($r))
  {
	$n=$row['cname']; 
	$c=$row['comp']; 
  ?>
           <table><tr><td><font size="14"><h3 class="p1">
           <?php echo $n;?></font></h3></td></tr>
           <tr><td><?php echo $c;?></td></tr><tr><td>&nbsp;</td></tr>
        <?php }?></table></article></div></div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
