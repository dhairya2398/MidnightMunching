<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>  
</head>
<body>
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
                            <li><a class="active" href="hotels.php">Menu</a></li>
                            <li><a href="comp.php">Reviews</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Food  <span>Ordering</span></h2>
                </div>
            </div>
        </div>
    </header>
<?php 
$con = mysql_connect("localhost","jjm","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("grp13", $con);?>
    <p style="font-size:40px;font-family:Monospace;color:orange;" align=center><?php echo "Restaurants in your city";?></p><br><br>
    <p style="font-size:30px;font-family:Monospace;color:orange;" align=center><?php echo "Must Try";?></p><br><br>
    <?php 
 $sql1="select * from musttry where r_area = 'ahmedabad'";
 $result1=mysql_query($sql1,$con);
  while($row1 = mysql_fetch_array($result1))
  {
      $rnaam=$row1['r_name'];
      $sql2="select * from restraunt where status=0 AND r_name ='".$rnaam."' ";
      $result2=mysql_query($sql2,$con);
      $row2 = mysql_fetch_array($result2);
                                    $rid=$row2['r_id'];
									$loc=$row2['r_area'];
									$rnam=$row2['r_name'];
									$street=$row2['r_street'];
                                    $del=$row2['ofdv'];
                                    $ophr=$row2['oh'];
                                    $clhr=$row2['ch'];?>
       <li style="font-family:Georgia;font-size:30px;"><a style="color:white;" href="order.php?id=<?php echo $rid; ?>"><?php echo $rnam?></a>
                        <br> <?php   if($del == 'Y'){  ?>
                                     <p style="font-size:20px;"> <?php echo "Offers Delivery";
                                   }
                                    else{ ?>
                                   <p style="font-size:20px;"> <?php echo "Does not deliver";}
                                 ?>         
            
                        <p style="font-size:20px;"> <?php 
                            echo "Timings : ";
                                echo $ophr ; 
                            echo "  to  ";
                            echo $clhr;   ?> </p>
					  <p style="font-size:20px;"><i>&nbsp-<?php echo $street?></i>
                          <hr color="white" width="30%" align="left">
                          <?php } ?></li>
                                    </p></p>
 
    

 <li style="font-size:30px;font-family:Monospace;color:orange" align=center><?php echo "Restaurants Currently Open";?></p><br><br>   
<?php
$crtime=date("H");

$sql="select * from restraunt where status=0 AND ".$crtime." >= oh AND ".$crtime." < ch";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 

?>
 
								<div class="extra-wrap" align="center">
                                   
                                    <li class="price-list p2" align="center" style="display:block;color:white;font-size:30px;">
                                     <?php
										$result=mysql_query($sql,$con);
								  while($row = mysql_fetch_array($result))
								{
									$rid=$row['r_id'];
									$loc=$row['r_area'];
									$rnam=$row['r_name'];
									$street=$row['r_street'];
                                    $del=$row['ofdv'];
                                    $ophr=$row['oh'];
                                    $clhr=$row['ch'];
									$s1="ahmedabad";
                                   if(strcmp($loc,$s1)==0)
                                   {?>
                      <p style="font-family:Georgia;font-size:30px;"><a style="color:white;text-align=center;" href="order.php?id=<?php echo $rid; ?>"><?php echo $rnam?></a>
                        <br> <?php   if($del == 'Y'){  ?>
                                     <p style="font-size:20px;color:white;"> <?php echo "Offers Delivery";
                                   }
                                    else{ ?>
                                   <p style="font-size:20px;color:white;"> <?php echo "Does not deliver";}
                                       ?>   </p>      
            
                        <p style="font-size:20px;"> <?php 
                            echo "Timings : ";
                                echo $ophr ; 
                            echo "  to  ";
                            echo $clhr;   ?> </p>
					  <p style="font-size:20px;"><i>&nbsp-<?php echo $street?></i>
                          <hr color="white" width="50%" align="center">
                          <?php }} ?></li>
                                    </p></p>
                    
 </div>
 <!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
    <script type="text/javascript"> 
	Cufon.now(); 	
	</script>


</body>
</html>