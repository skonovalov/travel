$(document).ready(function() {
	console.time('loading...');

	preparePage();
    app.popup.init();
    selectActiveMenu();

	console.timeEnd('loading...');
});

function preparePage() {
	if( $('.content-center').length > 0) {

		function sliderChild() {
			slider.apply(this, arguments);
		}

		function inherit(proto) {
			function F() {}
			F.prototype = proto;
			var object = new F;
			return object;
		}
	}


    if( $('.tours-form').length > 0 || $('.podbor').length > 0){
        app.selectBox.init();
        app.checkBox.init();
    } 


    if( $('.content-slider-menu').length > 0){
        app.tour.init();
        chooseTour();
    }

    if( $('.slider-wrap').length > 0) {
        $('.slider-wrap').slick({
           autoplay: true,
           autoplaySpeed: 5000, 
           dots: true,
           inifinite: true,
           speed: 600
        });
    }

}


var app = {};

function selectActiveMenu() {
    var href = location.href.substr(86),
        a    = $('.slider-top-menu ul li a');

    console.log(href);    
    a.each(function() {
      if( $(this).attr('href') == href) {
         if(!$(this).hasClass('selectedMenu')) {
          $('.selectedMenu').removeClass('selectedMenu');
          $(this).parent().addClass('selectedMenu');
         }
      }
    });    
}


/* callback */

app.popup = (function() {

    function _hideCallback() {
        $('.popup-callback').fadeOut();

    }

    function _showCallback() {
        $('.popup-callback').fadeIn();
    }

    function _initHandler() {
        $('.header-login-call').on('click', function() {
            _showCallback();
        });

        $('.popup-callback-inner span').on('click', function() {
            _hideCallback();
        });

        $('.popup-thx-inner span, .popup-thx-back').on('click', function() {
           _hideCallbackThx();
        });

        $('.popup-callback-inner button').on('click', function(e) {
            e.preventDefault();

            _showThx();

        })
    }

    function _showThx() {
        _hideCallback();
        $('.popup-callback-thx').fadeIn();
    }

    function _hideCallbackThx() {
        $('.popup-callback-thx').fadeOut();

    }

    return {
        init: function() {
            _hideCallback();
            _initHandler();
        }
    }

})();


app.selectBox = (function() {

    function _openBox(elem) {
        elem.css({
                'border': '2px solid #d5d5d5',
                'border-bottom': '1px',
                'border-bottom-left-radius': '0'
            })
            .children('ul')
            .show()
            .css({
            'height': '70px',
        })
    }

    function _openBoxCity(elem) {
        elem.css({
                'border': '2px solid #d5d5d5',
                'border-bottom': '1px',
                'border-bottom-left-radius': '0'
            })
            .children('ul')
            .show()
            .css({
            'height': '105px',
        })
    }

    function _closeBox(elem) {
        elem.css({
            'height': '0px',
            'left': '-2px'
            })
             .hide()
             .parent()
             .css({
                'border': '1px solid #d5d5d5',
                'border-radius': '5px',
                'border-top-right-radius': '0',
                'border-bottom-right-radius': '0'
             });
    }


    function _setPackage(elem) {
        if( !elem.hasClass('chosen-package')) {
            $('.chosen-package').removeClass('chosen-package');
            elem.addClass('chosen-package');
            elem.parent().siblings('article').html( elem.html() );
        }

       _closeBox( elem.parent() );
       elem.parent().siblings('input').val( elem.html() );
    }

    function _setPackageCity(elem) {
        if( !elem.hasClass('chosen-city')) {
            $('.chosen-city').removeClass('chosen-city');
            elem.addClass('chosen-city');
            elem.parent().siblings('article').html( elem.html() );
        }

       _closeBox( elem.parent() );
       elem.parent().siblings('input').val( elem.html() );
    }

    function _initHandlers() {
        $('.selectBox').on('click', function() {
            _openBox( $(this) );
        });

        $('.selectBox ul li').on('click', function(e) {
            e.stopPropagation();

            _setPackage( $(this) );
        });

        $('.selectBox-city').on('click', function() {
            _openBoxCity( $(this) );
        });

        $('.selectBox-city ul li').on('click', function(e) {
            e.stopPropagation();

            _setPackageCity( $(this) );
        });
    }

    return {
        init: function() {
            _initHandlers();
        }
    };
})();



app.checkBox = (function() {

    function _setValue(elem) {
        if( !elem.hasClass('checked')) {

            $('.checked').children('input').val('')
                         .end()   
                         .removeClass('checked');

            elem.addClass('checked');
        }

        elem.children('input').val( elem.children('label').html() );
    }


    function _initHandlers() {
        $('.checkBox').on('click', function() {
            _setValue( $(this) );
        });
    }

    return {
        init: function() {
            _initHandlers();
        }
    };
})();

/* end callback */

app.tour = (function() {

    function _hideTour() {
        $('.popup-tour').fadeOut();

    }

    function _showTour() {
        $('.popup-tour').fadeIn();
    }

    function _initHandler() {
        $('.create-tour').on('click', function() {
            _showTour();
        });

        $('.popup-tour-inner button').on('click', function(e) {
            e.stopPropagation();

            _hideTour() ;
        })
    }

    return {
        init: function() {
             _hideTour();
            _initHandler();
        }
    }

})();


function chooseTour() {
    $('.content-slider-menu ul li').on('click', function() {
        if( !$(this).hasClass('selected')) {
            $('.content-slider-menu ul .selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}
