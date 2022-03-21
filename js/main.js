$(document).ready(function () {
    $(".main_nav li a, .scrollBtn").on("click", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        top = top - 60;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 500);

        $('.xs_menu').removeClass('active');
        $('body').css('overflow','auto');
    });

    $(function () {
        new WOW().init();

        // AOS.init({
        //     offset: 0
        // });
    });

    function parallax(layer, container, x, y) {
        var $layer_1 = layer,
            $container = container,
            container_w = $container.width(),
            container_h = $container.height();

        $(window).on('mousemove.parallax', function(event) {
            var pos_x = event.clientX,
                pos_y = event.clientY,
                left  = 0,
                top = 0;

            left = container_w / 2 - pos_x;
            top  = container_h / 2 - pos_y;

            TweenMax.to(
                $layer_1,
                1,
                {
                    css: {
                        transform: 'translateX(' + left / x + 'px) translateY(' + top / y + 'px)'
                    },
                    ease:Expo.easeOut,
                    overwrite: 'all'
                });
        });

    }

    $(function () {
        parallax($('.decor'), $('.main'), -50, -50);
    });

    $(function () {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').addClass('active');
            } else {
                $('.scrollup').removeClass('active');
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

    $(function () {
        $('.o_xs_menu').click(function () {
            $('body').css('overflow','hidden');
            $('.xs_menu').addClass('active');
        });

        $('.c_xs_menu').click(function () {
            $('body').css('overflow','auto');
            $('.xs_menu').removeClass('active');
        });
    });

    $(function () {
        $('.accordion .accordion-item-title').click(function() {
            var $item = $(this).parent('.accordion-item');

            if($item.hasClass('active'))
            {
                $item.removeClass('active');
                $('.accordion-item-content').slideUp();
            } else
            {
                $item.toggleClass('active').siblings('.active').removeClass('active');
                $('.accordion-item-content').slideUp();

                $item.find('.accordion-item-content').slideToggle();
            }
        });
    });
});



window.onscroll = function() {myFunction()};

var header = document.getElementById("header");

var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }

    if (window.pageYOffset == 0) {
        header.classList.remove("sticky");
    }
}

