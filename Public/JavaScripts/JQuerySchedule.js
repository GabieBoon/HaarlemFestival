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

$ (document).ready(function () {
    $(".JazzCheckBox") .change(function (event) {
        $(".JazzTable").toggle(event);
    })
});

$ (document).ready(function () {
    $(".DanceCheckBox") .change(function (event) {
        $(".DanceTable").toggle(event);
    })
});

$ (document).ready(function () {
    $(".FoodCheckBox") .change(function (event) {
        $(".FoodTable").toggle(event);
    })
});

$ (document).ready(function () {
    $(".HistoricCheckBox") .change(function (event) {
        $(".HistoricTable").toggle(event);
    })
});