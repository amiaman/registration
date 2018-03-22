<?php //include 'dbhandler.php';?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>
    Manufacturer Supplier Retailer, Service Provider | SingUp | whizmarts.in
  </title>
  <meta name="keywords" content="Business directory, business directory in india, business e-commerce, business listings, business website,business marketplace, companies business listings, companies database india, companies directory, companies directory india, directory of 
  companies, directory of indian companies, e-commerce in india, electronic trade & commerce, electronic trade and commerce,exporter importer directory, 
  exporters business directory, exporters in india, free business listings, free business listings in india, free business marketplace, free indian companies 
  business listings, free manufacturers directory india,importers, india business directory, india export import, india importers, indiamart, 
  indian business,Indian companies directory, indian exporters, indian exporters directory, indian manufacturers directory,indian market, 
  indian service providers, manufacturers directory,manufacturers in india, online business directory, online marketplace,suppliers directory, yellow pages"/>
  <meta name="description" content="WhizMarts.in offers indias largest business listing plateform for manufacturers,
  suppliers,retailers,service providers and others"/>
  <meta name="google-site-verification" content="ijC536_xRVh3jtlSXRBL_K0RuaonsWQdNVY8Z5Dz3TY" />
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-84470808-1', 'auto');
ga('send', 'pageview');
</script>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <form id="signup" ng-app="formApp" action="load.php" method="POST">
    <ul id="section-tabs">
      <li class="active">Mobile Number</li>
      <li>Our Detail</li>
      <li>Verify Email Id</li>
      <li>Company, Shop Address</li>
    </ul>
  <div id="fieldsets">
  
  
  <fieldset class="current">
   <h2 class="fs-title">Basic Information</h2>
  <h3 class="fs-subtitle">We just need some basic information to begin your scoring</h3>
    <label for="email">Mobile:</label>
    <input name="mno" required="Please Enter Your Mobile Number" data-rule-required="true" 
		  data-msg-required="Please enter a valid mobile number" type="tel" class="required" />
	<span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
  </fieldset>
  
  
  <fieldset class="next">
  <h2 class="fs-title">Enter your details below to register</h2>
  <h3 class="fs-subtitle">How have you been doing in acquiring donors?</h3>
    <label for="username">User Name:</label>
    <input type="text" required="Please Enter User Name" name="name" type="text">
    <label for="bio">Business Name:</label>
    <input type="text" name="cname" required="Please Enter Your Company, Shop Name" class="required">
	 <label for="bio">E-mail Address:</label>
    <input type="email" required="Please Enter Your Valid Email Id" name="email" class="required">
	 <label for="bio">Create Password:</label>
    <input type="password" required="Create Password Now" name="pass" class="required">
  </fieldset>
  
  
  <fieldset class="next">
   <h2 class="fs-title">Please enter the verification code</h2>
  <h3 class="fs-subtitle">Check your mobile We have sent the code.</h3>
    <label for="interests">Verification Code:</label>
    <input name="code" required="Please Enter Your Email V_Code" class="required" type="number">
    </p>
  </fieldset>
  
  
  <fieldset class="next">
   <h2 class="fs-title">Thank For Registration</h2>
  <h3 class="fs-subtitle">Check the Dashboard</h3>
  
    <label for="phone">Please Enter Your Address:</label>
    <textarea rows="3px" cols="10px" required="Please Enter Your Company, Shop Address" name="address"></textarea>
  </fieldset>
  
  
  <a class="btn"ng-click="next(2)" ui-sref="form.appointment"  id="next">Next Section ▷</a>
  <input type="Submit" class="btn" name="signup">
  </div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script  src="js/index.js"></script>
	




</body>

</html>
