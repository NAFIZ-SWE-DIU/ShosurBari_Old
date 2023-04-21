<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>FAQ's - ShosurBari</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;<|>&nbsp;</span>
        <li class="current-page"><h4>FAQ's</h4></li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/s2.jpg" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1>Frequent Ask Questions</h1>
   	  	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
   	  	<div class="accordation">


			 <div class="jb-accordion-wrapper">
			<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion1">Accordion 1 <i class="fa fa-angle-down"> </i></button>
				<div id="accordion1" class="jb-accordion-content collapse in" style="height: auto;">
				    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				</div>  
			</div>

		   <div class="jb-accordion-wrapper">
		   <button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion2">Accordion 2<i class="fa fa-angle-down"> </i></button>
				<div id="accordion2" class="jb-accordion-content collapse">
				    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae...</p>
				</div>
			</div>

			<div class="jb-accordion-wrapper">
			<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion3">Accordion 3 <i class="fa fa-angle-down"> </i></button>
				<div id="accordion3" class="jb-accordion-content collapse">
				    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				</div>  
			</div>

			<div class="jb-accordion-wrapper">
			<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion4"> Accordion 4 <i class="fa fa-angle-down"> </i></button>
				</p><div id="accordion4" class="jb-accordion-content collapse">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				</div>  
			</div>
			
			<div class="jb-accordion-wrapper">
			<button type="button" class="jb-accordion-button" data-toggle="collapse" data-target="#accordion5">Accordion 5<i class="fa fa-angle-down"> </i></button>
				</p><div id="accordion5" class="jb-accordion-content collapse">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt </p>
				</div>
			</div>
		</div>
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<style>
	.jb-accordion-button{
		width: 100%;
		background: #ff0080;
		color: #fff;
		border: 1px #ccc;
		border-radius: 4px;
		padding: 10px 20px;
	}

	.jb-accordion-wrapper{
		margin-bottom: 20px;
        margin-top: 20px;
	}

	.fa-angle-down:before {
    content: "\f107";
    margin-left: 20px;
}

.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: 100%;
}
	</style>

<div class="about_middle">
<div class="container">

	<h2>Our Team</h2>
	<div class="about_middle-grid1">

		<div class="col-sm-6 testi_grid list-item-0">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/nn.png"  class="img-responsive" alt=""/>
				</figure>
				<div><a>Hi, This is Nafiz. I'm a CEO of this platform. I worked major sector for this platform. Specially i worked Maintanence & Security sectors. Eassily You can contact with me. please follow ShosurBari.com facebook page,</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
		    <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
		</div>


		<div class="col-sm-6 testi_grid list-item-1">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a2.jpg" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
			<small class="testi-meta1"><span class="user">Sint occaecat </span></small>
		</div>
		<div class="clearfix"> </div>
	</div>


	<div class="about_middle-grid2">
		
		<div class="col-sm-6 testi_grid list-item-0">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a2.jpg" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
		    <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
		</div>


		<div class="col-sm-6 testi_grid list-item-1">
			<blockquote class="testi_grid_blockquote">
				<figure class="featured-thumbnail">
					<img src="images/a2.jpg" class="img-responsive" alt=""/>
				</figure>
				<div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.…</a>
				<div class="clearfix"></div>
				</div>
			</blockquote>
			<small class="testi-meta1"><span class="user">Sint occaecat </span></small>
		</div>
		<div class="clearfix"> </div>
	</div>

</div>
</div>

<?php include_once("footer.php");?>

</body>
</html>	
