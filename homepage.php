<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>HomePage</title>
<script>
	  function check()
	  {
		  if(document.getElementById("pas").value==document.getElementById("repas").value)
		  {
			  document.getElementById("Message").innerHTML="matched";
			  document.getElementById("Message").style.color="green";
		  }
		  else
		  {
			  document.getElementById("Message").innerHTML="didn't match";
			  document.getElementById("Message").style.color="red";
		  }
	  }
	  </script>
<style>
.intro
{
	text-align:center;
	padding:20px;
	font-size: 18px;
	
	
}
.aboutus
{
	padding:180px 40px;
	font-size:17px;
	text-align:center;
}
.condition
{
	padding:220px 80px;
}
.resources&info
{
	padding:10px;
}
.mi{
	background-image:url('image.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-position :fixed;
	z-index:2;
	position:relative;
}
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
  background-color :#BEBEBE;
  font-weight: bold;
  border : none; 
  color :black;
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
	 
    padding:0px;
	font-family:Comic Sans MS;
	font-size:40px;
	color:#E14929;

	text-shadow: 3px 3px black;
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
	   text-align:right;
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



body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: relative;
  bottom:110px;
  overflow: hidden;
  background-color:#ffb399;
}

.topnav a {
  float: right;
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

<!--.active {
  background-color:  #ddd;
  color: white;
}-->

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: right;
  }
  .condition
  {
	position :relative;
    left:35px;
  }
  .container1
  {
	  max-width:100%;
	  margin:0 auto;
	  background:#f9f9f9;
	  font-size:25px;
	  padding:24px;
  }
 <!-- .parallax { 
    /* The image used */
    background-image:url("image.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
-->
body{ margin:0px; background-color:#B0B0B0 fixed;}
#parallax_layer_1
{
	position:fixed;
	width:100%;
	height:600px;
	background:url(image.jpg) no-repeat 0px 200px
}
# content-layer{ position:absolute;}
.bigcontainer{
	background-color:#E0E0E0;
}
</style>

</head>
<body>

<div class="header">
 <p><img src="down.jpg" style="width:200px; height:200px;" alt="image"><b style="font-size:80px; position: relative;
      bottom: 60px;">S</b><b style=" position: relative;
      bottom: 60px;">hare</b>
 <b style="font-size:60px; position: relative;
      bottom: 60px;">& </b> <b style="font-size:80px; position: relative;
      bottom: 60px;">S</b><b style=" position: relative;
      bottom: 60px;">olve</b></p>
</div>

<div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#about">About Us</a>
  <a href="#helthyliving">HealthyLiving</a>
  <a href="#conditions">Conditions</a>
  <a href="#Resources&Info">Resources&Info </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
  
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<div class="intro" id="home">
<p ><span style="font-size:50px;font-family:Trebuchet MS;font-style:bold;">Welcome to Share&Solve </span> <br>
<span  style="align:center;">Share & Solve is like an interactive place which helps you to learn and practise skills which can help to prevent and manage symptoms of depression and anxiety.
We provide authoritative information and support to people with mental health concerns, along with their family members and other loved ones.</span>
<br>
<span style="font-size:24px;">Get help! Get better!</span>
No matter what's troubling you, get the support you need, right here, right now.</p>
 
 
</div>





</div> <!--bigcontainer-->

<div class="mi">
<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="image.jpg">
<div class="navbar">
<h2 align="center"  style="font-size:25px;">"Man-A social animal takes from society what it offers</h2>
<h2 align="center" >All what it offers ain't good "</h2>
</div>
<div class="navibar">
<h3 align="center" style="font-size:20px;">"Have you been pressed by social norms and feel abnormal about the attitude it has towards you??"</h3>
<p align="center" style="font-size:20px;"><b>Are you feeling stressed ??</b> <br><b>Are you feeling lonely??</b><br><b>Fed-up with your life??....</b></p>
</div>
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
&nbsp &nbsp &nbsp &nbsp <button value="SignUp" class="butt" onclick="SignupPage.php">SignUp</button><br><br>


      <button type="reset" class="but" align="center" onclick="document.getElementById('sign').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    
</div>
</div>
</div>

<div class="modal" id="wrapper">

<form class="modal-content animate" action="/action_page.php" align="center" method="post">
<div class="container">
<label for="n1">
<b style="font-size:20px;"><span style="color:red;">*</span>UserName-</b><br>
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
<b style="font-size:20px;"><span style="color:red;">*</span>Password-</b><br></label>


<input type="password"  placeholder="Enter Password"  class="input" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

	<input type="checkbox" id="check" onclick="ShowPass();">Show Password <br><br>
<script>
 function ShowPass()
 {
	 var pass=document.getElementById("password");
	 if(document.getElementById("check").checked)
	 {
		pass.setAttribute('type','text'); 
	 }
	 else
	 {
		 pass.setAttribute('type','password');
	 }
 }


</script>

 <div align="center" class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div><br><br>



<button class="but" style="background-color:#008000;"type="submit" value="submit" align="right" onclick="page3.html">Submit</button><br><br>
</div>

<label align="right">
        
		<span class="psw" > <a href="ForgotPassword.html">Forgot password?</a></span><br><br>
      </label>
	  
<div class="container" >
      <button type="reset" class="but" onclick="document.getElementById('wrapper').style.display='none'" class="cancelbtn">Cancel</button><br><br>

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
	
<!--	<div class="modal" id="gotto">

<form class="modal-content animate" action="check-question.html" align="center" method="post">
<div class="container">
<b style="font-size:20px;"><span style="color:red;">*</span>UserName-</b><br>
<input type="text" name="n1" class="input" placeholder="Enter your username" required><br><br>
<!--
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>


<label for="pas" >
<b style="font-size:20px;"><span style="color:red;">*</span>Password-</b><br></label>


<input type="password"  placeholder="Enter Password" class="input" name="pas" id="pas" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
 
 <input type="checkbox" id="chec" onclick="ShowPassword();">Show Password<br><br>
<script>
 function ShowPassword()
 {
	 var pass=document.getElementById("pas");
	 if(document.getElementById("chec").checked)
	 {
		pass.setAttribute('type','text'); 
	 }
	 else
	 {
		 pass.setAttribute('type','password');
	 }
 }


</script>
 <label for="pass-repeat"><b><span style="color:red;">*</span>Confirm Password -</b><br>
      <input type="password" placeholder="Confirm Password" class="input" id="repas" name="password-repeat"  onkeyup ='check();' required />&nbsp
	  <span id="Message">hju</span><br><br> 
	  </label>
	  
	  
 <div align="center" class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div><br><br>



<button class="but" style="background-color:#008000;" type="submit" value="submit" align="right" onclick="check-question.html">Submit</button><br><br>
</div>

<!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<span class="psw">Forgot <a href="#">password?</a></span><br><br>
      </label>-->
	  
<!-- <div class="container" >
      <button type="reset" class="but" onclick="document.getElementById('gotto').style.display='none'" class="cancelbtn">Cancel</button><br><br>

    </div>
	</form>
-->
	
	
	
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
</div>
</div>



<div class="aboutus" id="about">
<h1>About Us</h1>
Share&Solve as the name suggests is an interactive program designed to help you to:
Identify whether you are having problems with emotions like anxiety ,depression and other disorders.
Learn skills that can help you cope with these emotions.
Here you'll find comprehensive, authoritative information on psychological disorders, psychiatric medications, 
and other mental health treatments. We also have online psychological tests, breaking mental health news, and more.
We believe the most important thing in a person's life is "peace of mind".
Here, we want you to know you are not alone.  56 million Indians -- or 4.5% of India's population -- suffer from depression ,
 another 38 million Indians suffer from anxiety disorders. According to the World Health Organisation report on depression , 
 almost 7.5% of Indians suffer from major or minor mental disorders .That means among all these possibly your friends, family members 
 and co-workers, suffer from symptoms that cause distress in their lives, but that can be effectively treated.
We feel information is a very powerful tool. With the proper information, you can find out what you, a loved one or friend is 
dealing with, and then make the appropriate choices.
And with the proper support, you can weather the ups and downs of life and move forward to a positive spot that you feel good about.


</div >

<div class="condition" id="conditions" >
<span style="color:  #ff704d; font-size:25px;">CONDITIONS</span><br><br>
<span style="color: #999999;">
Abuse &nbsp &nbsp &nbsp  
Addictions &nbsp &nbsp &nbsp
Alternative Mental Health &nbsp &nbsp &nbsp
Alzheimer's &nbsp &nbsp &nbsp <br><br>
Anxiety - Panic &nbsp &nbsp &nbsp 
Bipolar Disorder &nbsp &nbsp &nbsp
Depression &nbsp &nbsp &nbsp
Diabetes &nbsp &nbsp &nbsp   <br><br> 
Dissociative Disorder &nbsp &nbsp &nbsp 
Eating Disorders &nbsp &nbsp &nbsp    
Gender-GLBT &nbsp &nbsp &nbsp <br><br>
Neurodevelopmental Disorders &nbsp &nbsp &nbsp  
OCD Related Disorders &nbsp &nbsp &nbsp <br><br>
Parenting &nbsp &nbsp &nbsp 
Personality Disorders &nbsp &nbsp &nbsp  
PTSD and Stress Disorders &nbsp &nbsp &nbsp <br><br>
Relationships &nbsp &nbsp &nbsp
Schizophrenia &nbsp &nbsp &nbsp 
Self-Help &nbsp &nbsp &nbsp   <br><br> 
Self-Injury &nbsp &nbsp &nbsp  
Sex-Sexuality &nbsp &nbsp &nbsp
Schizoaffective Disorder &nbsp &nbsp &nbsp
</span>
</div>





<div class="resources&info" id="Resources&Info">

I.WHAT IS A MENTAL ILLNESS?<br>
1.Mental Illness Definition:<a href=""> What is a Mental Illness?</a><br>
<a href="">2.5 Different Types of Mental Illness</a><br>
<a href="">3.Examples of Mental Illness</a><br>
<a href="">4.List of Mental Illnesses</a><br>
<a href="">5.Common Mental Disorders Many Face</a><br>
<a href="">6.Difference Between Mental Illness and Mental Disorder</a><br>
<a href="">7.Different Mental Disorders and Their Challenges</a><br><br>

II.MENTAL ILLNESS SIGNS, SYMPTOMS, DIAGNOSIS<br>
<a href="">1.What are the Symptoms of Mental Illness?</a><br>
<a href="">2.How to Diagnose Mental Illness</a><br>
<a href="">3.Mental Health Assessment</a><br>
<a href="">4.Mental Illness Diagnosis Tests</a><br><br>


III.MENTAL ILLNESS CAUSES<br>
<a href="">1.What Causes Mental Illness? Genetics, Environment, Risk Factors</a><br>


IV.ILLNESS TREATMENT<br>
<a href="">1.Need Mental Help: Where To Find Mental Health Help</a><br>
<a href="">Types of Mental Health Treatment</a><br>
<a href="">Mental Health Counseling: How it Works, Benefits</a><br>
<a href="">Mental Health Therapy Benefits</a><br>
<a href="">8 Types of Mental Health Medications</a><br><br>








LIVING WITH A MENTAL ILLNESS<br>
<a href="">Adapting to Living with a Psychological Disorder</a><br>
Advocating for Yourself:<a href=""> A Self-Help Guide</a><br><br>


MENTAL ILLNESS IN CHILDREN<br>
<a href="">Do Children Have Mental Health Problems Too?</a><br>
<a href="">Mental Illness in Children: Types, Symptoms, Treatments</a><br><br>


YOUR MENTAL HEALTH<br>
Mental Health Definition: <a href="">What is Mental Health?</a><br>
<a href="">What is Emotional Health? And How To Improve it</a><br><br>


MENTAL HEALTH FACTS AND STATISTICS<br>
Mental Health Statistics:<a href=""> You Are Definitely Not Alone</a><br>
Mental Disease: <a href="">Is Mental Illness a Real Disease?</a><br>
<a href="">The History of Mental Illness</a><br><br>


MENTAL ILLNESS MYTHS, MENTAL HEALTH STIGMA<br>
<a href="">Mental Illness Myths and the Damage They Cause</a><br>
<a href="">What is Mental Health Stigma?</a><br>
<a href="">Effects of Stigma</a><br>
<a href="">How to Deal with Mental Health Stigma</a><br>
<a href="">Importance of Mental Health Awareness Month (and Other Initiatives)</a><br><br>


FOR FAMILY MEMBERS<br>
<a href="">Coming to Terms with a Family Member's Mental Illness</a><br>
<a href="">How to Cope With A Loved One's Mental Illness</a><br>
<a href="">Dispelling the Fear of Care-Giving</a><br><br>
</div>
</div>
</body>
</html>
