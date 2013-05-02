<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Glass :: Dashboard</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>

</style>
<script>
$(function() {
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
});
</script>
</head>
<body>

<div id="wrapper">
	<div id="apps">
	<ul id="sortable">
		<li class="app-block"><iframe width="100%" height="100%" frameborder=0 src="clock.application/index.html"></iframe></li>
		<li class="app-block"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
		<li class="app-block"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
		<li class="app-block"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
		<li class="app-block"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
		<li class="app-block"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
	</ul>
	</div>
	<div class="clear"></div>
</div>
<div>
<iframe width="100%" height="100%" frameborder="0" src="signs.application/index.html"></iframe>
</div>
</body>
</html>

<script>
window.requestFileSystem  = window.requestFileSystem || window.webkitRequestFileSystem;
 
window.requestFileSystem(window.TEMPORARY, 5*1024*1024, initFS, errorHandler);
 
function initFS(){
  // alert("Welcome to Filesystem! It's showtime :)"); // Just to check if everything is OK :)
  // place the functions you will learn bellow here
}
 
function errorHandler(){
  console.log('An error occured');
}
</script>