$(document).ready(function(){
    $('.add').click(function(){
        $('.modal-add').show();
        
    })

    $('.close-btn').click(function(){
        $('.modal-add').hide();
        $('.modal-view').hide();
        $('.modal-config').hide();
    })


    $('.btn-config').click(function(){
        $('.modal-config').show();
        // alert($('.poster').val());
        console.log($('.title').val());
    })

   



    
})