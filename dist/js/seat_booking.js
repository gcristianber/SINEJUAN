// $(document).ready(function(){


    var selectedSeat = $(".seat");
    var seatNotice = $(".seat_notice");
    var selectedSeat_count = 0;
    let seatPrice = 250.00;

    selectedSeat.click(function(){
        
        if($(this).hasClass("active")){
            
           
            selectedSeat_count++;
            $(this).removeClass("active");
            selectedSeat_count--;
            console.log(selectedSeat_count)
            
            
            
            console.log(selectedSeat_count * seatPrice);
        }else if($(this).hasClass("taken")){
            // console.log("taken");
        }else{
            selectedSeat_count++;
            console.log(selectedSeat_count * seatPrice);
            $(this).addClass("active");
            
            selectedSeat_count--;
            // console.log(selectedSeat_count * seatPrice);
        }

    });   
    
    

    
// })