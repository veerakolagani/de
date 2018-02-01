 <!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <style>
  div p{
  display: none;
  }
  #our-list ul.child-list li{
  float: left;
  }
  .fl-right{
        display: inline;
  }

  </style>
 </head>
 <body>
 

  <div id="our-list">
  <input type='text'>
  <div> First item
  <p><input type='text'><input type='text'></p>
  </div>
  </div><br><br>
   <button id="our-button"> Add new item</button>
  <script>
  var newItemCounter = 1;
var ourList = document.getElementById("our-list");
var ourButton = document.getElementById("our-button");

ourList.addEventListener("click", activateItem);

function activateItem(e){
        $(e.target).children("p").toggle(400);
}

ourButton.addEventListener("click", createNewItem)

function createNewItem(){
        ourList.innerHTML+= "<input class='fl-right' type='text'><input class='fl-right' type='text'><div class='fl-right'>item " + newItemCounter +"<br><p><input type='text'> <input type='text'><input type='text'> <input type='text'></p></div>";
        newItemCounter++;
}

  </script>
 </body>
</html>

