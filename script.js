$('[data-toggle="popover"]').popover({
        html : true, 
        title: function() {
          return $("#move-popover-title").html();
        },
        content: function() {
          return $("#move-popover-content").html();
        }
    });



$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});