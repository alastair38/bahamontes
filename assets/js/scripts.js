
/*
These functions make sure WordPress
and Foundation play nice together.
*/

// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery(document).ready(function() {
  //  jQuery('.accordion p:empty, .orbit p:empty').remove();

  $('.button-collapse').sideNav({
      edge: 'right', // Choose the horizontal origin
      menuWidth: 300
    }
  );
  $('select').material_select();

 $('.modal-trigger').leanModal({opacity: 0.5});
 $(".modal-trigger").click(function(){
      $('.header').css('z-index', '89');
 });
$(".dropdown-button").click(function(){
  $width = $("li.dropdown").width();
  $(".mdi-menu-down").toggleClass("rotate");
  $(".dropdown-content").toggleClass("block").css("min-width", $("li.dropdown").width());
});
$(".add-image").removeClass("button").addClass("btn");
//$(".label").removeClass("label").addClass("chip");
$(".field input[value='Report location']").addClass("btn");

});

window.cookieconsent_options = {
       learnMore: 'More info',
       theme: 'dark-bottom',
       link: document.location.origin + '/privacy'
   };
