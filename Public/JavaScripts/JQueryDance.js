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
            }
        };
        xmlhttp.open("GET", "http://localhost/haarlem-festival/public/JavaScripts/DanceArtistInfo.php?q=" + artistId, true);
        xmlhttp.send();


        $(".OverlayArtist").show();

    });
});

$(document).ready(function(){
    $(".Location").click(function(event){

        $(".OverlayLocation").show();
    });
});

