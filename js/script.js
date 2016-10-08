// main slider
$('.slider').slick({
  lazyLoad: 'ondemand',
  dots: true,
  arrows: true,
  infinite: true,
  speed: 1000,
  fade: true,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 5000,
  touchMove: false
});

// main about us
$('.more-btn').click(function () {
	$(this).prev('.more-text').slideToggle();
	$(this).html() == 'Подробнее...' ? $(this).html('Скрыть...') : $(this).html('Подробнее...');
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// zoom image
if($(window).width() >= 768){
  $(".zoom-plugin").elevateZoom({gallery:'gallery_01',galleryActiveClass: 'activate',tint:true, tintColour:'#000', tintOpacity:0.3});
}else{
  $(".zoom-plugin").elevateZoom({gallery:'gallery_01',galleryActiveClass: 'activate',tint:true, tintColour:'#000', tintOpacity:0.3, zoomWindowWidth: 0, zoomWindowHeight: 0, borderSize: 0,showLens: false, lensOpacity: 0, tintOpacity: 0});
};

// item slider
// $('.item-slider').slick({
//   lazyLoad: 'ondemand',
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: true,
//   fade: true,
//   asNavFor: '.item-slider-nav',
//   touchMove: false,
//   swipe: false
// });
$('.item-slider-nav').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  focusOnSelect: true,
  touchMove: false,
  swipe: false,
  arrows: true
});


// fancybox
// create & show titles
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}

// Find .post>a>img and create fancybox image gallery
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) });

var posts = jQuery(".item-images"); //find post
var posts2 = jQuery("#tabs-2"); //find post
var ssingle = jQuery(".single-news"); //find post

posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
posts2.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts2.index(this)).getTitle()
});
ssingle.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+ssingle.index(this)).getTitle()
});

// fancybox on
jQuery("a.fancybox").fancybox({
  helpers : {
    title : {
      type : 'inside'
    },
    overlay : {
      locked : false // try changing to true and scrolling around the page
    },
  }
});

// tab services
$('.tab-btn1').click(function () {
  $('.tab-block').removeClass('active');
  $('.tab-btn').removeClass('active');
  $('.tab-btn1').addClass('active');
  $('.tab-block1').addClass('active');
});
$('.tab-btn2').click(function () {
  $('.tab-block').removeClass('active');
  $('.tab-btn').removeClass('active');
  $('.tab-btn2').addClass('active');
  $('.tab-block2').addClass('active');
});

$(window).load(function() {
  var maxHeight = 0;
  $(".services-page-item").each(function(){
    if ( $(this).height() > maxHeight ) 
    {
      maxHeight = $(this).height();
    }
  });
  $(".services-page-item").height(maxHeight);
});

$(window).load(function() {
  var maxHeight = 0;
  $(".cat-shtori").each(function(){
    if ( $(this).height() > maxHeight ) 
    {
      maxHeight = $(this).height();
    }
  });
  $(".cat-shtori").height(maxHeight);
});

$('.item-slider-nav .slick-current').addClass('activate');

$('.item-page .slick-arrow').click(function () {
  var itemattr = $('.item-slider-nav .slick-current>img').attr('src');
  $('.item-slider #img_01').attr('src', itemattr);
  $('.item-slider #img_01').attr('data-zoom-image', itemattr);
  $('.zoomContainer img').attr('src', itemattr);
  $('.zoomContainer .zoomWindowContainer>div').css('background-image', 'url('+itemattr+')');
  console.log(itemattr);
});