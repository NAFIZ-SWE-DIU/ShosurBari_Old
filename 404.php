<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Search - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/optionsearch.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
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
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->




   
   
   
   
   <div class="error-page">
		<div class="container">
			<div class="row">
					<div class="error-message">
						<h1 class="error-title">Page Not Found</h1>
						<h2 class="error-code">404 Error</h2>
						<p class="error-text">The page you are searching for is not available.</p>
						<a href="index.php" class="btn btn-primary">Go Back to Home Page</a>
					</div>
			</div>
		</div>
	</div>

    <style>
        /* Center the error message */
.error-message {
    text-align: center;
    margin-top: 70px;
}

/* Add background color and padding to the error page */
.error-page {
    background-color: #f8f9fa;
    padding: 20px 0;
    text-align: center;
}

/* Style the error title */
.error-title {
    font-size: 3rem;
    color: red;
}

/* Style the error code */
.error-code {
    font-size: 7rem;
    font-weight: bold;
    color: #000;
    margin-top: 10px;
    margin-bottom: 10px;
}

/* Style the error text */
.error-text {
    font-size: 1.5rem;
    margin-bottom: 30px;
}

/* Style the button */
.btn-primary {
    border-color: #007bff;
    font-size: 1rem;
    font-weight: bold;

    background: #ff0080;
    border-radius: 6px;
    width: 200px;
    padding: 5.5px;
    display: inline-block;
    color: #fff;
    outline: none;
    border: none;
    margin: 0px;
}

/* Change the color of the button on hover */
.btn-primary:hover {
    background: #00bbff;
    border-color: #0062cc;
}

        </style>

<?php include_once("footer.php");?>

</body>
</html>	