$(document).ready(function () {
    var $grid = $('#grid');
    $grid.shuffle({
        itemSelector: '.item'
    });
    $('#filter a').click(function (e) {
        e.preventDefault();
        $('#filter a').removeClass('active');
        $(this).addClass('active');
        var groupName = $(this).attr('data-group');
        $grid.shuffle('shuffle', groupName);
    });
});

///////////////////////  IMAGESLOADED & SHUFFLE  //////////////////////

var ImageLoad = (function( $, imagesLoaded ) {

    var $shuffle = $('.masonry-gallery'),
        $filterOptions = $('.filter-list'),
        $imgs = $shuffle.find('.gallery-photo img'),
        $loader = $('#loader'),
        sizer = document.getElementById('#shuffle-sizer'),
        imgLoad,

        init = function() {

            // None of these need to be executed synchronously
            setTimeout(function() {
                setupSorting();
            }, 10);

            // Create a new imagesLoaded instance
            imgLoad = new imagesLoaded( $imgs.get() );

            // Listen for when all images are done
            // will be executed even if some images fail
            imgLoad.on( 'always', onAllImagesFinished );
        },

        onAllImagesFinished = function( instance ) {

            // Hide loader
            $loader.addClass('hidden');

            // Adds visibility: visible;
            $shuffle.addClass('images-loaded');

            // Initialize shuffle
            $shuffle.shuffle({
                sizer: sizer,
                itemSelector: '.item'
            });
        },

        // Set up button clicks
        setupSorting = function() {
            var $btns = $filterOptions.children();
            $btns.on('click', function() {
                var $this = $(this),
                    isActive = $this.hasClass( 'active' ),
                    group = isActive ? 'all' : $this.data('group');

                // Hide current label, show current label in title
                if ( !isActive ) {
                    $('.filter-list .active').removeClass('active');
                }

                $this.toggleClass('active');

                // Filter elements
                $shuffle.shuffle( 'shuffle', group );
            });

            $btns = null;
        };

    return {
        init: init
    };
}( jQuery, window.imagesLoaded ));

$(document).ready(function() {
    ImageLoad.init();
});