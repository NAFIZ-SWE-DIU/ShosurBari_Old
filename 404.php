<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>


<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Error 404- ShosurBari</title>
</head>
<body>


	
    <!-- 404 Page area Start-->
    <div class="error-page-area">
        <div class="error-page-wrap">
            <i class="notika-icon notika-close"></i>
            <h2>ERROR <span class="counter" style="color:#06b6d4;">404!</span></h2>
            <p>Sorry, But the page you are looking for has not been found. Try checking the URL for an error, then hit the refresh button on your browser or try found something else in our site.</p>
            <a href="index.php" class="btn">Go to Back Home Page</a>
            <a href="contact.php" class="btn error-btn-mg">Report Problem</a>
        </div>
    </div>
    <!-- 404 Page area End-->
 

    <style>
.error-page-area{
    min-height:100vh;
    text-align:center;
    background:#06b6d4;
}
.error-page-area:before{
    content:'';
    height:100vh;
    width:1px;
}
.error-page-area:before{
    vertical-align: middle;
    display: inline-block;
}
.error-page-wrap{
    max-width:580px;
    padding:20px 0;
    width:60%;
    position:relative;
	margin: 0 auto;
    background:#fff;
    box-shadow:0 1px 1px rgba(0,0,0,.1);
    border-radius:2px;
    vertical-align: middle;
    display: inline-block;
}

.error-page-wrap h2{
	font-size: 27px;
	color: #333;
    margin-top: -15px;
    margin-bottom: -15px;
}
.error-page-wrap p{
	font-size:17px;
	color:#333;
	line-height:24px;
    padding: 10px;
}
.error-page-wrap .btn{
	background:#06b6d4;
	color:#fff;
	border-radius:2px;
	box-shadow: 0 2px 5px rgba(0,0,0,.16), 0 2px 10px rgba(0,0,0,.12);
	outline:none;
	margin:0px 5px;
	font-size:14px;
    padding: 7px;
    text-decoration: none;
}
.error-page-wrap .btn:hover{
	background:#0aa4ca;
	color:#fff;
    padding: 7px;
}
.error-page-wrap .counter{
	color:#00c292;
}
.error-page-wrap i{
	font-size: 40px;
    color: #00c292;
    padding-bottom: 15px !important;
    display: block;
}









/* start */

</style>


</body>
</html>	
