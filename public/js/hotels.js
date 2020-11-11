$(document).ready(function() {
    let bloodhound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/hotel/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
    });

    $('#input-search-3').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'hotels',
        source: bloodhound,
        display: function(data) {
            return data.city  //Input value to be set when you select a suggestion.
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Aucun résultat trouvé.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.city + '</div></div>'
            }
        }
    });
});
