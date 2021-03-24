$(document).ready(function(){

    var i = 1;
    var interval = setInterval( increment, 5000);
    var headertext = "I am"
    var tempText = document.getElementById('temp');
    tempText.innerText = 'MARKETING'


    function increment(){
        i = i + 1;
        if(i>7) {i = 1;}
        
          if(i==1){headertext = "BRANDING"}
          if(i==2){headertext = "PRINTING"}
          if(i==3){headertext = "VOIP"}
          if(i==4){headertext = "MARKETING"}
          if(i==5){headertext = "BRANDING"}
          if(i==6){headertext = "PRINTING"}
          if(i==7){headertext = "VOIP"}

          $('.tochange').animate({'opacity': 0}, 1000, function () {
              $('.tochange').text(headertext);
          }).animate({'opacity': 1}, 1000);

        }   
});