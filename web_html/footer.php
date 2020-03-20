<!--footer section-->
<section id="upper-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="logo">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="col-md-3">
				<div class="link">
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
						<li><a href="privacy-policy.php">Privacy Policy</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="link">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Line</a></li>
						<li><a href="#">WeChat</a></li>
						<li><a href="#">Mobile: 0000 0000 0000</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--footer section-->

<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/fontawesome.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/pure-js-lightbox.min.js"></script>
<script type="text/javascript" src="js/jquery.nice-select.js"></script>

<script>
    new WOW().init();
</script>

<script type="text/javascript" src="js/owl.carousel.js"></script>

<script type="text/javascript">
      var test = new pureJSLightBox();
</script>

<script>
    $('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})
</script>

<script type="text/javascript">
	$(".box").on("click",".header",function(){
		$(this).toggleClass("acc-active").next().slideToggle();
	});
</script>

<script>
	$('.add').click(function () {
		if ($(this).prev().val() < 10) {
    	$(this).prev().val(+$(this).prev().val() + 1);
		}
});
$('.sub').click(function () {
		if ($(this).next().val() > 1) {
    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
});
</script>

<script>
	$(document).ready(function() {
	  $('select').niceSelect();
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.tp-filter span').click(function(){
			if($('.tp-filter-bx').css("display")==="none"){
				$('.tp-filter-bx').show(200);
			}
			else{
				$('.tp-filter-bx').hide(200);
			}
		})
	})
</script>

</body>
</html>