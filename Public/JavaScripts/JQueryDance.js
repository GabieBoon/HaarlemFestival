$(document).ready(function(){
    $(".blok").click(function(event){

        $(".Overlay").show();
    });
});

$(document).ready(function(){
    $(".OverlayBackground").click(function(event){

        $(".Overlay").hide();
        $(".OverlayArtist").hide();
        $(".OverlayLocation").hide();
    });
});

$(document).ready(function(){
    $(".Artist").click(function(event){

        var artistId = this.id;

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

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

$(document).ready(function(){
    $(".Location").click(function(event){

        var locationId = this.id;

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

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

