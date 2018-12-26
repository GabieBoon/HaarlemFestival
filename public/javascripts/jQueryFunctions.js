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

$(document).ready(function(){
    $(".blok").click(function(event){

        $(".Overlay").show();
    });
});

$(document).ready(function(){
    $(".OverlayBackground").click(function(event){

        $(".Overlay").hide();
    });
});