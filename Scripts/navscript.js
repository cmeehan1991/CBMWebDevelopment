var pageLocation = window.location.pathname;

if(pageLocation !== "/index.php" || pageLocation !== " "){
    $(document).ready(function(){
        $(".navbar-right").prepend("<li><a href='index.php'>Home</a></li>");
    });
}

$(document).ready(function(){
    $('.nav').affix({offset: {top: 377} });
});