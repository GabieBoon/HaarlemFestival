
$(document).ready(function () {
    //I did try .next() and .prev, but they were considerably slower.
    $($('.currentPage').parent("li").parent("ul").parent("li").children("a").get(0)).addClass('currentPage'); //select anchor element from parent and add currentPage class
    $($('.currentPage').parent("li").children("ul").get(0)).css('display', 'block'); 
});

    
    
    
