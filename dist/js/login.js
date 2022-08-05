$(document).ready(function(){
    // Password Toggler visibility    
        $('.visibility').click(function(){ //ON
            $('.pwd').attr('type', 'text');
            $(this).css({"display":"none"});
            $('.visibility_off').css({"display":"block"});
        })
    
        $('.visibility_off').click(function(){ //OFF
            $('.pwd').attr('type', 'password');
            $(this).css({"display":"none"});
            $('.visibility').css({"display":"block"});
        })
        
    
    })