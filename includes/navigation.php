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


           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                
		              </ul>
		            </li>
					<li><a href="about.php">About</a></li>
		            <li class="last"><a href="contact.php">Contacts</a></li>
			<li>
			  <?php 
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"userhome.php?id=$id\">Profile</a></li>";
					

					/*  If(isset($_SESSION['username'])) {
						Echo "User : " . $_SESSION ['username'];
						} else {
						Echo "<a href=\”/login.php\”>Login</a>";
						} */

				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }

				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"register.php\">Register</a></li>";
				  }
			    ?> 
				<?php
include("includes/dbconn.php");

//getting profile details from db
$sql="SELECT * FROM users WHERE id = $id";
$result = mysqlexec($sql);

if($result){
$row=mysqli_fetch_assoc($result);
if($row){
$username=$row['username'];
  }
 }
?>
<?php echo  $username; ?>

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
