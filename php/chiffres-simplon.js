

function modifValues(){
    var val = $('#progress progress').attr('value');
    if(val>=55){val=40;}
    var newVal = val*1+1.25;
    var txt = Math.floor(newVal)+'%';      
    $('#progress progress').attr('value',newVal).text(txt);
    $('#progress strong').html(txt);
  
}
setInterval(function(){ modifValues(); },60);


  