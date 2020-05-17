<?php $root = 'http://www.pjpreston.com'; ?>

#<?php
#/* if form submitted */
#if($_POST['submit']){
#	//Configuration Settings 
#$SendFrom = "Form Feedback <office@pjpreston.com>"; 
#$SendTo = "office@pjpreston.com"; 
#$SubjectLine = "Enquiry Form"; 
#
#// Build Message Body from Web Form Input 
#foreach ($_POST as $Field=>$Value) 
#$MsgBody .= "$Field: $Value\n"; 
#$MsgBody .= "\n" . @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n" . 
#$_SERVER["HTTP_USER_AGENT"]; 
#$MsgBody = htmlspecialchars($MsgBody, ENT_NOQUOTES); //make safe 
#
#// Send E-Mail and Direct Browser to Confirmation Page 
#$sent = mail($SendTo, $SubjectLine, $MsgBody, "From: $SendFrom");
#}
#?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="js/cycle.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/swfobject.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){$('.slideshow').cycle({fx:'fade'});});
		</script>
		<title><?php echo $title; ?></title>
		<meta name="description=" content="<?php echo $desc; ?>" />
		<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyB0Zhcj0ax-jsaGaTGqAitM8VxsJi4Icto" type="text/javascript"></script>

<script type="text/javascript">

    //<![CDATA[

    function load() {
    
			if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("google_map"));
    
				map.setCenter(new GLatLng(53.5740, -0.0743), 15);
			
				var mapView = new GMapTypeControl();
				map.addControl(mapView);	
				var zooming = new GSmallMapControl();
				map.addControl(zooming);
				var scale = new GScaleControl();
				map.addControl(scale);
				 var point = (new GLatLng(53.5740, -0.0743));
				 var marker = new GMarker(point);
				 map.addOverlay(marker);
			    var address = GEvent.addListener(marker, "click", function(){
			 	    map.openInfoWindow(point, "P.J. Preston Limited,<br /> 26-30 Kent Street,<br /> Grimsby,<br /> DN32 7DG.");
			     });	
				
			
      }
    }

    //]]>
    </script>
	</head>
	<body onload="load()" onunload="GUnload()">
		<div class="container_12" id="container">
			<div id="header">
				<div class="grid_4">
					<a href="<?php echo $root; ?>">
						<img src="images/logo.png" alt="PJ Preston" class="logo" />
					</a>
				</div>
			</div>
			<div class="grid_12">
				<div class="outterEdge">
					<script type="text/javascript">
    swfobject.embedSWF("images/phone.swf", "phone", "111", "120", "9.0.0");
    </script>
					<div id="contentArea">
						<div class="topEdge">
							<img src="images/head.png" alt="" />
						</div>
