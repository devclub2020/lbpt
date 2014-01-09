<!-- footer starts here -->
<div class="footer">
	<div class="container footer_container">
    	<div class="row footer_outline">
        	<div class="footer_content">
            	<p>© Copyright 2013 Lee Mires Personal Trainer. Terms & Conditions</p>
            </div>
        </div>
    </div>
</div>
<!-- footer ends here -->
<script src="dist/js/jquery.scrollTo.min.js"></script>
<script src="dist/js/jquery.localScroll.min.js"></script>

<script>
	$(document).ready(function() {
	   $('.mynav').localScroll({duration:800});
	});

  $(function() {
    $(".rslides").responsiveSlides({
    	auto: false,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "centered-btns"
    });
  });
</script>
</body>
</html>