<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/anythingslider.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="jscript/jscript_0.0addgallerylib.js"></script>
<!------ For Nav Active tabs ---------------------->
<script type="text/javascript" src="jscript/jscript_tabselector.js"></script>
<!------ For Nav Active tabs ---------------------->

<!-- Start Confirm Order Edit Popupbox Script -->
<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
<script type="text/javascript" src="jscript/jquery.colorbox-min.js"></script>
<script>
    $(document).ready(function(){
        //Examples of how to assign the ColorBox event to elements
        $(".inline").colorbox({inline:true, width:"50%"});
    });
</script>
<!-- End Confirm Order Edit Popupbox Script -->

<!-- Tab Script -->
<script type="text/javascript" src="jscript/jquery.hoveraccordion.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script> 
<!-- Tab Script -->

<!-- show hide Tickbox div -->
<script type="text/javascript">
	function showMe (it, box) {
	var vis = (box.checked) ? "none" : "block";
	document.getElementById(it).style.display = vis;
	}
</script>
<!-- show hide Tickbox div -->

<!-- AnythingSlider -->
	<script src="jscript/jquery.anythingslider.js"></script>

	<script>
		// Set up Sliders
		// **************
		$(function(){

			$('#slider').anythingSlider({
				mode                : 'f',   // fade mode - new in v1.8!
				resizeContents      : true, // If true, solitary images/objects in the panel will expand to fit the viewport
				navigationSize      : 4,     // Set this to the maximum number of visible navigation tabs; false to disable
				autoPlay            : false,     // If true, the slideshow will start running; replaces "startStopped" option
				autoPlayLocked      : true,     // If true, user changing slides will not stop the slideshow
				pauseOnHover        : false,      // If true & the slideshow is active, the slideshow will pause on hover
				delay               : 6000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
				resumeDelay         : 6000,     // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
				hashTags            : false,
				buildNavigation     : true,
				buildArrows         : true,
				enableArrows        : true,
				enableNavigation    : true,
				appendStartStopTo   : null,
				animationTime       : 500,       // How long the slideshow transition takes (in milliseconds)
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;'][index - 1];
				},
				onSlideBegin: function(e,slider) {
					// keep the current navigation tab in view
					slider.navWindow( slider.targetPage );
				}
			});

		});
	</script>

<!------ Onclick Text Hide from input ---->
<script type="text/javascript">
   function myFocus(element) {
     if (element.value == element.defaultValue) {
       element.value = '';
     }
   }
   function myBlur(element) {
     if (element.value == '') {
       element.value = element.defaultValue;
     }
   }
</script>    
<!------ Onclick Text Hide from input ---->
