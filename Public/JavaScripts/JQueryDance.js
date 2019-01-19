//toon de overlay
$(document).ready(function(){
    $(".blok").click(function(event){

        $(".Overlay").show();
    });
});

//hide de overlay
$(document).ready(function(){
    $(".OverlayBackground").click(function(event){

        $(".Overlay").hide();
        $(".OverlayArtist").hide();
        $(".OverlayLocation").hide();
    });
});

//toont het artiest gedeelte van de overlay en stuur een AJAX request voor de informatie
$(document).ready(function(){
    $(".Artist").click(function(event){

        var artistId = this.id;

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //aangezien php een object teruggeeft wordt er json gebruikt om deze goed door te geven
                var Artist = JSON.parse(this.responseText);

                document.getElementById("artistLabel1").innerHTML = Artist.stageName;
                document.getElementById("artistLabel2").innerHTML = Artist.firstName + Artist.preposition + Artist.lastName;
                document.getElementById("artistLabel3").innerHTML = Artist.stageName;
                document.getElementById("artistLabel4").innerHTML = Artist.rank;
                document.getElementById("artistLabel5").innerHTML = Artist.bio;
            }
        };
        xmlhttp.open("GET", "http://localhost/haarlem-festival/public/phpScripts/DanceArtistInfo.php?q=" + artistId, true);
        xmlhttp.send();


        $(".OverlayArtist").show();

    });
});

//toont het location gedeelte van de overlay en stuur een AJAX request voor de informatie
$(document).ready(function(){
    $(".Location").click(function(event){

        var locationId = this.id;

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //aangezien php een object teruggeeft wordt er json gebruikt om deze goed door te geven
                var Location = JSON.parse(this.responseText);

                document.getElementById("locationLabel1").innerHTML = Location.street + Location.houseNr;
                document.getElementById("locationLabel2").innerHTML = Location.postalCode + Location.City;
                document.getElementById("locationLabel3").innerHTML = Location.phoneNr;
                document.getElementById("locationLabel4").innerHTML = Location.bio;

            }
        };
        xmlhttp.open("GET", "http://localhost/haarlem-festival/public/phpScripts/DanceLocationInfo.php?q=" + locationId, true);
        xmlhttp.send();


        $(".OverlayLocation").show();
    });
});

