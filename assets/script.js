$(document).ready(function () {

    $(".aboutList.list-group.list-group-flush > li").hover(function () {
            // over
            $(this).animate({left: '5px'});
            
        }, function () {
            // out
            $(this).animate({left: '-5px'});
        }
    );
    
    $("#viewAllNews").hover(function () {
            // over
            $(this).animate({left: '5px'});
        }, function () {
            // out
            $(this).animate({left: '-5px'});
        }
    );
    
    $("readMoreNews.d-flex").hover(function () {
            // over
            $(this).animate({left: '5px'});
        }, function () {
            // out
            $(this).animate({left: '-5px'});
        }
    );
    $("a").hover(function () {
            // over
            $(this).animate({left: '5px'});
        }, function () {
            // out
            $(this).animate({left: '-5px'});
        }
    );
     
    

});
