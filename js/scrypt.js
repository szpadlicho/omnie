/*
 * width browser window 
*/
var both = function () {
    // debugger
    var htt = $(window).height();
    var wtt = $(window).width();
    $('#count').css({'color':'white'});
    $('#count').text(wtt+'/'+htt);
    // setup
    $( '#relative-holder' ).css({'width':wtt+'px','height':htt+'px'});
};
$(document).ready(both);
$(document).load(both);
$(window).resize(both);
$(document).ready(function(){
    /*
     * click events
    */
    $( '#home' ).click(function(){
        $( '#earth, #jupiter, #saturn' ).removeClass( 'zoom' ).addClass( 'satellite' );
        $( '.center, .satellite' ).css({'left':'', 'top':'','width':'','height':'','transition':'300ms linear'});/*i add only this*/
        $( '.satellite' ).removeClass( 'paused' ).addClass( 'running' );
        $( '#earth, #jupiter, #saturn' ).removeAttr( 'style' );
        setTimeout(function() {
            $( '.center, .satellite' ).removeAttr( 'style' );    
        }, 300);

        $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
    });
    $( '#about' ).click(function(){
        if ( $( '#sun' ).hasClass('paused') ) {
            $( '#earth, #jupiter, #saturn' ).removeClass( 'zoom' ).addClass( 'satellite' ).removeAttr( 'style' );
            $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
        }
        $( '#earth' ).removeClass( 'satellite' ).addClass( 'zoom' );
        $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','height':'0'});
        $( '#earth' ).css({'left':'-20em', 'top':'-20em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
        
        $( '#about-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
        $( '#about-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
        
    });
    $( '#links' ).click(function(){
        if ( $( '#sun' ).hasClass('paused') ) {
            $( '#earth, #jupiter, #saturn' ).removeClass( 'zoom' ).addClass( 'satellite' ).removeAttr( 'style' );
            $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
        }
        $( '#jupiter' ).removeClass( 'satellite' ).addClass( 'zoom' );
        $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','height':'0'});
        $( '#jupiter' ).css({'left':'-20em', 'top':'-20em', 'width':'40em','height':'40em','transition':'300ms linear','animation-name':'none'});
        
        $( '#links-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
        $( '#links-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
    });
    $( '#contact' ).click(function(){
        if ( $( '#sun' ).hasClass('paused') ) {
            $( '#earth, #jupiter, #saturn' ).removeClass( 'zoom' ).addClass( 'satellite' ).removeAttr( 'style' );
            $( '.content' ).removeClass( 'show right-p left-p' ).addClass( 'hidden' );
        }
        $( '#saturn' ).removeClass( 'satellite' ).addClass( 'zoom' );
        $( '.center, .satellite' ).removeClass( 'running' ).addClass( 'paused' ).css({'width':'0','height':'0'});
        $( '#saturn' ).css({'left':'-20em', 'top':'-10em', 'width':'40em','height':'20em','transition':'300ms linear','animation-name':'none'});
        
        $( '#contact-left' ).removeClass( 'hidden' ).addClass( 'show left-p' );
        $( '#contact-right' ).removeClass( 'hidden' ).addClass( 'show right-p' );
    });
    /*
     * load site dynamically in div
    */
    $( '.project-link' ).hover(function(){
        var url = $(this).attr( 'href' );
        $( '#links-right' ).html( '<img src="images/loading.gif"> loading...' );
        $( '#links-right' ).html( '<object width="100%" height="100%" type="text/html" data="'+url+'"/>' );
    });
});