<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<style>
		body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
		.b{
position : absolute;
	  top : 1%;
	  left :92%;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position:absolute;
  top:18%;
  width:100%;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav .search-container {
  position:absolute;
  left:72%;

}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  position:absolute;
  left:72%;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 50%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.a{
font-family : times new roman;
position:absolute;
top:2.5%;
left:38%;
		color : white;
		font-weight : bold;
	}
	.bnm{
		position : absolute;
		top:1%;
		left :2%;
	}
	body {font-family: Arial;
    background-image: url("../images/custback.jpg");
	height: 580px;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text],input[type=password]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
 name,password{
  width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 2px;
	border-radius: 10px;
	width:35%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: center;
  width: 25%;
   top :70%;
}
.container {
    position:absolute;
	top:25%;
     left:35%;
     width:30%;
	 padding: 16px;
	 color : white;
	 }
.clearfix {
    position:fixed;
	 top:78%;
	 left:46%;
     width:28%;
}


/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
		</style>
</head>
<body>

<div class="topnav">
  <a href="customer.php">VIEW CUSTOMERS</a>
  <a class ="active" href="#">ADD CUSTOMERS</a>
  <div class="b">
    <a href="../html/userdash.html">BACK</a>
  </div>
</div>
<div class="a">
<center>
<h1>CUSTOMER DETAILS</h1>
</center>
</div>
<div class="bnm">
<img src="../images/plus.jpg" width="100" height="100">
</div>

  <div class="container">
  <form method ="POST" action="cust.php">
    <h4>Please fill the details to add customer</h4>
	
	<label for="custid"><b>Enter customer ID</b></label>
    <input type="text" placeholder="CID001" name="custid" required>
		
    <label for="name"><b>Enter Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="phno"><b>Enter Phone No</b></label>
    <input type="text" placeholder="Enter Phone No" name="phno" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">ADDPREC</button>  
    </div>
</form>
 </div>
</body>
</html>
