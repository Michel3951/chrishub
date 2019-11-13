let $input = $('.navbar .form-inline .form-control');
let $borders = $('.navbar .form-inline');

$input.on('focus', function ()  {
    $borders.addClass('active');
});

$input.on('blur', function ()  {
    if ($borders.hasClass('active')) {
        $borders.removeClass('active');
    }
});