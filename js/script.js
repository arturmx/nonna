jQuery(function ($) {
    $(document).ready(function () {
        function initDisplay() {
            var wpadminbar = $('#wpadminbar');
            var wpadminbarHeight = $('#wpadminbar').outerHeight();

            if (wpadminbar.css('display') == 'none') {
                wpadminbarHeight = 0;
            }

            $('.top__wrapper').css({ 'min-height': 'calc(100vh - ' + wpadminbarHeight + 'px)' });
            $('.header').css({ 'top': wpadminbarHeight + 'px' });
        }

        function header() {
            function check() {
                if (window.scrollY > 0) {
                    $('.header').addClass('active');
                } else {
                    $('.header').removeClass('active');
                }
            }
            
            check();

            $(window).on('scroll', function () {
                check();
            })
        }

        function menuNav() {
            var nav = $('.menu-nav');
            var navWrapper = $('.menu__nav');
            var headerHeight = $('.header').outerHeight();
            var wpadminbar = $('#wpadminbar').outerHeight() || 0;
            var fixer = 30;
            var startPosition = navWrapper[0].offsetTop - headerHeight - fixer;
            var endPosition = $('.menu__menu').innerHeight() + $('.menu__menu')[0].offsetTop - nav.outerHeight() - headerHeight - fixer;

            $(window).on('scroll', function () {
                if (window.innerWidth < 768) return; 

                var rect = nav[0].getBoundingClientRect();

                if (window.scrollY >= startPosition && window.scrollY <= endPosition) {
                    nav.css({
                        position: 'fixed',
                        left: rect.left,
                        top: headerHeight + fixer + wpadminbar
                    })
                } else if (window.scrollY < startPosition) {
                    nav.css({
                        position: 'static',
                        left: 0,
                        top: 0,
                        bottom: 0
                    })
                } else if (window.scrollY > endPosition) {
                    nav.css({
                        position: 'absolute',
                        left: 0,
                        top: 'auto',
                        bottom: 0
                    })
                }
            })
        }

        function resetMenuNav() {
            $('.menu-nav').css({
                position: 'static',
                left: 0,
                top: 0,
                bottom: 0
            })
        }

        function smoothScroll() {
            $('a[href*="#"]')
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        event.preventDefault();
                        if (target.hasClass('menu__part')) {
                            $('html, body').animate({
                                scrollTop: target.offset().top - 240
                            }, 1000);
                        } else {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                        }

                    }
                });
        }

        function slider() {
            var next = $('.gallery__arrow--next');
            var prev = $('.gallery__arrow--prev');
            var wrapper = $('.gallery__wrapper');
            var images = $('.gallery__item');
            var counter = 0;
            var clicks = images.length - Math.floor($('.container').width() / images.width());

            function move() {
                if (window.innerWidth < 767) {
                    wrapper.css({
                        'transform': 'translateX(' + counter * 230 + 'px)'
                    })
                } else {
                    wrapper.css({
                        'transform': 'translateX(' + counter * 440 + 'px)'
                    })
                }
                
            }

            

            function nextSlide() {
                if (Math.abs(counter) < clicks) {
                    counter--;
                    move();
                }
            }

            function prevSlide() {
                if (counter < 0) {
                    counter++;
                    move();
                }
            }

            next.on('click', nextSlide)
            prev.on('click', prevSlide)
            wrapper[0].addEventListener('swiped-left', nextSlide);
            wrapper[0].addEventListener('swiped-right', prevSlide);
        }

        function lightbox() {
            var overlay = $('.lightbox');
            var lightbox = $('.lightbox__img img');
            var btns = $('.gallery__item');
            var close = $('.lightbox__arrow--close');
            var prevBtn = $('.lightbox__arrow--prev');
            var nextBtn = $('.lightbox__arrow--next');

            close.on('click', function () {
                overlay.css({ 'display': 'none' })
            });

            btns.on('click', function () {
                var src = this.querySelector('img').src;

                lightbox.attr('src', src);
                overlay.css({ 'display': 'flex' })
            });

            prevBtn.on('click', function () {
                var current = btns.find('[src="' + lightbox.attr("src") + '"]')[0];
                var item = $(current).closest('.gallery__item')[0].previousElementSibling;
                var src = $(item).find('img').attr('src');

                lightbox.attr('src', src);
            })

            nextBtn.on('click', function () {
                var current = btns.find('[src="' + lightbox.attr("src") + '"]')[0];
                var item = $(current).closest('.gallery__item')[0].nextElementSibling;
                var src = $(item).find('img').attr('src');

                lightbox.attr('src', src);
            })
        }

        function parallax() {
            var top = $('.top__bg');
            var images = $('.image');
            
            top.parallax({ imageSrc: top.data('src') });
            images.each(function() {
                $(this).parallax({ imageSrc: $(this).data('src') });
            })
        }

        initDisplay();
        header();
        smoothScroll();
        slider();
        lightbox();
        parallax();

        $(window).on('load', function () {
            menuNav();
        })

        $(window).on('resize', function () {
            menuNav();
            initDisplay();
            header();
            slider();
            resetMenuNav();
        })
    })
});
