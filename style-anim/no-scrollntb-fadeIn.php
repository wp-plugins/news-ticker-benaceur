<style>
<?php if( $ntb_disa_img_n_fadein == 'enable_img_n_fadein') { ?>
    #next-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-next.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php echo $ntb_height; ?>px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    <?php if ($dir == 'ltr') { ?>	
    right:2px;
    <?php } elseif ($dir == 'rtl') { ?>	
    left:37px;
    <?php } ?>	
}
    #next-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
	
    #prev-button-ntb {
    position:absolute;
    background-image: url(<?php echo '' . plugins_url( 'img/slide-prev.png', dirname(__FILE__) ) . ''; ?>);
    background-repeat: no-repeat;
    background-position:0 55%;
    background-size: 16px 16px;
    width:28px;
    height:<?php echo $ntb_height; ?>px;
    cursor:pointer;
    -webkit-transition: opacity 1s ease-in-out;
    -moz-transition: opacity 0.3s ease-in-out;
    -ms-transition: opacity 0.3s ease-in-out;
    -o-transition: opacity 0.3s ease-in-out;
    transition: opacity 0.3s ease-in-out; 
	filter: alpha(opacity=70);
    opacity: 0.7;
    <?php if ($dir == 'ltr') { ?>	
    right:30px;
    <?php } elseif ($dir == 'rtl') { ?>	
    left:6px;
    <?php } ?>	
}
    #prev-button-ntb:hover {
    filter: alpha(opacity=100);
    opacity: 1;
}
<?php } ?>

</style>

<?php if (!is_admin() && ($ntb_enable_jquerymin_slide_up_down == 'enable_jquery_min_sud' || $ntb_enable_jquerymin_fadein == 'enable_jquery_min_fa'))
	{ ?><script <?php echo 'src="' . plugins_url( 'js/min-ben.js', dirname(__FILE__) ) . '"'; ?>></script><?php } ?>

<script>
(function ($) {

    $.fn.newsTicker = function (options) {
        var options = $.extend({}, $.fn.newsTicker.config, options);
		
		/* check that the passed element is actually in the DOM */
		if ($(this).length == 0) {
			if (window.console && window.console.log) {
				window.console.log('Element does not exist in DOM!');
			}
			else {
				alert('Element does not exist in DOM!');		
			}
			return false;
		}
		
		/* ID of the identifier */
		var newsID = '#' + $(this).attr('id');
		$(newsID).hide();
		
        return this.each(function () {
            /* initialize the elements in the collection */
			var settings = {				
				count: 0,
				newsArr: {},
				play: true,
				contentLoaded: false,
				interval:'',
				clearIntrvl:0
			};
			
			/* Next button click button handler */
			$(options.nextBtnDiv).click(function() {
				settings.clearIntrvl = 1;
				putNews();
			});
			
			/* Prev button click button handler */
			$(options.prevBtnDiv).click(function() {
				if (settings.count == 0) {
					settings.count = countSize(settings.newsArr) -2;
				}
				else if (settings.count == 1) {
					settings.count = countSize(settings.newsArr) -1;
				}
				else {
					settings.count = settings.count - 2;
				}
				
				if (settings.count < 0) {
					settings.count = countSize(settings.newsArr)-1;
				}
				settings.clearIntrvl = 1;
				putNews();
			});
			
			/* Play/Pause button click button handler */
			$(options.playPauseID).click(function() {
				if(settings.play == true)
				{
					if(settings.interval)
					{
						settings.clearIntrvl = 1;
						clearInterval(settings.interval);
					}
					settings.play= false;
					debugError('Paused:'+settings.count);
				}
				else				
				{
					debugError('Play :'+settings.count);
					settings.play= true;
					putNews();
				}
			});
			
			initPage();
			
			function initPage()
			{
				populateNews();
				
				if(settings.contentLoaded)
				{
					settings.clearIntrvl = 1;
					putNews();
				}
			}
            <?php if( empty($ntb_autostart_fadein)) {  ?>
			function runIntervals()
			{
				settings.clearIntrvl=0;	
				settings.interval = setInterval(function(){ putNews() }, options.interval);
					
				$(options.newsData).hover(function() {
						if(settings.interval)
						{
							settings.clearIntrvl = 1;
                            <?php if( !empty($ntb_pause_fadein)) {  ?>
							clearInterval(settings.interval);
                            <?php } ?>
						}
					 }, function(){
						putNews();
					 });
			}
            <?php } ?>
			/* Function to get the size of an Object*/
			function countSize(obj) {
			    var size = 0, key;
			    for (key in obj) {
			        if (obj.hasOwnProperty(key)) size++;
			    }
			    return size;
			};

			/* This function populates news from the array to newsData div */
			function putNews()
			{
				debugError('in News putting :'+settings.count);
				if(settings.clearIntrvl == 1)
				{
					if(settings.interval)
						clearInterval(settings.interval);
						
				}
			
				$(options.newsData).fadeOut('slow',function(){
					var news = settings.newsArr[settings.count].content;
					
					$(options.newsData).html(news).fadeIn('slow');
					settings.count++;
					if (settings.count == countSize(settings.newsArr) ) {
						settings.count = 0;
					}
				});
				
				if(settings.clearIntrvl == 1)
				{
					runIntervals();
				}
			}	
			
			/* This function populates news array from the UL list */
			function populateNews()
			{
				var tagType = $(newsID).get(0).tagName; 
				
				if (tagType != 'UL' ) {
					debugError('Cannot use <' + tagType.toLowerCase() + '> type of element for this plugin - must of type <ul> or <ol>');
					return false;
				}
				
				if($(newsID + ' LI').length > 0) {
					$(newsID + ' LI').each(function (i) {
						// Populating the news array from LI elements
						settings.newsArr[i] = { type: options.titleText, content: $(this).html()};
					});		
				}	
				else {
					debugError('There are no news in UL tag!');
					return false;
				}
				
				if (countSize(settings.newsArr < 1)) {
					debugError('Couldn\'t find any content from the UL news!');
					return false;
				}
				settings.contentLoaded = true;
			}
			
			/* Function for handling debug and error messages */ 
			function debugError(obj) {
				if (options.debugMode) {
					if (window.console && window.console.log) {
						window.console.log(obj);
					}
					else {
						alert(obj);			
					}
				}
			}
        });
    };

    $.fn.newsTicker.config = {
        // set values and custom functions
		interval: <?php echo $ntb_timeout_fadein; ?>,
		newsData: "#ntbne",
		prevBtnDiv: "#prev-button-ntb",
		nextBtnDiv: "#next-button-ntb",
		playPauseID: "#play-pause",
		effect: "fadeIn",
		debugMode:0
    };

}(jQuery));
        </script>
