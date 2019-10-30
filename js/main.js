$(document).ready(function(){
    $('.modal').modal();
    $('.scrollspy').scrollSpy();
    $('.fixed-action-btn').floatingActionButton({direction:'left'});

    var headBarElem = $('header');


        window.onscroll = function() {
            $(window).bind('mousewheel', function(event) {
                if (event.originalEvent.wheelDelta >= 0) {
                    headBarElem.fadeIn();
                    $('#mini-head-menu').fadeOut();
                } else {
                    headBarElem.fadeOut();
                    $('#mini-head-menu').fadeIn();
                }
            });
        };

    });