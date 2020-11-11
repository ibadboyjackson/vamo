$(document).ready(function() {
    let bloodhound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/car/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
    });

    $('#input-search-4').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'location',
        source: bloodhound,
        display: function(data) {
            return data.location  //Input value to be set when you select a suggestion.
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Aucun résultat trouvé.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.location + '</div></div>'
            }
        }
    });

    let bloodhounds = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/car/find?p=%QUERY%',
            wildcard: '%QUERY%'
        },
    });

    $('#input-search-5').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'charge',
        source: bloodhounds,
        display: function(data) {
            return data.restriction  //Input value to be set when you select a suggestion.
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Aucun résultat trouvé.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.restriction + '</div></div>'
            }
        }
    });
});
