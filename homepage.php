<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>HomePage</title>
<style>
.butt
{
	background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button{
  background-color :#9933FF;
  border : none; 
  color :white;
  padding: 15px;
  text-align:center;
  display :inline-block;
  font-size:25px;
  }
  .but{
     background-color :#FF0000;
	 color :white;
	 padding: 7px;
	 text-align:center;
     display :inline-block;
     font-size:15px;
  }
  
  .header{
    padding:40px;
	background-image:url('home.jpg');
	background-repeat:no-repeat;
	background-size:100% 180px;
  }
  .navbar
  {
     padding:30px;
  }
  .navibar
  {
   padding: 30px;
  }
  .footer
  {
     padding:30px;
  }
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
   
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 5px;
}
  /* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 20% auto; /* 10% from the top, 20% from the bottom and centered */
    border: 10px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
	padding:20px 20px;
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
  .animate
  {
    animation:animate-zoom 0.6s;
  }
  
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
  @keyframes animate-zoom
  {
     from {transform:scale(0)}
	 to {tranform:scale(1)} 
  }
  .input{
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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


/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
.parallax { 
    /* The image used */
    background-image: url("/*add an image here*/");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: fit;
}
</style>
</head>
<body>
<div class="parallax">
<div class="header">
<h1 align="center">My WebPage</h1>
</div>
<div class="navbar">
<h2 align="center"  style="font-size:25px;">"Man-A social animal takes from society what it offers</h2>
<h2 align="center" >All what it offers ain't good "</h2>
</div>
<div class="navibar">
<h3 align="center" style="font-size:20px;">"Have you been pressed by social norms and feel abnormal about the attitude it has towards you??"</h3>
<p align="center" style="font-size:20px;"><b>Are you feeling stressed ??</b> <br><b>Are you feeling lonely??</b><br><b>Fed-up with your life??....</b></p>
</div>

<div class="footer">
<p align="center">
<button type="button" class="button" onclick="document.getElementById('sign').style.display='block'" value="Check Your Status">Check Your Status</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
<button type="button" class="button" onclick="location.href='lifestyle.html'" value="Healthy LifeStyle">Healthy LifeStyle</button>
</p>
</div>

<div class="modal" id="sign">
<div class="modal-content animate" align="center">
<div class="container">
<button value="SignIn" class="butt" onclick="document.getElementById('wrapper').style.display='block'">SignIn</button> &nbsp &nbsp &nbsp &nbsp <b style="text-size:15px;">OR</b>
&nbsp &nbsp &nbsp &nbsp <button value="SignUp" class="butt" onclick="document.getElementById('gotto').style.display='block'">SignUp</button><br><br>


      <button type="button" class="but" align="center" onclick="document.getElementById('sign').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    
</div>
</div>
</div>

<div class="modal" id="wrapper">

<form class="modal-content animate" action="/action_page.php" align="center" method="post">
<div class="container">
<label for="n1">
<b style="font-size:20px;">UserName-</b><br>
</label>
<input type="text" id="n1" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>
-->
<label for="password" >
<b style="font-size:20px;">Password-</b><br></label>


<input type="password"  placeholder="Enter Password" class="input" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

<input type="checkbox" onclick="myFunction()">Show Password<br><br>
<script>
function myFunction()
{
	var x=document.getElementById("password");
	
		if(x.type===password)
		{
			x.type=text;
		}
		else
		{
			x.type=password;
		}
	
}
</script>

 <div align="center" class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div><br><br>



<button class="but" style="background-color:#008000;"type="submit" value="submit" align="right" onclick="page3.html">Submit</button><br><br>
</div>

<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<span class="psw">Forgot <a href="#">password?</a></span><br><br>
      </label>
	  
<div class="container" >
      <button type="button" class="but" onclick="document.getElementById('wrapper').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    </div>

	</form>
	
	<?php
if(isset($_POST['submit']))
{
function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfTBF8UAAAAAHdSQ5a7hlA9nICL05TZ5Mydazgd',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);
    if ($result['success']) {
        //If the user has checked the Captcha box
        echo "Captcha verified Successfully";
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}
    ?>
	
	</div>
	
	<div class="modal" id="gotto">

<form class="modal-content animate" action="/action_page1.php" align="center" method="post">
<div class="container">
<b style="font-size:20px;">UserName-</b><br>
<input type="text" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>
-->
<label for="pas" >
<b style="font-size:20px;">Password-</b><br></label>


<input type="password"  placeholder="Enter Password" class="input" name="pas" id="pas" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
 
 <input type="checkbox" onclick="myFunction()">Show Password<br><br>
<script>
function myFunction()
{
	var x=document.getElementById("pas");
	
		if(x.type===password)
		{
			x.type=text;
		}
		else
		{
			x.type=password;
		}
	
}
 </script>
 
 <div align="center" class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div><br><br>



<button class="but" style="background-color:#008000;" type="submit" value="submit" align="right" onclick="page3.html">Submit</button><br><br>
</div>

<!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<span class="psw">Forgot <a href="#">password?</a></span><br><br>
      </label>-->
	  
<div class="container" >
      <button type="button" class="but" onclick="document.getElementById('gotto').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    </div>

	</form>
	
	
<?php
if(isset($_POST['submit']))
{
function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfTBF8UAAAAAHdSQ5a7hlA9nICL05TZ5Mydazgd',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);
    if ($result['success']) {
        //If the user has checked the Captcha box
        echo "Captcha verified Successfully";
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}
    ?>
	
	
</div>
<script>
// Get the modal
var modal = document.getElementById('wrapper');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('gotto');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('sign');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</body>
</html>
