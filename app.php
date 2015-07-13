<?php
	date_default_timezone_set('Asia/Taipei');
	$conn = mysql_connect('localhost','root','');	
	$db = mysql_select_db('imonggo', $conn);
	include 'buttons.php';
?>
<html>
<head>
	<title>Shopify - iMonggo - Shopify</title>
	
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="ui.css"/>
	<link rel="stylesheet" href="materialize/icons/css/font-awesome.min.css">

</head>
<body>

<nav>
    <div class="nav-wrapper" style="background-color:black;height:110%;">
      <a href="#" class="brand-logo"><img src="materialize/images/logo.png" style="margin-left:140%;margin-top:11%;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="text-color:#757575;">
        <li style="margin-left:-15%!important;"><a href="sass.html">FEATURES</a></li>
        <li><a href="badges.html">EXAMPLES</a></li>
        <li><a href="collapsible.html">PRICING</a></li>
		<li><a href="collapsible.html">POS</a></li>
		<li><a href="collapsible.html">RESOURCES</a></li>
		<li><a href="collapsible.html">|</a></li>
		<li><a href="collapsible.html">LOGIN</a></li>
      </ul>
    </div>
  </nav>
  
<center>
	<div class="row"style="margin-left:20%;width:100%;margin-top:7%;">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image z-depth-4" style="height:40%;">
              <form method="GET">
			  <br><br>
				<h6 style="color:white;font-size:13px;">IMONGGO &nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i> &nbsp;&nbsp; E-COMMERCE<br><br>
					<button style="width:30%;color:white;" class="waves-effect waves-light btn" type="submit" name="postProducts">Products</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button style="width:30%;color:white;" class="waves-effect waves-light btn" type="submit" name="postTaggedProducts">Tagged</button>
				</form>
	
				<form method="GET" style="margin-top:4%;">
				<h6 style="color:white;font-size:13px;">IMONGGO &nbsp;&nbsp;<i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;E-COMMERCE<br><br>
					<button style="width:30%;color:white;" class="waves-effect waves-light btn" type="submit" name="postCustomers">Customers</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button style="width:30%;color:white;" class="waves-effect waves-light btn" type="submit" name="postInvoices">Invoices</button>
				</form>
            </div>
            <div class="card-action z-depth-5">
              <a href="http://www.Shopify.in"> 2015 | Powered by Shopify &nbsp; <i class="fa fa-cog fa-spin"></i></a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>