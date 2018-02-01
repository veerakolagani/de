<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Events Page</title>
<link rel="stylesheet" type="text/css" href="css/display.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/custom.js"></script>

</head>


<?php $id=($_GET['id']);

 $link = mysqli_connect("localhost", "deccanmain", "Deccanbrain@6245", "deccan_brain");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
   $sql = 'SELECT * from event where id="'.$id.'"';
  
   $retval = mysqli_query($link,$sql);

   $row = mysqli_fetch_array($retval, MYSQLI_ASSOC) ;
   
   $sql1 = 'SELECT * from artist where event_id="'.$id.'"';
  
   $retval1 = mysqli_query($link,$sql1);
  
   
   $sql2 = 'SELECT * from ticket where event_id="'.$id.'"';
  
   $retval2 = mysqli_query($link,$sql2);
   $retval3 = mysqli_query($link,$sql2);

   mysqli_close($link);
?>
         
<body style="background:#f5f5f5;">
	<div id="ed-event-page-banner"><img class="event_photo" src="<?php echo $row['event_photo']?>"></div>
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
<div class="banner-bottom-strip">
<div class="container common-st">
<div class="row">
<div class="col-sm-8 col-xs-12">
<div class="date-main">
<time datetime="" class="date-as-calendar position-pixels">

<?php $date = date_create($row['start_date']);?>
<span class="day"><?php echo date_format($date, 'd');?><sup>th</sup></span>
<span class="weekday"><?php echo date_format($date, 'l');?></span>
<span class="month"><?php echo date_format($date, 'M');?></span><br>
</div>
<h1 class="event-title"><?php echo $row['event_name']?></h1>
<p class="event-tag"><?php echo $row['venue_name']?> |
<?php echo $row['start_time'];?>Onwards</p>
</div>
<div class="col-sm-4 col-xs-12">
<div class="social-top">
<a href="#" class="fa-new fa fa-facebook"></a>
<a href="#" class="fa-new fa fa-twitter"></a>
<a href="#" class="fa-new fa fa-google"></a>
<!--<a href="#" class="fa-new fa fa-linkedin"></a>
<a href="#" class="fa-new fa fa-youtube"></a>
<a href="#" class="fa-new fa fa-instagram"></a>-->
<button type="button" class="btn btn-large btn-primary add-calender " >+ Add to Calender</button>
</div>
</div>
</div>
</div>
</div>

<div class="container common-st">
<div class="row common-st-new">
<div class="col-sm-8 col-xs-12">
<div class="inner-common-box">
<h1>Buy Tickets</h1>
<?php while($row2 = mysqli_fetch_array($retval2, MYSQLI_ASSOC)) {?>
<div class="ticket-box">
<div class="row">
<div class="col-sm-6 col-xs-12"><?php echo $row2['ticket_name'];?><br><span>Includes Rs. 250 (Entry) + Rs. 500(Cover)</span></div>
<div class="col-sm-6 col-xs-12 ticket-right">
<div class="details">
Rs<span class="price" id="price"><?php echo $row2['ticket_price'];?></span>X</div>
</div>
</div>
</div>
<?php
}?>
</div>
</div>
<div class="col-sm-4 col-xs-12">
<div class="inner-common-box">
<h2>Booking Summary</h2>
<?php while($row3 = mysqli_fetch_array($retval3, MYSQLI_ASSOC)) {?>
<div class="ticket-box-finial">
<div class="row">
<div class="col-sm-6 col-xs-12 booking-finial"><?php echo $row3['ticket_name'];?> </div>
<div class="col-sm-6 col-xs-12 ticket-right booking-finial">Rs<span class="final-price" id="final-price" ><?php echo $row3['ticket_price'];?></span></div>
</div>
</div>
<?php
}?>

<div class="ticket-box-finial1">
<div class="row">
<div class="col-sm-6 col-xs-12 booking-finial">Sub Total </div>
<div class="col-sm-6 col-xs-12 ticket-right booking-finial">Rs 1500</div>
</div></div>
<button type="button" class="btn btn-large btn-primary makepay " >MAKE PAYMENT</button>

</div>
</div>
</div>
</div>

<div class="container common-st">
<div class="row common-st-new">
<div class="col-sm-12 col-xs-12">
<div class="inner-common-box">
         <div class="tabs">
    <input type="radio" name="tab" id="tab1" checked="checked">
    <label for="tab1">About Event</label>
    <input type="radio" name="tab" id="tab2">
    <label for="tab2">Artist Info</label>
    <input type="radio" name="tab" id="tab3">
    <label for="tab3">Videos</label>
    <input type="radio" name="tab" id="tab4">
    <label for="tab4">T & C</label>
  
    <div class="tab-content-wrapper">
      <div id="tab-content-1" class="tab-content">
        
        <p><?php echo $row['about_event'];?>
		</p>
      </div>
      <div id="tab-content-2" class="tab-content">
        
        <p><?php while($row1 = mysqli_fetch_array($retval1, MYSQLI_ASSOC)) {?>
        <div class="artist-info">
		<div class="row">
		<div class="col-md-2">
		<img class="artist-pic" src="<?php echo $row1['artist_pic'];?>">
		</div>
		<div class="col-md-8">
		<span class="artist-name"><?php echo $row1['artist_name'];?></span><br>
		<span><?php echo $row1['about_artist'];?></span>
		</div>
		</div>
		</div>
        <?php
		 }?>
		</p>
      </div>
      <div id="tab-content-3" class="tab-content">
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mattis nibh, non ornare neque. In bibendum consequat imperdiet. Duis eros ex, vestibulum vel fermentum ut, gravida at turpis. Etiam porta sem dolor, at finibus metus consequat a. Aliquam erat volutpat. Donec sollicitudin metus quis magna faucibus, vitae ultrices libero ultrices. Sed ut dui vitae velit laoreet commodo. Nam suscipit purus a ultricies auctor. </p>
      </div>
      <div id="tab-content-4" class="tab-content">
        
        <p> <?php echo $row['terms_conditions'];?> </p>
      </div>
    </div>
  </div>
			
			
</div>

</div>
</div>
</div>


<div class="container common-st">
<div class="row common-st-new">
<div class="col-sm-12 col-xs-12">
<div class="inner-common-box" style="overflow:auto;">
<h1 class="map">Venue Details <br><span>Venue Details
<?php  echo $row['venue_name'];?>: <?php echo $row['venue_address'];?> |  <?php echo $row['start_time'];?> Onwards</span></h1>
			
<div class="map-display"><iframe src="https://www.google.com/maps/embed/v1/place?q=<?php echo $row['venue_address'];?>&amp;key=AIzaSyDdfDOrsDiObVVshaA69XaLYtU7Zg4GlRw " width="1033" height="275" frameborder="0" style="border:0" allowfullscreen></iframe></div>		
</div>
</div>
</div>
</div>


</body>
</html>
