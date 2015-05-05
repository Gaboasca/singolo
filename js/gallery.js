function Gallery( container ) {
    this.container = container
    this.buttons = this.container.find('.filter');
    this.items = this.container.find('.item');

    this.expandImage();

    this.buttons.on('click', function(e) {
        e.preventDefault();
        var $this = $(e.target);
        var filter = $this.data('rel');

        if( !$this.hasClass('active') ) 
        {
            this.buttons.removeClass('active');
            $this.addClass('active');
            this.filter(filter)
        }
    }.bind(this));
};

Gallery.prototype.filter = function(category) {
    $.publish('changedCategory', category);
    if ( category == 'all' ) {
        this.items
            .not(':visible')
            .fadeIn();
    } else {
        this.items
            .stop(true, true)
            .fadeOut(0)
            .filter(function() {
                var dataFilter = $(this).data('filter');
                for(var i = 0; i < dataFilter.length; i++) {
                    if (dataFilter[i] == category)
                        return true;
                }
            })
            .fadeIn(1000); 
    }
};

Gallery.prototype.expandImage = function() {
    var img_overlay = $('.img-overlay');
    var overlay_item = $('.item img:last-child');
    var overlay_content = $('.overlay-content')
    var overlay_image_title = $('.overlay-image-title');
    var overlay_image_close = $('.overlay-image-close');


    this.items.on('click', function(ev) {
        ev.preventDefault();
        img_overlay.fadeIn();
        $(this).find(overlay_content).fadeIn().addClass('active-overlay');
        overlay_image_title.text($(ev.target).attr('alt')).show();
        overlay_image_close.show().css('display', 'inline-block');
    });

    img_overlay.on('click', function() {
        img_overlay.fadeOut();
        overlay_content.fadeOut().removeClass('active-overlay');
    });

    $(window).on('keyup',function(e) {
        if (e.keyCode == 27) {
            img_overlay.fadeOut();
            overlay_content.fadeOut().removeClass('active-overlay');
        }
    });

    overlay_image_close.on('click', function() {
        img_overlay.fadeOut();
        overlay_content.fadeOut().removeClass('active-overlay');
    });
};


