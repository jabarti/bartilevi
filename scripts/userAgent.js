/****************************************************
 * Project:     BartiLevi_WEB
 * Filename:    userAgent.js
 * Encoding:    UTF-8
 * Created:     2014-04-09
 *
 * Author       Bartosz M. Lewiński <jabarti@wp.pl>
 ***************************************************/
// Not used!!!!!!!! = TRUE
function load(){
    
var screenWidth = window.screen.width,
    screenHeight = window.screen.height;
    
//alert(navigator.platform);

var platform = ''        ;

if(navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i))
    platform = "iPad";    
if(navigator.platform.match(/(Win32)/i))
    platform = "Windows";    
if(navigator.platform.match(/(Linux)/i))
    platform = "Linux";     
    
var browser = '';
if(/chrome/.test(navigator.userAgent.toLowerCase())){
    browser = 'chrome';
}else 
if (/safari/.test(navigator.userAgent.toLowerCase())){
    browser = 'safari';
}else 
if (/firefox/.test(navigator.userAgent.toLowerCase())){
    browser = 'firefox';
}else 
if (/msie/.test(navigator.userAgent.toLowerCase())){
    browser = 'msie';
}
            $.ajax({  
                'type': 'POST',  
                'url':  '../common.inc.php',
                'data':{
                            'action':           'try',
                            'platform':         platform,
                            'browser':          browser,
                            'screenWidth':      screenWidth,
                            'screenHeight':     screenHeight
                },  
                success: function(data) {
                    if( data == '0' ){
                        alert ('ERROR');
                   }else{
//                        alert ("OK: "+screenWidth+" / "+screenWidth);
                        $('#brows').html('test JS:'+"\n"+screenWidth);
                   }
                   
                }  
            });
}

