$(document).ready(function(){
    $(".reservationButton").click(function(event){

        $(".Overlay").show();
    });
});

$(document).ready(function(){
    $(".cancelBTN").click(function(event){

        $(".Overlay").hide();
    });
});

function showPrice(hoeveelheid) {

    var people = $(".People").val();
    var childeren = $(".Children").val();

    var totalPeople = people + childeren;

    var totalPrice = totalPeople * 10;

    $('.price').val(totalPrice);
}

$(document).ready(function(){
    $(".OrderBTN").click(function(event){

        var people = $(".People" ).val();
        var children = $(".Children" ).val();
        var day = $(".Day option:selected").val();
        var session = $(".Session option:selected").val();

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200){

                if (this.responseText == "succes"){
                    $(".Overlay").hide();
                }
                else{
                    document.getElementById("ErrorMessage").innerHTML = this.responseText;
                }
            }
        }

        xmlhttp.open("GET", "http://localhost/haarlem-festival/public/phpScripts/RestaurantOrder.php?people=" + people +  "&children="
            + children + "&day=" + day + "&session=" + session, true);
        xmlhttp.send();


    });
});