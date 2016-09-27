$(function() {
    $('#recherche').autocomplete({
        source: 'list_search.php',
        open: function (event, ui) {
            $(".ui-autocomplete").css("z-index", 1000);
        }
    });
});