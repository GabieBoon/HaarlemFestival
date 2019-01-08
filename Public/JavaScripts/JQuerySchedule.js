$(document).ready(function(){
    $(".TableTicket").mouseenter(function(event){
        var id = event.target.id
        $(".TicketPopup." + id).show();
    });
});

$(document).ready(function(){
    $(".PopupHideBorder").mouseleave(function(event){

        $(".TicketPopup").hide();
    });
});
