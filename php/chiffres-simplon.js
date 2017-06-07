function inViewport($el) {
    var elH = $el.outerHeight(),
        H   = $(window).height(),
        r   = $el[0].getBoundingClientRect(), t=r.top, b=r.bottom;
    return Math.max(0, t>0? Math.min(elH, H-t) : (b<H?b:H));
}

$(window).on("scroll resize", function(){
 if(!started1 && inViewport($('#progress1'))>160 ){ setInterval(function(){ modifValues1(); },80);}
 if(!started2 && inViewport($('#progress2'))>160 ){ setInterval(function(){ modifValues2(); },80);}
 if(!started3 && inViewport($('#progress3'))>160 ){ setInterval(function(){ modifValues3(); },80);}
 if(!started4 && inViewport($('#progress4'))>160 ){ setInterval(function(){ modifValues4(); },80);}
 if(!started5 && inViewport($('#progress5'))>160 ){ setInterval(function(){ modifValues5(); },60);}
 if(!started6 && inViewport($('#progress6'))>160 ){ setInterval(function(){ modifValues6(); },60);}
 if(!started7 && inViewport($('#progress7'))>160 ){ setInterval(function(){ modifValues7(); },60);}
 if(!started8 && inViewport($('#progress8'))>160 ){ setInterval(function(){ modifValues8(); },60);}
 if(!started9 && inViewport($('#progress9'))>160 ){ setInterval(function(){ modifValues9(); },60);}
 if(!started10 && inViewport($('#progress10'))>160 ){ setInterval(function(){ modifValues10(); },15);}
 if(!started11 && inViewport($('#progress11'))>160 ){ setInterval(function(){ modifValues11(); },40);}
 if(!started12 && inViewport($('#progress12'))>160 ){ setInterval(function(){ modifValues12(); },35);}
 if(!started13 && inViewport($('#progress13'))>160 ){ setInterval(function(){ modifValues13(); },10);}
 if(!started14 && inViewport($('#progress14'))>160 ){ setInterval(function(){ modifValues14(); },5);}
 if(!started15 && inViewport($('#progress15'))>160 ){ setInterval(function(){ modifValues15(); },20);}
});
    

   
  
var started1=false;
var started2=false;
var started3=false;
var started4=false;
var started5=false;
var started6=false;
var started7=false;
var started8=false;
var started9=false;
var started10=false;
var started11=false;
var started12=false;
var started13=false;
var started14=false;
var started15=false;




function modifValues1(){
    started1=true;
    var val = $('#progress1 strong').attr('value');
    if(val>=75){val=75;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress1 strong').attr('value', newVal).html(txt);
}

//setInterval(function(){ modifValues1(); },0.5);


function modifValues2(){
    started2=true;
    var val = $('#progress2 strong').attr('value');
    if(val>=19){val=19;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress2 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues2(); },40);


function modifValues3(){
    started3=true;
    var val = $('#progress3 strong').attr('value');
    if(val>=42){val=42;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress3 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues3(); },30);


function modifValues4(){
    started4=true;
    var val = $('#progress4 strong').attr('value');
    if(val>=30){val=30;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress4 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues4(); },15);


function modifValues5(){
    started5=true;
    var val = $('#progress5 strong').attr('value');
    if(val>=4){val=4;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress5 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues5(); },60);


function modifValues6(){
    started6=true;
    var val = $('#progress6 strong').attr('value');
    if(val>=13){val=13;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress6 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues6(); },35);


function modifValues7(){
    started7=true;
    var val = $('#progress7 strong').attr('value');
    if(val>=774){val=774;}
    var newVal = val*1+5.5;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress7 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues7(); },10);


function modifValues8(){
    started8=true;
    var val = $('#progress8 strong').attr('value');
    if(val>=332){val=332;}
    var newVal = val*1+3.25;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress8 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues8(); },10);


function modifValues9(){
    started9=true;
    var val = $('#progress9 strong').attr('value');
    if(val>=76){val=76;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress9 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues9(); },10);


function modifValues10(){
    started10=true;
    var val = $('#progress10 strong').attr('value');
    if(val>=31){val=31;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress10 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues10(); },15);


function modifValues11(){
    started11=true;
    var val = $('#progress11 strong').attr('value');
    if(val>=53){val=53;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress11 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues11(); },10);


function modifValues12(){
    started12=true;
    var val = $('#progress12 strong').attr('value');
    if(val>=6){val=6;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress12 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues12(); },35);


function modifValues13(){
    started13=true;
    var val = $('#progress13 strong').attr('value');
    if(val>=58){val=58;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress13 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues13(); },10);


function modifValues14(){
    started14=true;
    var val = $('#progress14 strong').attr('value');
    if(val>=78){val=78;}
    var newVal = val*1+0.25;
    var txt = Math.floor(newVal)+'%';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress14 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues14(); },5);


function modifValues15(){
    started15=true;
    var val = $('#progress15 strong').attr('value');
    if(val>=8){val=8;}
    var newVal = val*1+0.1;
    var txt = Math.floor(newVal)+'';      
    /*$('#progress progress').attr('value',newVal).text(txt);*/
    $('#progress15 strong').attr('value', newVal).html(txt);
  
}
//setInterval(function(){ modifValues15(); },20);

