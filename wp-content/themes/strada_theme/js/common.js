$(window).scroll(function() {
    if ($(window).scrollTop() > 0) {
        $('.l-header').addClass('is-scrolled');
    } else {
        $('.l-header').removeClass('is-scrolled');
    }
});


$(function() {
    $('a[href^="#"]').not('#toc_container span.toc_toggle a').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({
            scrollTop: position
        }, speed, "swing");
        return false;
    });
	
    $('.t-mv_slide').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2,
        variableWidth: true,
        prevArrow: $('.t-mv_prev'),
        nextArrow: $('.t-mv_next'),
        dots: true
    });
    $('.h-btn').on('click', function() {
        $(this).toggleClass('is-active');
        $('.l-header__nav').toggleClass('is-active');
        $('body').toggleClass('is-fixed');
    });
    $('.has-sub').on('click', function() {
        $(this).find('.h-nav__sub').toggleClass('is-active');
    });
    $('.c-qa').click(function(){
        $(this).toggleClass('is-active');
        $(this).find('.c-qa__answer').slideToggle();
    })
});

$(function(){
	if($(window).width() < 768){
		if( $('.c-breakcrumds')){
		   var breadcrumb = $('.c-breakcrumds').clone().addClass('newBreadcrumb');
		   $('.c-mainTitle').after(breadcrumb.get(0).outerHTML);
		   $('.c-breakcrumds').not('.newBreadcrumb').remove();
		}
	}
})

// $('.p-column__slider .p-column__list').slick({
//     slidesToShow: 2,
//     slidesToScroll: 2,
//     dot: false,
// });