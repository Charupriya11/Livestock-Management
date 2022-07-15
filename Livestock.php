<!DOCTYPE html>
<html>
<title>LIVESTOCK</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="#home" class="w3-bar-item w3-button"><b><img src="COW.jpg" class="logo" alt="logo">&nbsp&nbsp<i>LIVESTOCK++ && DAIRY++ MANAGEMENT</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i></i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i></i></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
<div class="w3-content w3-section" style="max-width:1500px">
 <img class="mySlides" src="https://bestlifeonline.com/wp-content/uploads/sites/3/2019/07/cow-sticking-tongue-out.jpg?quality=82&strip=all" style="width:100%;height:750px">
<img class="mySlides" src="https://media.istockphoto.com/photos/raw-milk-being-poured-into-container-picture-id1297005860?k=20&m=1297005860&s=612x612&w=0&h=cY-FysF35lBL-8WLk7Ppz3n82jony8ucynpsWF46txg=" style="width:100%;height:750px"></a>
  <img class="mySlides" src="https://bestlifeonline.com/wp-content/uploads/sites/3/2019/07/cow-friends.jpg?quality=82&strip=all" style="width:100%;height:750px">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 7 seconds
}
</script>
<div class="w3-display-middle w3-margin-top w3-center"><br><br><br><br><br><br>
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>LIVESTOCK++ && DAIRY++</b></span> <span class="w3-hide-small w3-text-white">cattle lives</span></h1>

    <button class="button0 button1" onclick="document.location='http://localhost:8080/hostel/webcam.php#!'"><b>CATTLE DISEASE PREDICTION</b></button>
<button class="button0 button2" onclick="document.location='http://localhost:8080/hostel/milkrate.php'"><b>MILK YEILD RATE</b></button>
<button class="button0 button3" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b>CATTLE AVAILABILITY</b></button>

</div>

</header>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
opacity: 0.6;
}

button:hover {
background-color: white;
  border: 2px solid white;
  color: black;
  opacity: 0.6;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: red;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(5,12,0.5,0.4); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
  .button0 {
  background-color: black; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color:white; 
  color: black; 
  border: 2px solid white;
  opacity: 0.6;
}

.button1:hover {
  background-color: black;
  border: 2px solid black;
  color: white;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid white;
   opacity: 0.6
}

.button2:hover {
  background-color: black;
  border: 2px solid black;
  color: white;
}
.button3 {
  background-color: white;
  color: black;
  border: 2px solid white;
   opacity: 0.6
}

.button3:hover {
  background-color: black;
  border: 2px solid black;
  color: white;
}

</style>

<body>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="searchcow.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYYMSGLiK6oqmzseSw7Oovgncf_V4SrPkaQk_vLegu3m1iVwcFBUH2RDO6UD5T5-RYW98&usqp=CAU" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>CATTLE BREED </b></label>
      <input type="text" placeholder="Enter cattle breed" id  = "name" name="name" required>

     
      <button type="submit">SEARCH</button>

      <label>
        <input type="checkbox" checked="checked" name="remember"> show all data
      </label>
    </div>

    <div class="container" style="background-color:powderblue">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">display all cattle breed</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
