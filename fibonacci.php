<?php

if ($_GET['ip']):
        $ip = gethostbyname($_GET['ip']);
        echo($ip),"<br>";
    endif; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Get Reverse IP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#searchip").change(function(){
				$.ajax({
					type: "GET",
					url: "fibonacci.php",
					data: 'ip=' + $("#searchip").val(),
					success: function(msg){
						$('#resultip').html(msg);
                }
				});//ajax call
			});//event handler
		});//document.ready
	</script>
</head>
<body>
Please enter a domain name
<input type="text" id="searchip"/>
<div id="resultip"></div>
<input type="submit" value="fire"/>
</body>
</html>

