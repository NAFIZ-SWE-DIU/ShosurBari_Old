


<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">


        <!--   <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul> -->
				  <?php 
				   /*
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"userhome.php?id=$id\">Profile</a></li>";
				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }


				  
				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"register.php\">Register</a></li>";
				  }
*/
				  ?>
					
				<!--  </ul>
				</li>
			   </ul>
             </nav>
           </div>-->


           <a class="brand" href="index.php"><img style="width: 175px" src="images/shosurbari-logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 



		 <!-- Brand and toggle get grouped for better mobile display -->

<div class="navbar-header nav_2">
  <a class="navbar-brand" href="#">MENU</a>
  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
    <span class="menu-text"></span>
<div class="close-menu" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</div>
  </button>
</div>

<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>



			<script>
			$(document).ready(function(){
				$(".dropdown").hover(            
					function() {
						$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
						$(this).toggleClass('open');        
					},
					function() {
						$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
						$(this).toggleClass('open');       
					}
				);
			});
			</script>

		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Search & Find Biodata</a></li>
		                <li><a href="faq.php">FAQ's</a></li>
		                
		              </ul>
		            </li>
					<li><a href="about.php">About</a></li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
	


					<li>
  <?php 
  if (isloggedin()) {
    $id = $_SESSION['id'];
    $pic1 = ""; // Assuming you have fetched the user's image path from the database and stored it in $pic1

    // Getting image filenames from db
    $sql2 = "SELECT * FROM photos WHERE user_id = $id";
    $result2 = mysqlexec($sql2);
    if ($result2) {
      $row2 = mysqli_fetch_array($result2);
      if ($row2) {
        $pic1 = $row2['pic1'];
      }
    }

    echo "<li class=\"login-navbar-img\"><a href=\"userhome.php?id=$id\">";
    if (!empty($pic1)) {
      echo "<img class=\"img-responsive\" src=\"profile/{$id}/{$pic1}\"/>";
    } else {
      echo "<img class=\"img-responsive\" src=\"images/shosurbari-male-icon.jpg\" />";
    }
    echo "</a></li>";
    
    echo "<li class=\"login-navbar-icon\"><a href=\"logout.php\"><i class=\"fa fa-sign-out\" ></i></a></li>";
  } else {
    echo "<li><a href=\"login.php\">Login</a></li>";
    echo "<li><a href=\"register.php\">Register</a></li>";
  }
  ?> 
</li>






		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
			
			<div id="progress-bar"></div>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->


<script>
	function updateProgressBar(){
  const {scrollTop, scrollHeight} = document.documentElement;
  const scrollPercent = scrollTop / (scrollHeight - window.innerHeight) * 100 + '%';
  document.querySelector('#progress-bar').style.setProperty('--progress', scrollPercent);
}

document.addEventListener('scroll', updateProgressBar);
</script>

