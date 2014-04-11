/****************************************************
 * Project:     BartiLevi_WEB
 * Filename:    Popup.js
 * Encoding:    UTF-8
 * Created:     2014-04-07
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 ***************************************************/
jQuery(function($) {
    /*********************** POPUP  ********************************/
    $(".topopup").mouseenter(function() {
            $("#glowny_index").hide();
            $("#footer").hide();
            $(".guziki").hide();
    return false;
    });
    
    $(".topopup").mouseout(function() {
        $("#glowny_index").show();
        $("#footer").show();
        $(".guziki").show();
    });
//    /*********************** cv  ********************************/
    $(".cv").mouseenter(function() {
            $("#glowny_index").hide();
            $("#footer").hide();
            $(".guziki").hide();
    return false;
    });
    
    $(".cv").mouseout(function() {
        $("#glowny_index").show();
        $("#footer").show();
        $(".guziki").show();
    });
    /*********************** POPUP IILEVEL ********************************/
//    $(".topopup2").mouseenter(function() {
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();
//    return false;
//    });
//    
//    $(".topopup2").mouseout(function() {
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();
//    });
/*********************** POPUP 1 ********************************/
//    $(".topopup1").hover(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup1(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();
//    return false;
//    });
//    
//    $(".topopup1").mouseout(function() {
//        $("#toPopup1").fadeOut("normal"); 
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();
//    });
///*********************** POPUP 2 ********************************/    
//    $("a.topopup2").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup2(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();
//    return false;
//    });
//    
//    $("a.topopup2").mouseout(function() {
//        $("#toPopup2").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
///*********************** POPUP 3 ********************************/    
//    $("a.topopup3").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup3(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();            
//    return false;
//    });
//    
//    $("a.topopup3").mouseout(function() {
//        $("#toPopup3").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
//
///*********************** POPUP 4 ********************************/    
//    $("a.topopup4").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup4(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();            
//    return false;
//    });
//    
//    $("a.topopup4").mouseout(function() {
//        $("#toPopup4").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
///*********************** POPUP 5 ********************************/    
//    $("a.topopup5").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup5(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();            
//    return false;
//    });
//    
//    $("a.topopup5").mouseout(function() {
//        $("#toPopup5").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
///*********************** POPUP 6 ********************************/    
//    $("a.topopup6").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup6(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();            
//    return false;
//    });
//    
//    $("a.topopup6").mouseout(function() {
//        $("#toPopup6").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
///*********************** POPUP 7 ********************************/    
//    $("a.topopup7").mouseenter(function() {
//            loading(); // loading
//            setTimeout(function(){ // then show popup, deley in .5 second
//                loadPopup7(); // function show popup 
//            }, 10); // .2 second
//            $("#glowny_index").hide();
//            $("#footer").hide();
//            $(".guziki").hide();            
//    return false;
//    });
//    
//    $("a.topopup7").mouseout(function() {
//        $("#toPopup7").fadeOut("normal");
//        $("#glowny_index").show();
//        $("#footer").show();
//        $(".guziki").show();        
//    });
///****************************************************************/
//    function loading() {
//        $("div.loader").show();  
//    }
//    function closeloading() {
//        $("div.loader").fadeOut('normal');  
//    }
//
//    var popupStatus = 0; // set value
//
//    function loadPopup1() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup1").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup2() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup2").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup3() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup3").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup4() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup4").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup5() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup5").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup6() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup6").fadeIn(200); // fadein popup div         
//        }   
//    }
//    function loadPopup7() { 
//        if(popupStatus == 0) { // if value is 0, show popup
//            closeloading(); // fadeout loading
//            $("#toPopup7").fadeIn(200); // fadein popup div         
//        }   
//    }

//    function disablePopup() {
//        if(popupStatus == 1) { // if value is 1, close popup
//            $("#toPopup").fadeOut("normal");  
//            $("#backgroundPopup").fadeOut("normal");  
//            popupStatus = 0;  // and set value to 0
//        }
//    }   
});


