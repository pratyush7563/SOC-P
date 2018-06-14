<html>
<head>
<style>
.header{
padding : 20px;
}
.footer{
}
</style>
<meta charset="UTF-8">

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="header">
<h1 align="center" >Sign Up</h1><br>
</div>
<div class="footer">
<table border=2 align="center" cellpadding=25px>
<tr>
<td>
<form  method="post" action="page3.php"  align="center">
Select-:<br>
<select >
<option value=""disabled selected>Select your option</option>
<option  value="Parent or Guide">Parent or Guide</option>
<option value="">victim</option>
</select><br><br>

<input type="text" placeholder="Enter your name"name="name" required><br><br>
<!--EmailId-:<br>
<input type="email" name="email"><br><br> -->


<input type="password" placeholder="Enter Password" name="password" required><br><br>
<div class="g-recaptcha" data-sitekey="6LfTBF8UAAAAALzMeAHb1Zp_Styckvt9HCGgQ8qx" required></div>
<input type="submit" value="Submit">&nbsp
<input type="reset" value="Reset">
</form>
</td>
</tr>
</table>
</div>
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
</body>

</html>
