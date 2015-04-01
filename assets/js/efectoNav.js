$(window).scroll(function () {
    if ($(window).scrollTop() > 700) {
         if ( $( "#miMenu" ).is( ":hidden" ) ) {
          $( "#miMenu" ).slideDown( "slow" );
        } 
        $('#miMenu').css('top', $(window).scrollTop());
    }
    else {
          $( "#miMenu" ).slideUp()
      }
}
);