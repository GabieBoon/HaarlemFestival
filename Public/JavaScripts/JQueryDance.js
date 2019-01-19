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

        $(".OverlayArtist").show();
    });
});

$(document).ready(function(){
    $(".Location").click(function(event){

        $(".OverlayLocation").show();
    });
});