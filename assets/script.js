$(document).ready(function () {

    $.getJSON("dataTeam.json",function (data) {
            console.log("test");
            console.log(data.length);
            var html = '<div class="row d-flex justify-content-center mt-5">';
            $.each(data, function (indexInArray, valueOfElement) { 
                if (indexInArray < 3) {
                    html += '<div class="card text-center shadow rounded-0 border-0 mr-5" style="width: 22rem;">'
                    +'<img src="<?php echo base_url().'+valueOfElement.image+'?>" class="rounded-circle mx-auto d-block mt-4" style="width: 300px; height: 300px;" alt="...">'
                    +'<div class="card-body">'
                      +'<h5 class="teamName card-title display-5">'+valueOfElement.name+'</h5>'
                      +'<p class="teamJob lead">'+valueOfElement.job+'</p>'
                      +'<p class="card-text lead">'+valueOfElement.desc+'</p>'
                    +'</div>'
                  +'</div>';
                } else if (indexInArray === 3) {
                    html+= '</div>'
                    +'<div class="row d-flex justify-content-center mt-5">'
                    +'<div class="card text-center shadow rounded-0 border-0 mr-5" style="width: 22rem;">'
                    +'<img src="<?php echo base_url().'+valueOfElement.image+'?>" class="rounded-circle mx-auto d-block mt-4" style="width: 300px; height: 300px;" alt="...">'
                    +'<div class="card-body">'
                    +'<h5 class="teamName card-title display-5">'+valueOfElement.name+'</h5>'
                    +'<p class="teamJob lead">'+valueOfElement.job+'</p>'
                    +'<p class="card-text lead">'+valueOfElement.desc+'</p>'
                    +'</div>'
                    +'</div>';                   
                }else{
                    html += '<div class="card text-center shadow rounded-0 border-0 mr-5" style="width: 22rem;">'
                    +'<img src="<?php echo base_url().'+valueOfElement.image+'?>" class="rounded-circle mx-auto d-block mt-4" style="width: 300px; height: 300px;" alt="...">'
                    +'<div class="card-body">'
                      +'<h5 class="teamName card-title display-5">'+valueOfElement.name+'</h5>'
                      +'<p class="teamJob lead">'+valueOfElement.job+'</p>'
                      +'<p class="card-text lead">'+valueOfElement.desc+'</p>'
                    +'</div>'
                  +'</div>'
                  +'</div>'
                }
            });
            $(".team").append(html);
    
        }
    );

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
    
    $(".readMoreNews.d-flex").hover(function () {
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