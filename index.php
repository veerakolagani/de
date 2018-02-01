<?php

include 'db/config.php';


$eventname = mysqli_real_escape_string($link, $_REQUEST['event_name']);
$venuename = mysqli_real_escape_string($link, $_REQUEST['venue_name']);
$venueaddress = mysqli_real_escape_string($link, $_REQUEST['venue_address']);
$aboutevent = mysqli_real_escape_string($link, $_REQUEST['about_event']);
$ispublicprivate = mysqli_real_escape_string($link, $_REQUEST['is_public_private']);
$termsconditions = mysqli_real_escape_string($link, $_REQUEST['terms_conditions']);
$category = mysqli_real_escape_string($link, $_REQUEST['event_category']);
$subcategory = mysqli_real_escape_string($link, $_REQUEST['event_sub_category']);
$isaccept = mysqli_real_escape_string($link, $_REQUEST['is_accept']);
$start_date = mysqli_real_escape_string($link, $_REQUEST['start_date']);
$startdate=date("Y-m-d", strtotime($start_date));
$starttime = mysqli_real_escape_string($link, $_REQUEST['start_time']);
$end_date = mysqli_real_escape_string($link, $_REQUEST['end_date']);
$enddate=date("Y-m-d", strtotime($end_date));
$endtime = mysqli_real_escape_string($link, $_REQUEST['end_time']);

$ticketPrice = $_POST['ticket_price'];
foreach($_POST['ticket_name'] as $key => $ticketname){
$tPrice = ($ticketPrice[$key]); 
$ticketDescription = $_POST['ticket_description'];
if($_POST['ticket_description']){
	$ticketdescription = ($ticketDescription[$key]);
}
else{
	$ticketdescription = "";
}

$ticketStartDate = $_POST['ticket_start_date'];
if($_POST['ticket_start_date']){
	$ticketstartdate = date("Y-m-d", strtotime($ticketStartDate[$key]));  
}
else{
	$ticketstartdate = "";
}

$ticketStartTime = $_POST['ticket_start_time'];
if($_POST['ticket_start_time']){
	$ticketstarttime = ($ticketStartTime[$key]);
}
else{
	$ticketstarttime = "";
}

$ticketEndDate= $_POST['ticket_end_date'];
if($_POST['ticket_end_date']){
	$ticketenddate = date("Y-m-d", strtotime($ticketEndDate[$key])); 
}
else{
	$ticketenddate = "";
}
$ticketEndTime = $_POST['ticket_end_time'];
if($_POST['ticket_end_time']){
	$ticketendtime = ($ticketEndTime[$key]);
}
else{
	$ticketendtime = "";
}
$noOfTickets = $_POST['no_of_tickets'];
if($_POST['no_of_tickets']){
	$nooftickets = ($noOfTickets[$key]);
}
else{
	$nooftickets = "";
}
$sql = "INSERT INTO ticket (ticket_name,ticket_price,ticket_description,ticket_start_date,ticket_start_time,ticket_end_date,ticket_end_time,no_of_tickets) VALUES ('$ticketname','$tPrice','$ticketdescription','$ticketstartdate','$ticketstarttime','$ticketenddate','$ticketendtime','$nooftickets')"; $sql;
mysqli_query($link, $sql);
}

$artistFileName =$_FILES['artist_photo']['name'];
$artistTmp =$_FILES['artist_photo']['tmp_name'];
$artistDes = $_POST['about_artist'];
$artistName = $_POST['artist_name'];


foreach($artistDes as $key=>$about_artist){
 $fileName1=($artistFileName[$key]);
 $fileTmp1=($artistTmp[$key]);
 $artistname=($artistName[$key]);
 move_uploaded_file($fileTmp1,"artist/".$fileName1);
 $sql = "INSERT INTO artist (artist_name,about_artist,artist_pic) VALUES ('$artistname','$about_artist','$fileName1')";
 mysqli_query($link, $sql);
}

 if(isset($_FILES['image'])){
	   
	  $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
	  $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
   
      if($file_size > 2097152){
         $errors[]='File size must be exactly 2 MB';
      }
      
      if(empty($errors)==true){
         $filePath="uploads/".$file_name;
		 move_uploaded_file($file_tmp,"uploads/".$file_name);
      }else{
         print_r($errors);
      }
   }
  
  
$sql = "INSERT INTO event (event_photo,event_name,venue_name,venue_address,about_event,terms_conditions,event_category,event_sub_category,is_accept,is_public_private,start_date,start_time,end_date,end_time) VALUES ('$filePath','$eventname', '$venuename','$venueaddress','$aboutevent', '$termsconditions','$category','$subcategory','$isaccept','$ispublicprivate','$startdate','$starttime','$enddate','$endtime')";
if(mysqli_query($link, $sql)){
    echo "event added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>