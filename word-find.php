<!DOCTYPE HTML>
<!--There are two versions of the code--this version is for screen widths greater than 660 px. 
The code redirects to the mobile version for less than 660px. -->

<html>
<head>
<?php require_once "header.php" ?>
<script>
if (screen.width <= 660) {
document.location = "http://whitebuffalosolutions.com/WB-Template/word-find-mobile.php";
}
</script>
</head>

<body>
<!--The Bootstrap nav bar conflicts with the game javascript. As a quick fix I removed the nav bar and added a home button --> 

<!--Added -50px to the top margin to compensate for the missing nav bar -->
<div class = "wrapper" style="margin-top:-50px"> <img src="images/header-small.png"  class="banner-img" />
	<div class="content"> <a href="index.php" target="_blank">HOME</a>
		<h1 style="margin-bottom:20px;text-align:left;color:#902828">Word Find Game</h1>
		<p>This word find game is based on the code by <a href="https://code.google.com/p/jquery-wordsearch-game/" target="_blank">Ryan Fernandes</a> and is covered by an MIT license. It has a lot of bells and whistles. As users find a word, there is an animation to cross it off the list of words. Note: The nav bar does not work on this game, as it is now. </p>
		<div id="theGrid" style="display:block;clear:both"></div>
		<div style="clear:both;display:block"> <br>
			<hr/>
			<br>
		</div>
	</div>
	<!--End Content-->
	
	<?php require_once "footer.php" ?>
	<script type="text/javascript" src="wordfind/jquery-1.6.2.min.js"></script> 
	<script type="text/javascript" src="wordfind/jquery-ui-1.8.16.custom.min.js"></script> 
	<script type="text/javascript" src="wordfind/jquery.wordsearchgame.js"></script> 
	<script src="wordfind/jquery.ui.touch-punch.min.js"></script>
	<link  rel="stylesheet" type="text/css" href="wordfind/jquery.wordsearchgame.css">
	<script>
	/* Change the words to your words in the array below */
		$(document).ready( function () {var words = "javascript,html,css,php,programmer,developer,code,nerd,geek,loop,"+
						"conditional,object,jquery,bootstrap,scope,github,abstract,hexadecimal,binary";
			
			//attach the game to a div
			$("#theGrid").wordsearchwidget({"wordlist" : words,"gridsize" : 20});

		});

    
        </script> 
</div>
</body>
</html>