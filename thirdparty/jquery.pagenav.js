(function ($){
    $.fn.pageNav = function (User_Settings){
        var $Navigation = this;
        var Settings = $.extend(
            {
                'scroll_shift': 0,
                'active_shift': 0,
                'active_item':  'Active',
                'duration':     900
            }, User_Settings);
        $($Navigation).click(function (){
            var Scroll = $($(this).attr('href')).offset().top - Settings['scroll_shift'];
            $('html,body').animate({'scrollTop': Scroll + 'px'}, Settings['duration']);

            return false;
        });
        var Sizes = [];
        $($Navigation).each(function (Key, Value){
            Sizes[Key] = [];
            Sizes[Key]['id'] = $(Value).attr('href');
            Sizes[Key]['value'] = $(Sizes[Key]['id']).offset().top - Settings['scroll_shift'] - Settings['active_shift'];
            Sizes[Key]['height'] = Sizes[Key]['value'] + $(Sizes[Key]['id']).outerHeight();
        });
        $(window).scroll(function ()
        {
            var Scroll = $(window).scrollTop();
            for (var I = 0; I < Sizes.length; I++)
            {
                if ((Scroll >= Sizes[I]['value'] && Scroll <= Sizes[I]['height']))
                {
                    $Navigation.removeClass(Settings['active_item']);
                    $('[href=' + Sizes[I]['id'] + ']').addClass(Settings['active_item']);
                }
            }
        });

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    };
})(jQuery);