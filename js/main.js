$(".hamburger-menu").on('click', function(ev){
    ev.preventDefault();
    if($(this).hasClass('active') ){
        $( this ).removeClass('active');
    } else {
        $( this ).addClass('active');
    }
});

$(".hamburger-menu").on('click', function(ev){
    ev.preventDefault();
    if($(".menu").hasClass('active') ){
        $(".menu").removeClass('active');
    } else {
        $(".menu").addClass('active');
    }
});