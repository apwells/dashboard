<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
			<title>Music</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	</script>
	<script>
	
	$(document).ready(function(){
	$("#pause").hide();
	var change = function changeimg(id,normal,over){
	
	id.mouseenter(function(){
	id.attr("src",over);}).mouseleave(function(){id.attr("src",normal);
		});
	
	};
		
		
	change($("#back"),"images/back.png","images/backover.png");
	change($("#next"),"images/next.png","images/nextover.png");	
	change($("#play"),"images/play.png","images/playover.png");
	change($("#pause"),"images/pause.png","images/pauseover.png");		
	
	$("#play").click(function(){$("#play").hide();$("#pause").show();});	
		
		$("#pause").click(function(){$("#pause").hide();$("#play").show();});	
		});
		
	</script>

</head>
<body>
		
	<div class="controller">
	<ul>
	<li><img id="back" src="images/back.png"></img></li>
	<li>
	<img id="play" src="images/play.png"></img>
	<img id="pause" src="images/pause.png"></img>
	</li>
	<li><img id="next" src="images/next.png"></img></li>
	</ul>
	</div>
	<div>
	<b><p class="song">Bob Dylan - Like A Rolling Stone</p></b>
	</div>
	</body>
</html>
