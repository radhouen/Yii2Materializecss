$("header").load("master.html", function () { 
    delete jQuery.Velocity;
    jQuery.getScript("materialize.js");
});
(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
