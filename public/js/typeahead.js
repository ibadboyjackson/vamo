$(document).ready(function() {
    let bloodhound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
    });

    $('#input-search-1').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'users',
        source: bloodhound,
        display: function(data) {
            return data.from  //Input value to be set when you select a suggestion.
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Aucun résultat trouvé.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.from + '</div></div>'
            }
        }
    });

    let bloodhounds = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/find?p=%QUERY%',
            wildcard: '%QUERY%'
        },
    });

    $('#input-search-2').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'users',
        source: bloodhounds,
        display: function(data) {
            return data.to  //Input value to be set when you select a suggestion.
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Aucun résultat trouvé.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.to + '</div></div>'
            }
        }
    });
});
