$(document).ready(function () {

    $("li").hover(function () {
            // over
            $(this).animate({left: '1px'});
            
        }, function () {
            // out
            $(this).animate({left: '-0.5px'});
        }
    );
    
});
