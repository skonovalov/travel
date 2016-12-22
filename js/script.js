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
        app.selectBox();
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

    var container    = $('.modal'),
        createTour   = $('.create-tour'),
        callback     = $('.callback');

    function Popup(name) {
        this.name = $(name);
    }

    Popup.prototype.show = function() {
        var self = this;
        console.log(self);

        container.fadeIn(function() {
            self.name.fadeIn();
        }); 
    };

    Popup.prototype.hide = function() {
        $('.modal_close, .back').on('click', function() {
            $(this).parent().fadeOut(function() {
                container.fadeOut();
            });
        });

        container.on('click', function(e) {
            if( $(e.target).closest('.modal_child').length == 0 ) {
                
                $('.modal_child').fadeOut(function() {
                    container.fadeOut();
                });
            }
        });
    };

    function Call() { Popup.apply(this, arguments); }
    Call.prototype = Object.create(Popup.prototype);


    var _initHandlers = function() {


        callback.on('click', function() {
           var c = new Call( '.popup_callback' );
           c.show();
           c.hide();
        });

        createTour.on('click', function() {
           var t = new Call( '.popup_tour' );
           t.show();
           t.hide();
        });
    };

    return {
        init: _initHandlers
    };

})();


app.selectBox = (function() {

    $('select').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;
    
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
    
        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);
    
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
    
        var $listItems = $list.children('li');
    
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
    
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });
    
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
})();


function chooseTour() {
    $('.content-slider-menu ul li').on('click', function() {
        if( !$(this).hasClass('selected')) {
            $('.content-slider-menu ul .selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
}
