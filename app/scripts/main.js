'use strict';
(function($) {
    $(document).ready(function() {
        $('.secondary li').on('mouseenter', function() {
            var _this = $(this);
            _this.find('.thirdly').slideDown();
            _this.on('mouseleave', function() {
                $(this).find('.thirdly').slideUp();
            });
        });

        $('.menu li').on('mouseenter', function() {
            var target = $(this).attr('data-target');
            $('.menu li').removeClass('active');
            $('.secondary-wrap[id!="' + target + '"]').slideUp();
            $(this).addClass('active');
            $('#' + target).slideDown();
        });

        $('.secondary-wrap').on('mouseleave', function() {
            var id = $(this).attr('id');
            var _this = $(this);
            $('.menu li').removeClass('active');
            $(this).slideUp();
            window.setTimeout(function() {

            }, 100);

        });

    });
})(jQuery);
