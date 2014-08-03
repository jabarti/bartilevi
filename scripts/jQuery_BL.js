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
function onHover(url){      
    url = url || '';
    $("#imgResized").mouseenter(function(){
        $("#imgResized").animate({ height:"200px"},200, function(){
//            $("#ZDJ_01").css({"border":"1px solid black", "padding":"5px", "border-color":"blue"});
                image = $("<img />").attr({"src":url,"id":"imgResized"}).css({"float":"left", "margin":"6px", "height":"200px"});
                $("#imgContener").html(image);
                $("#imgResized").css({"border":"1px solid black", "padding":"5px", "border-color":"blue"});;
        });
    });
}
    
function outHover(){  
    $("#imgContener").mouseout(function(){
//        alert(hei);
        $("#imgResized").animate({ height:"120px", "border":"", "padding":"", "border-color":""},200);
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
    $('button').click(function(){       // To jest f-cja do porzesyłania danych w translation_panel z słowo PL => trans
        var ID = $(this).attr('id');
        var pos1 = ID.search("_")
        var nID = ID.slice(pos1);
//        alert("ID:"+ID+", pos of _:"+pos1+", nID:"+nID);
        var varto = $('#input'+nID).val();       
//        alert(varto)
        $('#trans'+nID).val(varto);
    });
});

//function sendToTrans(){
//    var text = document.getElementById('input_2').value;
////    alert(text);
//    document.getElementById('trans_2').value=text;
//}


