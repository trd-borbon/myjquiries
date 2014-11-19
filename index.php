<!DOCTYPE html>
<html>
	<head>
		 <title>Testing Javascrip</title>
		 <script src="myphone.js" type="text/javascript"></script>
		 <script>
			$(document).ready(function(){
				$("p").attr("id","s");
				$("#btn").click(function(){
					$("#s").fadeToggle(1000,function(){
						alert("lsdjfldjsf");
					});
				});
				$("#btn").hover(function(){
					$(this).css("background-color","blue");
				},
				function(){
					$(this).css("background-color","white");
				});
				$("#btn2").click(function(){
					$("p").animate({fontSize:'toggle'});
				});
				$("#r").click(function(){
					$("#a").toggle(5000);
				});
				$("#btn3").click(function(){
					$("#a").stop();
				});
			});
		</script>
		<style>
			#r,#a{
				position:center;
				width:100px;
				background-color:blue;
				color:yellow;
			}
			#a{
				padding:100px;
				display:none;
			}
		</style>
	</head>
	<body>
		<p id="v">hellow</p>
		<div id="r">Click to show</div>
		<div id="a">mao ni sod</div>
		<button type="button" id="btn" >click</button>
		<button type="button" id="btn2">animate</button>
		<button type="button" id="btn3">Stop</button>
		<button type="button" id="btns">trick</button>
	</body>
	
</html>