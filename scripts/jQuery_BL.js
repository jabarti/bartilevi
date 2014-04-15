/****************************************************
 * Project:     BartiLevi
 * Filename:    try.js
 * Encoding:    UTF-8
 * Created:     2014-04-15
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 ***************************************************/

$(document).ready(function(){
    var hei = $('#ZDJ_01').css("height");
    
    $("#ZDJ_01").mouseover(function(){
        $("#ZDJ_01").css("height", "200px");
    });
    $("#ZDJ_01").mouseout(function(){
        $("#ZDJ_01").css("height", hei);
    });
})

//$(document).ready(function(){
//  $("#ZDJ_01").hover(function(){
//    $("#ZDJ_01").toggle();
//  });
//});

