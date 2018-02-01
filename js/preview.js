 $(document).ready(function() {
$(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');

  $(".button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    var price = $button.parent().find("span").text();

    if ($button.text() == "+") {
    var newVal = parseFloat(oldValue) + 1;
  console.log(newVal);
  console.log(price);
  var total=(newVal*price);
  console.log(total);
  
 var $button1 = $(this);
      var fl = $button1.parent().find("p").html(total);


  } else {
   // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
var total=(newVal*price);
var fl = $button.parent().find("p").html(total);
    } else {
        newVal = 0;
      }
  }

    $button.parent().find("input").val(newVal);

  });


	});