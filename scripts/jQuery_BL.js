/****************************************************
 * Project:     BartiLevi
 * Filename:    try.js
 * Encoding:    UTF-8
 * Created:     2014-04-15
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 ***************************************************/
var hei = $('#imgResized').css("height");
//$(document).ready(function(){
function onHover(){      
    $("#imgResized").mouseenter(function(){
        $("#imgResized").animate({ height:"400px"},400, function(){
//            $("#ZDJ_01").css({"border":"1px solid black", "padding":"5px", "border-color":"blue"});
                image = $("<img />").attr({"src":"img/Barti_dyplomII.jpg","id":"imgResized"}).css({"float":"left", "margin":"6px"});
                $("#imgContener").html(image);
                $("#imgResized").css({"border":"1px solid black", "padding":"5px", "border-color":"blue"});;
        });
    });
}
    
function outHover(){  
    $("#imgContener").mouseout(function(){
//        alert(hei);
        $("#imgResized").animate({ height:"120px", "border":"", "padding":"", "border-color":""},400);
        });
    };




$(document).ready(function(){
//    var hei = $('#ZDJ_01').css("height");
    
//    $("#IMG_001").click(function(){
//        image = $("<img />").attr({"src":"img/Barti_dyplomII.jpg","id":"ZDJ_01"});
//        $("#IMG_001").html(image);
//    });
//    $("#IMG_001").mouseout(function(){
//        image = $("<img />").attr({"src":"img/Barti_dyplomII thumb.jpg","id":"ZDJ_01"}).css({"float":"left", "margin":"6px"});
//        $("#IMG_001").html(image);
//    });
});


