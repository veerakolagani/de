$(document).ready(function() {
  CKEDITOR.replace( 'about_event' );

var ourList = document.getElementById("our-list");
var ourButton = document.getElementById("our-button");

ourList.addEventListener("click", activateItem);

function activateItem(e){
	if(e.target.tagName == "I"){
	    
	if(e.target.className == "fa fa-times remove-ticket"){
		
        e.preventDefault(); 
		$(e.target.parentNode.parentNode.parentNode).remove(); 
		x--;
	}
		
        $(e.target).children("p").toggle(400); 
	}
}

ourButton.addEventListener("click", createNewItem)

function createNewItem(){
  $("#sub_category optgroup").hide();
        ourList.innerHTML+="<div class='ticket'><input type='text' class='form-control input-left fl-right' id='ticket_name' name='ticket_name[]' placeholder='Ticket Name'><input type='text' class='form-control input-right fl-right' id='ticket_price' name='ticket_price[]'  placeholder='Ticket Price'><div class='common fl-right'><i class='fa fa-cog fl-right fa-style' aria-hidden='true'><i class='fa fa-times remove-ticket' aria-hidden='true'></i><p style='clear: both'><label for=''>Ticket Description</label><input type='text' class='form-control' id='ticket_description' name='ticket_description' placeholder='TicketDesciption'><label for='' style='float:left; padding:5px 10px 0 0; font-size:14px;'>Start</label><input type='text' id='ticket_start_date' name='ticket_start_date' class='form-control start-date' /><input type='text' id='ticket_start_time' name='ticket_start_time' class='form-control start-time timepicker' /><label for='' style='float:left; padding:5px 10px 0 3px; font-size:14px;'>End</label><input type='text' id='ticket_end_date' name='ticket_end_date' class='form-control start-date' /><input type='text' id='ticket_end_time' name='ticket_end_time' class='form-control start-time timepicker' /><label for=''>No of Tickets</label><input type='text' id='no_of_tickets' name='no_of_tickets' class='form-control' placeholder='NoofTickets'></p></i></div></div>";
       
}
  
  
  //takeout from html n placed here
  
$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
$('.add-event-pic').on("click",".remove", function(e){ 
	  $('.add-event-pic').append('<input type="file" class="event_photo" id="event_photo" name="image" onchange="readURL(this);"/><label class="event-pic" for="event_photo">Add Event Photo</label>'); 
      $('#blah').remove(); 
    })

	
	
	
 var max_fields_limit      = 10; 
    var x = 1; 
    $('.add-button-artist').click(function(e){ 
        e.preventDefault();
        if(x < max_fields_limit){ 
            x++; 
            $('.add_artist_fields_container').append('<div class="common"><input type="file" id="artist_pic" name="artist_pic"><label for="">Artist Photo</label><input type="file" id="artist_photo" name="artist_photo[]" onchange="readURL2(this);"/><div class="add-artist-pic"><label class="artist-pic" for="artist_photo"><i class="fa fa-camera" aria-hidden="true"></i></label></div><a href="#" class="remove_field_artist" style="margin-left:10px;"><span class="remove-artist"><i class="fa fa-times" aria-hidden="true"></i></span></a><label for="">Artist Name</label><input type="text" class="form-control" name="artist_name[]" id="artist_name"  placeholder="Name"><label for="">About Artist</label><textarea class="form-control" name="about_artist[]" rows="3" placeholder="Tell more about Artist" ></textarea></div>');  
		}
    });  
	
	
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
  function readURL2(input)
  {
	  var nextRowID = 0;
  var fileUpload = $("#artist_photo")[0];
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif|.jpeg)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (fileUpload.files) != "undefined") {
                var reader = new FileReader();
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function () {
                      
                if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
					var id = ++nextRowID;
				$('.add-artist-pic').append('<img  id="blah1' + id + '" src="#"/>'); 
                $('#blah1 '+ id + '').attr('src', e.target.result);
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
  
  $("#sub_category option").hide();
  var $optgroups = $('#sub_category > optgroup');
  
  $("#category").on("change",function(){
    var selectedVal = this.value;
	$("#sub_category option").show();
	$("#sub_category optgroup").show();
    $('#sub_category').html($optgroups.filter('[label="'+selectedVal+'"]'));
	}); 
	
	 $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    $('#datepairExample .date').datepicker({
        'format': 'yyyy-m-d',
        'autoclose': true
    });

    // initialize datepair
    $('#datepairExample').datepair();

$("#create").click(function () {
       
        var event_photo = $('#event_photo').val();
		if(event_photo=="")
		{
		$('#errLabel').text("choose file");
            return false;
		} 
       var event_name = $('#event_name').val();
		if(event_name=="")
		{
		$('#errLabel1').text("enter event name");
            return false;
		} 
		if($('input[name=is_public_private]:checked').length<=0)
		{
        $('#errLabel3').text("choose public or private");
            return false;
        }
		var venue_name = $('#venue_name').val();
		if(venue_name=="")
		{
		$('#errLabel15').text("enter venue name");
            return false;
		} 
		var venue_address = $('#autocomplete').val();
		if(venue_address=="")
		{
		$('#errLabel2').text("enter venue address");
            return false;
		} 
		var start_date = $('#start_date').val();
		if(start_date=="")
		{
		$('#errLabel4').text("enter start date");
            return false;
		} 
		var start_time = $('#start_time').val();
		if(start_time=="")
		{
		$('#errLabel5').text("enter start time");
            return false;
		} 
		var end_date = $('#end_date').val();
		if(end_date=="")
		{
		$('#errLabel6').text("enter end date");
            return false;
		} 
		var end_time = $('#end_time').val();
		if(end_time=="")
		{
		$('#errLabel7').text("enter end time");
            return false;
		} 
		/*var about_event = $('#about_event').val();
		if(about_event=="")
		{
		$('#errLabel8').text("enter event description");
            return false;
		} */
		var artist_photo = $('#event_images0').val();
		if(artist_photo=="")
		{
		$('#errLabel10').text("choose file");
            return false;
		} 	
		var artistname = $('#artist_name').val();
		if(artistname=="")
		{
		$('#errLabel18').text("enter artist name");
            return false;
		}
		var about_artist = $('#about_artist').val();
		if(about_artist=="")
		{
		$('#errLabel9').text("enter about artist");
            return false;
		}
		
       var terms_conditions = $('#terms_conditions').val();
		if(terms_conditions=="")
		{
		$('#errLabel11').text("enter terms and conditions");
            return false;
		} 
		var category = $('#category').val();
		if(category=="0")
		{
		$('#errLabel12').text("select category");
            return false;
		} 
		var subcategory = $('#sub_category').val();
		if(subcategory=="0")
		{
		$('#errLabel13').text("select sub category");
            return false;
		} 
		var ticketname = $('#ticket_name').val();
		if(ticketname=="")
		{
		$('#errLabel16').text("enter ticket name");
            return false;
		} 
		var ticketprice = $('#ticket_price').val();
		if(ticketprice=="")
		{
		$('#errLabel17').text("enter ticket price");
            return false;
		} 
		if($('input[name=is_accept]:checked').length<=0)
		{
        $('#errLabel14').text("click accept");
            return false;
        }

    });
	
	
	$("#event_photo").change(function () {
    $('#errLabel').text("");
	});
	$("#event_name").keyup(function () {
    $('#errLabel1').text("");
	});
	$(".is_public_private").change(function () {
    $('#errLabel3').text("");
	});
	$("#venue_name").keyup(function () {
    $('#errLabel15').text("");
	});
	$("#autocomplete").keyup(function () {
    $('#errLabel2').text("");
	});
	$("#start_date").change(function () {
    $('#errLabel4').text("");
	});
	$("#start_time").focus(function () {
	$('#errLabel5').text("");
	});
	$("#end_date").change(function () {
    $('#errLabel6').text("");
	});
	$("#end_time").focus(function () {
	$('#errLabel7').text("");
	});
	$("#about_artist").keyup(function () {
    $('#errLabel9').text("");
	});
	/*$("#about_event").change(function () {
		alert("dfd");
    $('#errLabel8').text("");
	});*/
	$("#event_images0").change(function () {
    $('#errLabel10').text("");
	});
	$("#terms_conditions").keyup(function () {
    $('#errLabel11').text("");
	});
	$("#category").change(function () {
    $('#errLabel12').text("");
	});
	$("#sub_category").change(function () {
    $('#errLabel13').text("");
	});
	$("#is_accept").change(function () {
    $('#errLabel14').text("");
	});
	$("#ticket_name").keyup(function () {
    $('#errLabel16').text("");
	});
	$("#ticket_price").keyup(function () {
    $('#errLabel17').text("");
	});
	$("#is_accept").change(function () {
    $('#errLabel14').text("");
	});
	$("#artist_name").keyup(function () {
    $('#errLabel18').text("");
	});
	



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
	});
	
	
	
	