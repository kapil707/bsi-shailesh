<footer class="dark-grey-bg text-center text-white">
			<div class="container-fluid">
				
					<p>This site is for information purpose only and should not be treated as the official informations.</p>

                    <h5>Agent RERA No. :- UPRERAAGT23418 | Project RERA No. :- UPRERAPRJ787868 | https://www.up-rera.in | Disclaimer & Privacy Policy</h5>
				</div>
				
			</div>
		</footer>
		<!-- /.. FOOTER ENDS
			========================================================================= -->
		<!-- TO TOP STARTS
			========================================================================= -->
		<a href="#home" class="back-to-top"><i class="las la-angle-up"></i></a>
		<!-- /.. TO TOP ENDS
			========================================================================= -->
		<!-- INCLUD ALL JS FILES 
			========================================================================= -->
		<!--JQUERY MIN JS-->
		<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-content">
<div class="modal-body">
<div class="left_col">
 <div class="content">
<div class="d-none d-sm-block">
	<img src="https://www.bsinfra.in/real_estate_admin/uploads/manage_project_website/photo/main/okas_logo4.webp" alt="okas logo" width="100%" class="">
</div>
<div class="d-block d-sm-none">
	<img src="https://www.bsinfra.in/real_estate_admin/uploads/manage_project_website/photo/main/okas_logo5.webp" alt="okas logo" width="90%" class="img-fluid">
</div>
</div>
</div>
<div class="right_col">
<div class="animated_form">
<div class="form-head"><p class="">Please fill out the form and our team will get in touch with you soon.
<a href="tel:011-40844929" style="color: black !important;">
<i class="fa fa-phone" aria-hidden="true" style="color: black !important;"></i> 011-40844929</a>
</p>
</div>
<form name="form1" action="contact.php" method="post">
<div class="form-group">
<input class="form-control" name="name" type="text" placeholder="Your Name*" required="" id="qSenderNamemodal">
</div>
<div class="form-group">
<input id="qMobileNomodal" class="form-control mobileInput1" type="text" placeholder="Your Phone Number*" name="mobile" required="" pattern="[6-9]{1}[0-9]{9}" title="Phone number 10 digit with 0-9">
</div>
<button class="btn dark_btn1" type="submit" id="SubmitQuerymodal">Submit</button>
</form>
</div>
</div>
</div>
</div>
  </div>

</div>
		<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".myModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

		<script src="assets/lib/jquery-1.12.4/jquery.min.js"></script>
		<!--BOOTSTRAP JS-->
		<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
		<!-- REVOLUTION JS FILES -->
		<script src="assets/lib/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="assets/lib/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<!-- SLICEY ADD-ON FILES -->
		<script src='assets/lib/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min8a54.js?ver=1.0.0'></script>
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->	
		<script src="assets/lib/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script src="assets/lib/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script >
			var tpj=jQuery;
			var revapi24;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_24_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_24_1");
				}else{
					revapi24 = tpj("#rev_slider_24_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
								mouseScrollReverse:"default",
							onHoverStop:"off",
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"bullet-bar",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:50,
								space:5,
								tmp:''
							}
							,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:false,
					hide_onleave:false,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:10,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:10,
						v_offset:0
					}
				}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						shadow:0,
						spinner:"spinner1",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "0px",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			
									 if(revapi24) revapi24.revSliderSlicey();
			});	/*ready*/
		</script>
		<!-- PRELOADER -->
		<script src="assets/lib/preloader/sPreloader.js"></script>
		<!-- OWL CAROUSEL --> 
		<script src="assets/lib/owl-carousel/owl.carousel.js"></script> 
		<!-- ISOTOPE GALLERY --> 
		<script src="assets/lib/isotope/jquery.isotope.min.js"></script> 
		<script src="assets/lib/isotope/custom-isotope-mansory.js"></script> 
		<!-- MAGNIFIC POPUP -->
		<script src="assets/lib/magnific-popup/jquery.magnific-popup.js"></script>
		<!-- CONTACT FORM JS -->
		<script src="assets/js/contact-form/contact-form.js"></script>
		<!-- CUSTOM JS -->
		<script src="assets/js/script.js"></script>
	</body>

<!-- Mirrored from alearslan.com/this-one-one-page-responsive-website-template/Default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 May 2024 06:42:09 GMT -->
</html>