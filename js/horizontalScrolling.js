$(document).ready(function () {
    var sildeNum = $('.horizontal-pages').length,
        wrapperWidth = 100 * sildeNum,
        slideWidth = 100/sildeNum;
    $('.wrapper').width(wrapperWidth + '%');
    $('.horizontal-pages').width(slideWidth + '%');
    $('a.scrollitem').click(function(){
        $('a.scrollitem').removeClass('selected');
        $(this).addClass('selected');
        var slideNumber = $($(this).attr('href')).index('.page'),
            margin = slideNumber * -100 + '%';
        $('.wrapper').animate({marginLeft: margin},1000);
        return false;
    });
});