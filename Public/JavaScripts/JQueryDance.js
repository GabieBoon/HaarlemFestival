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

        //set de afbeelding naar de afbeelding van het blok waarop geklikt is
        var picturePath = $(".Artist" + artistId).attr('src');
        $(".OverlayArtistPicture").attr('src', picturePath);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //aangezien php een object teruggeeft wordt er json gebruikt om deze goed door te geven
                var Artist = JSON.parse(this.responseText);

                //Als een waarde niet in de db staat word deze als null teruggegeven. Dit wil je niet op het scherm printen
                if (Artist.firstName === null){
                    Artist.firstName = ""
                }
                if (Artist.preposition === null){
                    Artist.preposition = ""
                }
                if (Artist.lastName === null){
                    Artist.lastName = ""
                }
                if (Artist.stageName === null){
                    Artist.stageName = ""
                }
                if (Artist.rank === null){
                    Artist.rank = ""
                }
                if (Artist.bio === null){
                    Artist.bio = ""
                }
                
                document.getElementById("artistHeader").innerHTML = Artist.stageName;

                document.getElementById("artistLabel1").innerHTML = Artist.stageName;
                document.getElementById("artistLabel2").innerHTML = Artist.firstName + " " + Artist.preposition + " "+ Artist.lastName;
                document.getElementById("artistLabel3").innerHTML = Artist.musicStyle;
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

        //set de afbeelding naar de afbeelding van het blok waarop geklikt is
        var picturePath = $(".Location" + locationId).attr('src');
        $(".OverlayLocationPicture").attr('src', picturePath);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //aangezien php een object teruggeeft wordt er json gebruikt om deze goed door te geven
                var Location = JSON.parse(this.responseText);

                //Als een waarde niet in de db staat word deze als null teruggegeven. Dit wil je niet op het scherm printen
                if (Location.street === null){
                    Location.street = ""
                }
                if (Location.houseNr === null){
                    Location.houseNr = ""
                }
                if (Location.City === null){
                    Location.City = ""
                }
                if (Location.phoneNr === null){
                    Location.phoneNr = ""
                }
                if (Location.bio === null){
                    Location.bio = ""
                }
                if (Location.postalCode === null){
                    Location.postalCode = ""
                }

                document.getElementById("locationHeader").innerHTML = Location.name;

                document.getElementById("locationLabel1").innerHTML = Location.street + " " + Location.houseNr;
                document.getElementById("locationLabel2").innerHTML = Location.postalCode + " " + Location.City;
                document.getElementById("locationLabel3").innerHTML = Location.phoneNr;
                document.getElementById("locationLabel4").innerHTML = Location.bio;

            }
        };
        xmlhttp.open("GET", "http://localhost/haarlem-festival/public/phpScripts/DanceLocationInfo.php?q=" + locationId, true);
        xmlhttp.send();


        $(".OverlayLocation").show();
    });
});

