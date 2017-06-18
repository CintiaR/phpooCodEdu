$('document').ready(function () {
    
    $('.panel-body').hide();

    $('.panel-heading').click(function () {
        $('.panel-body').hide();
        $(this).next().fadeIn();
    })

})
