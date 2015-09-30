<!--This is the top navigation for the website and the header images for the template.-->

<!-- The $basename variable is used below to designate which screen the user is on. You can use the css for #currentpage to designate how the current page is highlighted in the top navigation bar.  -->
<?php $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); ?>



    <div class="navbar navbar-inverse navbar-fixed-top my-nav" role="navigation" style="width:100%;margin-left:auto;margin-right:auto; box-shadow: 0 8px 6px -6px #969696">
      <div class="container-fluid" style="margin-left:auto;margin-right:auto">
        <div class="navbar-header">
          
        <!--This is the "hamburger" menu that appears on the left when their isn't room to display the nav bar.-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
          <!--This is the name that will appear in the upper left navigation. -->
          <a class="navbar-brand" href="index.php">White Buffalo Template</a>
          
          
        </div>
        
<!--These are the menu items in the top right navigation-->       

		 <div class="navbar-collapse collapse" >
         
          <ul class="nav navbar-nav navbar-right" >
          
            
            <!--If the $basename == the current page, then this code attaches the #currentpage ID. This gives you the opportunity to change the CSS for the item in the nav bar by changing the css for #currentpage in css/style.css-->
            
            <!--Home Screen link-->
             <li><a href="index.php" 
            <?php if ($basename=="index")
				echo " id=\"currentpage\"";
				?>
            >Home</a></li>
            
            <!--About Screen link-->
             <li><a href="about.php" 
            <?php if ($basename=="about")
				echo " id=\"currentpage\"";
				?>
            >About</a></li>
            
            <!--About Screen link-->
             <li><a href="contact.php" 
            <?php if ($basename=="contact")
				echo " id=\"currentpage\"";
				?>
            >Contact</a></li>
            
            
           <li class="dropdown navbar-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galleries<span class="caret"></span> &nbsp;</a>
                  <ul class="dropdown-menu" role="menu" aria-expanded="false">
                    <li style="text-align:right"><a href="gallery-slider.php">Bootstrap Slider</a></li>
                    <li style="text-align:right"><a href="gallery-modal.php">Bootstrap Modal</a></li>
                    
                    
                  </ul>
                </li>
          
           <!--Games dropdown menu-->
            
               
            
             <li class="dropdown navbar-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Games<span class="caret"></span> &nbsp;</a>
                  <ul class="dropdown-menu" role="menu" aria-expanded="false">
                    <li style="text-align:right"><a href="quiz.php">Quiz</a></li>
                    <li style="text-align:right"><a href="picture-quiz.php">Picture Quiz</a></li>
                    <li style="text-align:right"><a href="puzzle.php">Puzzle</a></li>
                    <li style="text-align:right"><a href="word-find.php">Word Find </a></li>

                    
                  </ul>
                </li>
            
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
   
  </div>
  
  
  			
  <?php 
  
	/*There are two banner images--one for the home page, generally a larger banner, and one for the other pages. */      

	if ($basename=="index"){
		
		/* Set home page image here. */
          echo ' <img src="images/header-large.png" class="banner-img" /> ';
      }else {
		  
		  /*Set the banner for the other pages here.*/
          echo ' <img src="images/header-small.png"  class="banner-img" /> ';
          
          }
  ?>
  
					
					  
			

  			
            
            
  
  	