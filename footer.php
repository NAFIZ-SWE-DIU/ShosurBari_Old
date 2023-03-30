
 <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>



    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.php">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.php">FAQs</a></li>
    			</ul>
    		</div>


    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.php">Privacy Policy</a></li>
    				<li><a href="terms.php">Terms and Conditions</a></li>
    				<li><a href="services.php">Services</a></li>
    			</ul>
    		</div>


    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="https://www.facebook.com/ShosurBari.Matrimony" target="blank"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a  href="mailto:shosurbari@gmail.com" target="blank"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>

			
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2022-23 ShosurBari.com | All Rights Reserved  | Developed By - <a href="https://www.facebook.com/NAFIZ.SWE.DIU/" target="_blank">Nafiz Noyon</a></p>
	        </div>
    	</div>
</div>






<div id="scroll-up-btn" onclick="scrollToTop()">
    <i class="fa fa-arrow-up"></i>
</div>

<style>
	#scroll-up-btn {
                position: fixed;
                bottom: 20px;
                right: 30px;
                cursor: pointer;
				padding: 10px;
				background: #ff008087;
				color: #fff;
				border-radius: 3px;
            }
			#scroll-up-btn:hover {
				padding: 10px;
				background: #ff0080;
				color: #fff;
				border-radius: 3px;
            }
  </style>

<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	var scrollBtn = document.getElementById("scroll-up-btn");
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		scrollBtn.style.display = "block";
	} else {
		scrollBtn.style.display = "none";
	}
}

function scrollToTop() {
	var scrollOptions = {
		top: 0,
		left: 0,
		behavior: 'smooth'
	};
	document.documentElement.scrollTo(scrollOptions);
}
  </script>

