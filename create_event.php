   <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Event</title>
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.timepicker.css" />
<script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker.css" >
<script src="bootstrap/js/datepair.js"></script>
<script src="bootstrap/js/jquery.datepair.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.1.19/css/materialdesignicons.min.css" />
<script src="js/event.js"></script>
<script>

</script>
</head>
<?php
if(isset($_POST['preview'])){
  
	 $imagefile =array("file_name" => $_FILES['image']['name'],
      "file_size" =>$_FILES['image']['size'],
	  "file_tmp" =>$_FILES['image']['tmp_name'],
      "file_type"=>$_FILES['image']['type']);
  

	$values=array("event_name"=>$_POST['event_name'],"venue_name"=>$_POST['venue_name'],
	"venue_address"=>$_POST['venue_address'],"start_date"=>$_POST['start_date'],"start_time"=>$_POST['start_time'],
	"end_date"=>$_POST['end_date'],"end_time"=>$_POST['end_time'],"terms_conditions"=>$_POST['terms_conditions'],"about_event"=>$_POST['about_event']);
   
	
	$ticketname=$_POST['ticket_name'];
	$ticketprice=$_POST['ticket_price'];
	$artistvalues=array("artist_name"=>$_POST['artist_name'],"artist_photo"=>$_POST['artist_photo'],"about_artist"=>$_POST['about_artist']);
	$query = http_build_query(array('imagefile'=>$imagefile,'param' => $values,'artistvalues'=>$artistvalues,'ticketname'=>$ticketname,'ticketprice'=>$ticketprice));
	$query2=urlencode($query);
    echo "<script>window.location = 'preview.php?name=$query2';</script>";
}
if(isset($_POST['submit'])){
require_once "index.php";	
}
?>

<div id="container">

<form  action="" id="event" method="post" enctype="multipart/form-data" class="create-event-form">
  <label class="mr-sm-2" for="inlineFormCustomSelect">Event Host</label>
  <input type="text" class="custom-select-event mb-2 mr-sm-2 mb-sm-0" id="" value="DJ Naik" disabled>
 
  <input type="file" class="event_photo" id="event_photo" name="image" onchange="readURL(this);"/>
  <div class="add-event-pic">
   <label class="event-pic" for="event_photo">Add Event Photo</label>
   <div class="change-container">
   <ul type="none" class="img-remove">
   <li>
   <label class="change-event-pic" for="event_photo">
   <i class="fa fa-camera change" aria-hidden="true"></i></label>
   </li>
   <li>
   
   <label class="remove-event-pic" for="remove_photo">
   <i class="fa fa-times remove" aria-hidden="true"></i></label>
   <input type="file" id="event_photo" name="image" onchange="readURL(this);"/>
   </li>
   </ul>
   
   </div>
  </div>  
  <span class="add-event-mes">Image size 1280*360. And not more then 2MB</span>
   <p id="errLabel" class ="eVal"></p>
   
  <label for="">Event Name</label>
  <input type="text"  id="event_name" name="event_name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Add a short, Clear Name">
  <p id="errLabel1" class ="eVal"></p>
  
  <div class="common">
  <div class="row radio">
         <div class="radio ts-radios boxed col-sm-6">
            <input name="is_public_private" ng-model="eventType" type="radio" value="public" id="eventTypePublic" class="is_public_private" style="">
                    <label class="box-style-radio" for="eventTypePublic">
                              <i class="mdi mdi-human-male-female"></i>
                                    <span>Public</span>
                     </label>
                                </div>
          <div class="radio ts-radios col-sm-6">
             <input name="is_public_private" ng-model="eventType" type="radio" value="private" id="eventTypePrivate" class="is_public_private" style="">
                      <label class="box-style-radio" for="eventTypePrivate">
                                        <i class="mdi mdi-lock"></i>
                                        <span>Private</span>
                                    </label>
                                </div>
    </div>
	<p id="errLabel3" class ="eVal"></p>
  </div>
 
  <div class="common" id="" style="overflow:auto; margin:0 0 10px 0;">
  <label for="">Venue Name</label>
  <input type="text" class="form-control" id="venue_name" name="venue_name"  placeholder="Name">
  <p id="errLabel15" class ="eVal"></p>
  <label for="">Venue Address</label>
  <input type="text" id="autocomplete" name="venue_address" class="form-control" id=""  placeholder="Include place or address" onFocus="geolocate()">
  <p id="errLabel2" class ="eVal"></p>
	</div>
	<div class="common">
	<label for="">Event Category</label>
    <select class="custom-select-category " id="category" name="event_category" placeholder="Select Event Category">
    <option value="0" selected data-thumbnail="images/pic.jpg">Select Event Category</option>
    <option value="Entertainment">Entertainment</option>
    <option value="Sports">Sports</option>
    <option value="Professional">Professional</option>
	<option value="Campus">Campus</option>
  </select>
  
   <select class="custom-select-category1" id="sub_category" name="event_sub_category" placeholder="Select Event sub Category">
    <option value="0" selected data-thumbnail="images/pic.jpg">Select Event sub Category</option>
   <optgroup label="Entertainment">
    <option value="clubbing">Clubbing</option>
    <option value="concerts">Concerts</option>
   </optgroup>
   <optgroup id="B" label="Sports">
    <option value="adventure">Adventure</option>
    <option value="marathon">Marathon</option>
   </optgroup>
    <optgroup id="C" label="Professional">
    <option value="sales/marketing">Sales/Marketing</option>
    <option value="kidsevent">Kids Event</option>
   </optgroup>
   <optgroup id="D" label="Campus">
    <option value="sales/marketing">Enterprenuership</option>
    <option value="kidsevent">CollegeEvent</option>
   </optgroup>
  </select>
  <p id="errLabel12" class ="eVal"></p>
  <p id="errLabel13" class ="eVal"></p>
	</div>
	<div class="common">
   <span id="datepairExample">
	   <div class="row">
			   <div class="col-md-6">
				   
			   <label class="">Start</label>
			   <div class="calendar">
			   <input type='text' id="start_date" name="start_date" class="form-control date start" /> 
				   </div>
				   <div class="times">
			   <input type='text' id="start_time" name="start_time" class="form-control time start" />
				   </div>
			   </div>
			   <div class="col-md-6">				   
			   <label class="">End</label>
			   <div class="calendar">
			   <input type='text' id="end_date" name="end_date" class="form-control date end" />
				   </div>
			  <div class="times">
			   <input type='text' id="end_time" name="end_time" class="form-control time end" />
				   </div>
			   </div>
	   </div>
	</span>
	<p id="errLabel4" class ="eVal"></p>
	<p id="errLabel5" class ="eVal"></p>
	<p id="errLabel6" class ="eVal"></p>
	<p id="errLabel7" class ="eVal"></p>
    </div> 
    <div class="common">
    <label for="">About Event</label>
    <textarea class="form-control" id="about_event" name="about_event" rows="3"  placeholder="Tell more about event"></textarea>
	<p id="errLabel8" class ="eVal"></p>
	<br>
    <label for="">Event Video Link</label>
  <input type="text" class="form-control" id=" " name="event_video"  placeholder="Event Video URL">
	</div>

	<div class="common">
      <div class="add_profile">
      <div id="row0">
          <div class="artist-img">
  <label for="">Artist Photo</label>
        <input class="form-control images_list input-file artist-pic" data-panelid="event_images0" onchange="myfn(this)" name="artist_photo[]" id="event_images0" type="file" accept="image/gif, image/png, image/jpeg, image/pjpeg">
        <label for="event_images0" id="img_preview_td"><img id="img_preview0"></label> 
        <label class="artist-pic" for="artist_photo"><i class="fa fa-camera" aria-hidden="true"></i></label>
          </div>
          <div class="artist-info">
          <p id="errLabel10" class ="eVal"></p>
        	<label for="">Artist Name</label>
            <input type="text" class="form-control" name="artist_name[]" id="artist_name"  placeholder="Name">
        	<p id="errLabel18" class ="eVal"></p>
        	<label for="">About Artist</label>
            <textarea class="form-control" id="about_artist" name="about_artist[]" rows="3"  placeholder="Tell more about Artist"></textarea>
        	<p id="errLabel9" class ="eVal"></p>
	</div>
  </div>  
   </div>   
   <br><br>
	<button type="button" class="btn add-button-artist add-artist" id="add_artist" data-toggle="button" aria-pressed="false" autocomplete="off">Add Artist</button>
  </div>
  
  <div class="common">
      
  <label for="" class="label-ticket">Ticket Details</label>
  <div id="our-list">
  <div class="add_tickets_fields_container">
   <input type="text" class="form-control input-left fl-right" id="ticket_name" name="ticket_name[]" placeholder="Ticket Name">
   <input type="text" class="form-control input-right fl-right" id="ticket_price" name="ticket_price[]"  placeholder="Ticket Price"> 
   <div class="common fl-right"><i class="fa fa-cog fl-right fa-style" aria-hidden="true"> 
  <span id="errLabel16" class ="eVal"></span>
  <span id="errLabel17" class ="eVal"></span>
  <p style="clear: both">
 
   <label for="">Ticket Description</label>
   <input type="text" class="form-control" id="ticket_description" name="ticket_description" placeholder="TicketDesciption">
   <span id="datepairExample">
   <label for="" style="float:left; padding:5px 10px 0 0; font-size:14px;">StartDate</label>
   <input type="text" id="ticket_start_date" name="ticket_start_date" class="form-control date start ticket-dates" />
   <label class="ticketcalendartime" for="ticket_start_date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
   <label for="" style="float:left; padding:5px 10px 0 3px; font-size:14px;">EndDate</label>
   <input type="text" id="ticket_end_date" name="ticket_end_date" class="form-control date end ticket-dates" />
   <label class="ticketcalendartime" for="ticket_end_date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
   <label for="">No of Tickets</label><input type="text" id="no_of_tickets" name="no_of_tickets" class="form-control" placeholder="NoofTickets">
    </span>
   </p> </i>
  </div>
  </div>
  
  </div>
  <br>
   <button type="button" class="btn add-button-ticket" id="our-button" data-toggle="button" aria-pressed="false" autocomplete="off">Add Ticket</button>
  </div>
  
  <div class="common">
	<label for="" class="label-ticket">Payment Gateway & Taxes</label>
  <input type="text" class="form-control " id=""  placeholder="Internet handling charges + Taxes">
      
  </div>
  	<div class="common">
	<label for="">Terms & Conditions</label>
    <textarea class="form-control" id="terms_conditions" name="terms_conditions" rows="3"  placeholder="Tell more about Terms & Conditions"></textarea>
	<p id="errLabel11" class ="eVal"></p>
	</div>
  <div class="common">
    <input type="checkbox" class="checkbox-event" id="is_accept" name="is_accept" value="1">
	 <p id="errLabel14" class ="eVal"></p>
    <label class="checkbox-label" for="">I accept to pay additional 5% for all deccanevents efforts, deccanevents partners, and affiliate marketing efforts</label>
  </div>
  <div class="common">
     <button type="submit" name="submit" id="create" class="btn add-button-create" data-toggle="button" aria-pressed="false" autocomplete="off">Create</button>
	 <button type="submit" class="btn add-button-create" data-toggle="button" aria-pressed="false" name="preview" autocomplete="off">Preview</button>
  </div>
</div>
</div>
<script>

        $(document).ready(function(){
        var i = 0;
        $("#add_artist").click(function(e){
            i++;
            $(".add_profile").append('<div class="artist-row" id=row'+i+'><div class="artist-img"><label>Artist Photo</label> <button name="remove" id="'+i
            +'" class="btn btn-danger btn-remove">X</button><input class="form-control images_list input-file artist-pic" data-panelid="event_images'+i+'" onchange="myfn(this)" name="event_images[]" id="event_images'+i
            +'" type="file" accept="image/gif, image/png, image/jpeg, image/pjpeg">\
            <label for="event_images'+i+'" id="img_preview_td"><img id="img_preview'+i+'"></label>\
        <label class="artist-pic" for="artist_photo"><i class="fa fa-camera" aria-hidden="true"></i></label>\
          </div>\
          <div class="artist-info">\
          <p id="errLabel10" class ="eVal"></p>\
        	<label for="">Artist Name</label>\
            <input type="text" class="form-control" name="artist_name[]" id="artist_name"  placeholder="Name">\
        	<p id="errLabel18" class ="eVal"></p>\
        	<label for="">About Artist</label>\
            <textarea class="form-control" id="about_artist" name="about_artist[]" rows="3"  placeholder="Tell more about Artist"></textarea>\
        	<p id="errLabel9" class ="eVal"></p>\
	</div>\
	</div>');
            e.preventDefault();
        });

        $(document).on("click",".btn-remove",function(){
             var button_id = $(this).attr("id");
             $("#row"+button_id+"").remove();
        });
    });

      function myfn(myinput) {
            var name = $(myinput).attr("name");
            var id = $(myinput).attr("id");
            var val = $(myinput).val();
            debugger;
            switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                case 'gif': case 'jpg': case 'png': case 'jpeg':
                    readProURL(myinput);
                    break;
                default:
                    $(this).val('');
                    break;
            }
        }


        function readProURL(myinput) {
           debugger;
            if (myinput.files && myinput.files[0]) {
                  var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img_preview' + $(myinput).attr("id").replace('event_images','') ).attr('src', e.target.result);
					var image = new Image();
                    image.src = e.target.result;
					
					localStorage.setItem("artistimage", image.src);
					//alert(localStorage.getItem("artistimage"));
                }
                reader.readAsDataURL(myinput.files[0]);
            }
        }
        
        
        
        
        function readURL(input)
  {
  var fileUpload = $("#event_photo")[0];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif|.jpeg)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (fileUpload.files) != "undefined") {
                var reader = new FileReader();
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = e.target.result;
					localStorage.setItem("lastname", image.src);
                    image.onload = function () {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
				$('.add-event-pic').append('<img class="img1" id="blah" src="#"/>'); 
                $('#blah').attr('src', e.target.result);
				if($( "#blah" ).hasClass( "img1" ))
				{
				 $(".change-container").addClass("display-img-upload");
				 $(".event-pic").addClass("eventimg");
				}
				};
            reader.readAsDataURL(input.files[0]);
            }
                    };
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
  }
  
  
//for autosearch location
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
      
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
       
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

     
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
   
	  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs2gAf-zxbt-_1tPXwI_UsQ7-t_9kMXEs&libraries=places&callback=initAutocomplete"
        async defer></script>

</html>
