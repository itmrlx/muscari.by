$(".slider").slick({lazyLoad:"ondemand",dots:!0,arrows:!0,infinite:!0,speed:1e3,fade:!0,slidesToShow:1,autoplay:!0,autoplaySpeed:5e3,touchMove:!1}),$(".more-btn").click(function(){$(this).prev(".more-text").slideToggle(),"Подробнее..."==$(this).html()?$(this).html("Скрыть..."):$(this).html("Подробнее...")}),$(".burger-menu").click(function(){$(this).toggleClass("active"),$(".pro-menu").slideToggle()}),$(window).width()>=768?$(".zoom-plugin").elevateZoom({gallery:"gallery_01",galleryActiveClass:"activate",tint:!0,tintColour:"#000",tintOpacity:.3}):$(".zoom-plugin").elevateZoom({gallery:"gallery_01",galleryActiveClass:"activate",tint:!0,tintColour:"#000",tintOpacity:.3,zoomWindowWidth:0,zoomWindowHeight:0,borderSize:0,showLens:!1,lensOpacity:0,tintOpacity:0}),$(".item-slider-nav").slick({lazyLoad:"ondemand",slidesToShow:3,slidesToScroll:1,arrows:!1,dots:!1,focusOnSelect:!0,touchMove:!1,swipe:!1,arrows:!0}),jQuery.fn.getTitle=function(){var t=jQuery("a.fancybox");jQuery.each(t,function(){var t=jQuery(this).children("img").attr("title");jQuery(this).attr("title",t)})};var thumbnails=jQuery("a:has(img)").not(".nolightbox").filter(function(){return/\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr("href"))}),posts=jQuery(".item-images"),posts2=jQuery("#tabs-2"),ssingle=jQuery(".single-news");posts.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()}),posts2.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts2.index(this)).getTitle()}),ssingle.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+ssingle.index(this)).getTitle()}),jQuery("a.fancybox").fancybox({helpers:{title:{type:"inside"},overlay:{locked:!1}}}),$(".tab-btn1").click(function(){$(".tab-block").removeClass("active"),$(".tab-btn").removeClass("active"),$(".tab-btn1").addClass("active"),$(".tab-block1").addClass("active")}),$(".tab-btn2").click(function(){$(".tab-block").removeClass("active"),$(".tab-btn").removeClass("active"),$(".tab-btn2").addClass("active"),$(".tab-block2").addClass("active")}),$(window).load(function(){var t=0;$(".services-page-item").each(function(){$(this).height()>t&&(t=$(this).height())}),$(".services-page-item").height(t)}),$(window).load(function(){var t=0;$(".cat-shtori").each(function(){$(this).height()>t&&(t=$(this).height())}),$(".cat-shtori").height(t)}),$(".item-slider-nav .slick-current").addClass("activate"),$(".item-page .slick-arrow").click(function(){var t=$(".item-slider-nav .slick-current>img").attr("src");$(".item-slider #img_01").attr("src",t),$(".item-slider #img_01").attr("data-zoom-image",t),$(".zoomContainer img").attr("src",t),$(".zoomContainer .zoomWindowContainer>div").css("background-image","url("+t+")"),console.log(t)});
