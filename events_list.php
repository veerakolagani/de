<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Events List</title>
<link rel="stylesheet" type="text/css" href="css/eventlist.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/custom.js"></script>
</head>

<body style="background:#f5f5f5;">
	<div id="ed-event-page-header">
    <div class="ed-event-page-header-in">
      <div class="row">
      <div class="col-sm-6 col-xs-12">
			<div id="mySidenav" class="sidenav ">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Events</a>
  <a href="#">Movies</a>
  <a href="#">Sports</a>
  <a href="#">Concerts</a>
  <a href="#">Artists</a>
  <a href="#">Venues</a>
</div>
<div  class="side-button" onclick="openNav()">&#9776;</div>
</div>
<div class="col-sm-6 col-xs-12">
<ul class="right-nav"> 
        <li ><a href="#" ><span class="fa fa-search"></span></a>
          <ul>
            <li><a href="#" ><input class="search-drop" type="text" placeholder="Search.."></a></li>
        </ul>
        </li>
         <li ><a href="#" ><span class="fa fa-sign-in"></span></a>
		   <ul class="signin">
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Login</a></li>
            
        </ul>
		 </li>
           <li ><a href="#" ><span class="fa fa-map-marker"></span></a></li>
            <li ><a href="#" ><span class="fa fa-bell"></span></a></li>
      </ul>
</div>
</div></div>
</div>

<?php $link = mysqli_connect("localhost", "deccanmain", "Deccanbrain@6245", "deccan_brain");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


   $sql = 'SELECT * from event';

   $retval = mysqli_query($link,$sql);

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {?>
<br><br><br>
<div class="container common-st">
<div class="row">
<div class="col-md-2">
<a href="display.php?id=<?php echo $row['id']?>"><span class="event-img"><img src="<?php echo $row['event_photo']?>"></span></a>
</div>
<div class="col-md-10"><b><?php echo $row['event_name'];?></b><br><?php echo $row['venue_name'];?><br><?php echo $row['about_event'];?></div>
</div>
</div>
<?php }
mysqli_close($link);
?>
</body>
</html>