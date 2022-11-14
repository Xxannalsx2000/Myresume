$(document).ready(function () {
    $('.hambuger-menu').click(function (e) { 
        e.preventDefault();
        $('.header ul').toggleClass('active');
    });
});


