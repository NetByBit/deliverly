require('./bootstrap');

$(window).load($.debounce(200,function(){
    $('input:-webkit-autofill').each(function(){
        if ($(this).val().length !== "") {
            $(this).siblings('label, i').addClass('active');
        }
    });
}));