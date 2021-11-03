/* Source and licensing information for the line(s) below can be found at https://www.dreamholiday.space/themes/gavias_lozin/js/main.js. */
(function(e){'use strict';(function(e){var i=e.event,a,t;a=i.special.debouncedresize={setup:function(){e(this).on('resize',a.handler)},teardown:function(){e(this).off('resize',a.handler)},handler:function(e,s){var n=this,l=arguments,o=function(){e.type='debouncedresize';i.dispatch.apply(n,l)};if(t){clearTimeout(t)};s?o():t=setTimeout(o,a.threshold)},threshold:150}})(jQuery);jQuery(document).ready(function(){function a(){e('.init-carousel-owl').each(function(){var a=e(this).data('items')?e(this).data('items'):5,c=e(this).data('items_lg')?e(this).data('items_lg'):4,v=e(this).data('items_md')?e(this).data('items_md'):3,m=e(this).data('items_sm')?e(this).data('items_sm'):2,f=e(this).data('items_xs')?e(this).data('items_xs'):1,p=e(this).data('loop')?e(this).data('loop'):!1,u=e(this).data('speed')?e(this).data('speed'):200,h=e(this).data('auto_play')?e(this).data('auto_play'):!1,d=e(this).data('auto_play_speed')?e(this).data('auto_play_speed'):1800,t=e(this).data('auto_play_timeout')?e(this).data('auto_play_timeout'):1000,r=e(this).data('auto_play_hover')?e(this).data('auto_play_hover'):!1,l=e(this).data('navigation')?e(this).data('navigation'):!1,n=e(this).data('rewind_nav')?e(this).data('rewind_nav'):!0,o=e(this).data('pagination')?e(this).data('pagination'):!1,s=e(this).data('mouse_drag')?e(this).data('mouse_drag'):!1,i=e(this).data('touch_drag')?e(this).data('touch_drag'):!1,g=e(this).data('fade')?e(this).data('fade'):!1;e(this).owlCarousel({nav:l,autoplay:h,autoplayTimeout:t,autoplaySpeed:d,autoplayHoverPause:r,navText:['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i>'],autoHeight:!1,loop:p,dots:o,rewind:n,smartSpeed:u,mouseDrag:s,touchDrag:i,responsive:{0:{items:1,nav:!1},600:{items:f,nav:!1},768:{items:m,nav:!1},992:{items:v},1200:{items:c},1400:{items:a}}})})};a();e('.gallery-carousel-center').owlCarousel({center:!0,items:3,loop:!0,margin:2,smartSpeed:1000,autoplayTimeout:6000,autoplaySpeed:1000,autoplay:!0,autoplayHoverPause:!0,nav:!1,responsive:{0:{items:1,},600:{items:2,},768:{items:2,center:!1,},992:{items:2},1200:{items:4},1400:{items:4}}});e('a[data-rel^=\'prettyPhoto[g_gal]\']').prettyPhoto({animation_speed:'normal',social_tools:!1,});e('.popup-video').magnificPopup({type:'iframe',fixedContentPos:!1});e('.gallery-popup--listing').each(function(){e(this).magnificPopup({delegate:'.owl-item:not(.cloned) a.image-popup',type:'image',gallery:{enabled:!0},})});e('.listing-block').each(function(){e(this).magnificPopup({delegate:' a.image-popup',type:'image',gallery:{enabled:!0},})})});var t=new WOW({boxClass:'wow',animateClass:'animated',offset:0,mobile:!0,});t.init();e(document).ready(function(){if(e(window).width()>780){if(e.fn.jpreLoader){var i=e('.js-preloader');i.jpreLoader({autoClose:!0,},function(){i.addClass('preloader-done');e('body').trigger('preloader-done');e(window).trigger('resize')})}}
else{e('body').removeClass('js-preloader')};var t=e('.post-masonry-style');t.imagesLoaded(function(){t.masonry({itemSelector:'.item-masory',gutterWidth:0,columnWidth:1,})});e('.gva-user-region .icon').on('click',function(a){if(e(this).parent().hasClass('show')){e(this).parent().removeClass('show')}
else{e(this).parent().addClass('show')};a.stopPropagation()});e('#menu-bar').on('click',function(a){if(e('.gva-offcanvas-mobile').hasClass('show-view')){e(this).removeClass('show-view');e('.gva-offcanvas-mobile').removeClass('show-view')}
else{e(this).addClass('show-view');e('.gva-offcanvas-mobile').addClass('show-view')};a.stopPropagation()});e('.close-offcanvas').on('click',function(a){e('.gva-offcanvas-mobile').removeClass('show-view');e('#menu-bar').removeClass('show-view')});e('.gva-navigation a').on('click','.nav-plus',function(){if(e(this).hasClass('nav-minus')==!1){e(this).parent('a').parent('li').find('> ul').slideDown();e(this).addClass('nav-minus')}
else{e(this).parent('a').parent('li').find('> ul').slideUp();e(this).removeClass('nav-minus')};return!1});if(e.fn.isotope){e('.isotope-items').each(function(){var i=e(this).data('pid'),s=e(this),t=e('.portfolio-filter a.'+i),a=e(this);a.isotope();a.imagesLoaded(function(){a.isotope('layout')});if(t.length>0){t.on('click',function(i){i.preventDefault();var s=e(this);t.removeClass('active');s.addClass('active');a.isotope({filter:s.data('filter')})})}})};e('.gavias-skins-panel .control-panel').click(function(){if(e(this).parents('.gavias-skins-panel').hasClass('active')){e(this).parents('.gavias-skins-panel').removeClass('active')}
else e(this).parents('.gavias-skins-panel').addClass('active')});e('.gavias-skins-panel .layout').click(function(){e('body').removeClass('wide-layout').removeClass('boxed');e('body').addClass(e(this).data('layout'));e('.gavias-skins-panel .layout').removeClass('active');e(this).addClass('active');var a=e('.post-masonry-style');e(window).trigger('resize');a.imagesLoaded(function(){a.masonry({itemSelector:'.item-masory',gutterWidth:0,columnWidth:1,})})});jQuery('.milestone-block').each(function(){jQuery(this).appear(function(){var e=parseInt(jQuery(this).find('.milestone-number').text());jQuery(this).find('.milestone-number').countTo({from:0,to:e,speed:4000,refreshInterval:60,formatter:function(e,a){e=e.toFixed(a.decimals);e=e.replace(/\B(?=(\d{3})+(?!\d))/g,',');return e}})},{accX:0,accY:0})});e('[data-progress-animation]').each(function(){var a=e(this);a.appear(function(){var e=(a.attr('data-appear-animation-delay')?a.attr('data-appear-animation-delay'):1);if(e>1)a.css('animation-delay',e+'ms');setTimeout(function(){a.animate({width:a.attr('data-progress-animation')},800)},e)},{accX:0,accY:-50})});var n='pieChart',a='pie-chart-loaded';function l(){var t=e('.'+n);t.each(function(){e(this).appear(function(){var t=e(this),i=(t.data('bar-color'))?t.data('bar-color'):'#F54F36',s=(t.data('bar-width'))?(t.data('bar-width')):150;if(!t.hasClass(a)){t.easyPieChart({animate:2000,size:s,lineWidth:5,scaleColor:!1,trackColor:'#DCDEE0',barColor:i,lineCap:'square',}).addClass(a)}})})};l();if(!jQuery.browser.mobile){e('.youtube-bg').mb_YTPlayer()};var o=function(){'use strict';var a=e('.gv-sticky-menu').height();jQuery(window).on('scroll',function(){if(jQuery('.gv-sticky-menu').length){var t=jQuery('.gv-sticky-menu');if(e(window).scrollTop()>t.offset().top){t.addClass('is-fixed');e('body').addClass('header-is-fixed');t.css('height',a)}
else{t.removeClass('is-fixed');t.css('height','auto');e('body').removeClass('header-is-fixed')}}})};o();var s=function(){'use strict';var a=e('.sticky-listing-nav').height(),t=e('.gv-sticky-menu').height();jQuery(window).on('scroll',function(){if(jQuery('.sticky-listing-nav').length){var i=jQuery('.sticky-listing-nav');if(e(window).scrollTop()>i.offset().top-100){i.addClass('is-fixed');i.css('height',a);i.find('.listing-nav-inner').css('top',t)}
else{i.removeClass('is-fixed');i.css('height','auto');i.find('.listing-nav-inner').css('top','0')}}})};s();e('.lightGallery').lightGallery({selector:'.image-item .zoomGallery'});e('[data-typer-targets]','.rotate-text').typer()});var a=function(){var a=e(window).height();e('.bb-container.full-screen').each(function(){e(this).css('height',a)})};e(document).ready(function(){if(e('.full-screen').length>0){a()}});e(window).load(function(){e('#gva-preloader').remove();if(e('.full-screen').length>0){a()}});e(window).on('debouncedresize',function(t){if(e('.full-screen').length>0){setTimeout(function(){a()},50)}});e(document).ready(function(){e('.quick-side-icon a').click(function(a){a.preventDefault();if(e(this).parents('.quick-side-icon').hasClass('open')){e(this).parents('.quick-side-icon').removeClass('open')}
else{e(this).parents('.quick-side-icon').addClass('open')};if(e('.gva-quick-side').hasClass('open')){e('.gva-quick-side').removeClass('open')}
else{e('.gva-quick-side').addClass('open')};if(e('.gva-body-wrapper').hasClass('blur')){e('.gva-body-wrapper').removeClass('blur')}
else{e('.gva-body-wrapper').addClass('blur')}});e('a.quick-side-close').click(function(a){a.preventDefault();e('.quick-side-icon').removeClass('open');e('.gva-quick-side').removeClass('open');e('.gva-body-wrapper').removeClass('blur')});e('.cbp-qtrotator').each(function(){e(this).cbpQTRotator()});e('.gsc-links .box-content a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var a=e(this.hash);a=a.length?a:e('[name='+this.hash.slice(1)+']');if(a.length){e('html, body').animate({scrollTop:a.offset().top},1500);return!1}}});function a(){var a=e(document).scrollTop();e('.gsc-links .box-content a[href*="#"]:not([href="#"])').each(function(){var i=e(this),s=e(this.hash),t=s.length?s:e('[name='+this.hash.slice(1)+']');console.log(t.outerHeight());if(t.offset().top<=a+10&&t.offset().top+t.outerHeight()>a){i.addClass('o_active')}
else{i.removeClass('o_active')}})};a();e(window).scroll(function(){a()});e('.gsc-links a.btn-hidden-links').on('click',function(a){a.preventDefault();if(e(this).hasClass('hidden-menu')){e(this).removeClass('hidden-menu');e(this).parents('.gsc-links').removeClass('hidden-menu')}
else{e(this).addClass('hidden-menu');e(this).parents('.gsc-links').addClass('hidden-menu')}})});e(window).load(function(){if(e('.block-gavias-sliderlayer, .before-help-region').length>0){var a=e('.gav-help-region').html();e('.gav-help-region').remove();a='<div class="help gav-help-region">'+a+'</div>';if(e('.before-help-region').length>0){e('.before-help-region').first().after(a)}
else{e('.block-gavias-sliderlayer').first().after(a)};e('.gav-help-region').show()}
else{var a=e('.gav-help-region').html();e('.gav-help-region').remove();a='<div class="help gav-help-region">'+a+'</div>';e('#page-main-content').first().before(a);e('.gav-help-region').show()}})})(jQuery);
/* Source and licensing information for the above line(s) can be found at https://www.dreamholiday.space/themes/gavias_lozin/js/main.js. */