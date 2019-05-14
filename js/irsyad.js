// Search Toggle
$('#navigation-search-input-box').hide();
$('#navigation-search').on('click', function() {
    $('#navigation-search-input-box').slideToggle();
    $('#navigation-search-input').focus();
});
$('#navigation-close-search').on('click', function() {
    $('#navigation-search-input-box').slideUp(500);
});