// js for change header when scoll
$(document).ready(function () {
    var showHeaderAt = 150;
    var win = $(window),
        body = $('body');

    win.on('scroll', function (e) {

        if (win.scrollTop() > showHeaderAt) {
            body.addClass('fixed');
            $('.header-fixed').addClass('change-background');
            $('#main .header-fixed .header-limiter .logo').css({'height': '55px', 'width': '200px', 'top': '-5px'});
        } else {
            body.removeClass('fixed');
            $('.header-fixed').removeClass('change-background');
            $('#main .header-fixed .header-limiter .logo').css({'height': '70px', 'width': '200px', 'top': '0px'});
        }
    });

    $(document).on('click', '#abc', function () {

        alert('123');
    });

    $('.resize_menu').click(function () {
        $('#tab_nav').css('width', '250px');
        $('#main').css('left', '250px;');
    });
    $('.closebtn').click(function () {
        $('#tab_nav').css('width', '0');
        $('#main').css('left', '0;');
    });

    $('.search_menu_small').click(function () {
        $('#search_nav').css('width', '100%');
        $('#main').css('right', '100%');
        $('.searchnav #effect').css('width', '90%');
    });
    $('.closebtn').click(function () {
        $('#search_nav').css('width', '0');
        $('#main').css('right', '0;');
    });

    $(document).on('click', '.search_menu_large', function () {
        $('#search_nav').css('width', '40%');
        $('#main').css('right', '100%');
        $('.searchnav #effect').css('width', '90%');
    });

    $('.searchnav input').keyup(function () {
        if ($(this).val() != '') {
            $('.searchnav #show_result').show();
        } else {
            $('.searchnav #show_result').hide();
        }
    });


    var circle_1 = new ProgressBar.Circle('#circle_1', {
        strokeWidth: 8,
        easing: 'easeInOut',
        duration: 2500,
        color: '#ff9966',
        trailColor: 'white',
        trailWidth: 8,
        svgStyle: {
            display: 'block',
            width: '100%'
        },
        text: {
            value: '<p class="circle-1">0</p><p class="circle-label">Địa điểm</p>',
            className: 'circle',
        },
    });

    var circle_2 = new ProgressBar.Circle('#circle_2', {
        strokeWidth: 8,
        easing: 'easeInOut',
        duration: 2500,
        color: '#ffdb4d',
        trailColor: 'white',
        trailWidth: 8,
        svgStyle: {
            display: 'block',
            width: '100%'
        },
        text: {
            value: '<p class="circle-2">990</p><p class="circle-label">Bức ảnh</p>',
            className: 'circle',

        },
    });

    var circle_3 = new ProgressBar.Circle('#circle_3', {
        strokeWidth: 8,
        easing: 'easeInOut',
        duration: 4000,
        color: '#5cd65c',
        trailColor: 'white',
        trailWidth: 8,
        svgStyle: {
            display: 'block',
            width: '100%'
        },
        text: {
            value: '<p class="circle-3">400</p><p class="circle-label">Phượt thủ</p>',
            className: 'circle',

        },
    });

    var circle_4 = new ProgressBar.Circle('#circle_4', {
        strokeWidth: 8,
        easing: 'easeInOut',
        duration: 3000,
        color: '#85a3e0',
        trailColor: 'white',
        trailWidth: 8,
        svgStyle: {
            display: 'block',
            width: '100%'
        },
        text: {
            value: '<p class="circle-4">45</p><p class="circle-label">Tổ đội</p>',
            className: 'circle',

        },
    });

    win.on('scroll', function (e) {
        if (win.scrollTop() >= $('#about').offset().top - 250) {
            circle_1.animate(1);
            circle_2.animate(1);
            circle_3.animate(1);
            circle_4.animate(1);
            var a = setInterval(function () {
                var _nbr = parseInt($('.circle-1').text());
                $('.circle-1').text(++_nbr);
                if (_nbr >= 65) clearInterval(a);
            }, 200);

            var b = setInterval(function () {
                var _nbr = parseInt($('.circle-2').text());
                $('.circle-2').text(++_nbr);
                if (_nbr >= 1100) clearInterval(b);
            }, 150);

            var c = setInterval(function () {
                var _nbr = parseInt($('.circle-3').text());
                $('.circle-3').text(++_nbr);
                if (_nbr >= 550) clearInterval(c);
            }, 160);

            var d = setInterval(function () {
                var _nbr = parseInt($('.circle-4').text());
                $('.circle-4').text(++_nbr);
                if (_nbr >= 80) clearInterval(d);
            }, 240);
        }
    });

    setInterval(function () {
        $("#arrow").animate({
            top: '91vh',
            opacity: '0',
        }, 2000, function () {
            $('#arrow').css('opacity', '1');
            $('#arrow').css('top', '85vh');
        });
    }, 2300);
});
