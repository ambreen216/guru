/* *********************************************************************************************************************
 * Global namespace "ish"
 */
if (ish == null || typeof(ish) !== "object") { var ish = {} }

  $= jQuery;
/* *********************************************************************************************************************
 * Global variables
 */
var logo;
var nav;
var mainNav;
var WAIT_INTERVAL = 100;
var BREAKINGPOINT = 768;
var RESPONSIVE = true;
var skillz;
var onepage_sections;
var onepage_current;
var chartz;
var floated_areas_opened = false;

// ISH-TODO: PREROB NA PHP VAR
var top_nav_resp_menu_btn = 'Open menu';

if (typeof ishyoboy_fe_globals !== 'undefined') {
    if (typeof ishyoboy_fe_globals.IYB_RESPONSIVE !== 'undefined') {
        RESPONSIVE = ishyoboy_fe_globals.IYB_RESPONSIVE;
    }
    if (typeof ishyoboy_fe_globals.IYB_BREAKINGPOINT !== 'undefined') {
        BREAKINGPOINT = ishyoboy_fe_globals.IYB_BREAKINGPOINT;
    }
}


/* *********************************************************************************************************************
 * After resize function
 */
// Gallery image hover
$( ".advc_img-wrapper" ).hover(
    function() {
        $(this).find(".advc_img-overlay").animate({opacity: 1}, 600);
    }, function() {
        $(this).find(".advc_img-overlay").animate({opacity: 0}, 600);
    }
);

// Lightbox
var $overlay = $('<div id="advc_overlay"></div>');
var $image = $("<img/>");
var $prevButton = $('<div id="advc_prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="advc_nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="advc_exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).append($exitButton);
$("#advc_gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".advc_img-overlay").click(function(event) {
    // Prevents default behavior
    event.preventDefault();
    // Adds href attribute to variable
    var imageLocation = $(this).prev().attr("href");
    // Add the image src to $image
    $image.attr("src", imageLocation);
    // Fade in the overlay
    $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
    // Fade out the overlay
    $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
    // Hide the current image
    $("#advc_overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#advc_overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#advc_image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").next().find("img"));
    // All of the images in the gallery
    var $images = $("#advc_image-gallery img");
    // If there is a next image
    if ($nextImg.length > 0) {
        // Fade in the next image
        $("#advc_overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    } else {
        // Otherwise fade in the first image
        $("#advc_overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
    }
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
    // Hide the current image
    $("#advc_overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#advc_overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#advc_image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").prev().find("img"));
    // Fade in the next image
    $("#advc_overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
    // Fade out the overlay
    $("#advc_overlay").fadeOut("slow");
});