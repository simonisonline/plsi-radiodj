/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("#Search_search").keyup(function () {
        var inputs = allInputs();
        console.log(inputs);
        reloadNumbers(inputs.Search_subcategory, inputs.Search_search, inputs.Search_genre);
//        alert("Handler for .keyup() called.");
    });

    $("#Search_category").change(function () {
        var inputs = allInputs();
        if (inputs.Search_category === '0') {
            $("#Search_subcategory option").remove();
            $('#Search_subcategory').append($("<option></option>")
                    .text('all').attr('value', 0));
            loadDefault();
        } else {
            $.ajax({
                type: 'GET',
                url: 'ajaxform', ///<------do this
                data: {subId: inputs.Search_category},
                dataType: 'json', //<---for cross domain json data access
                contentType: "application/json; charset=utf-8", //<----add this
                cache: false
            }).done(function (rdata) {

                $("#Search_subcategory option").remove();
                $.each(rdata['allOrder'], function (index, value) {
                    $('#Search_subcategory').append($("<option></option>")
                            .text(value['id'] + ' - ' + value['name'])
                            .attr('value', value['id']));

                });
                reloadNumbers(rdata['allOrder'][0]['id'], inputs.Search_search, inputs.Search_genre);
            }).fail(function () {
                console.log('fail on change Search_category');
            });
        }
    });

    loadDefault();
    
    // this nog only from url
    $(document).on('click', ".thead th a", function (e) {
        e.preventDefault();
        console.log('click on sorting');
        var url = $(this).attr('href');
        var res = url.split("?")[1];
        var sort = getQueryVariable(res, 'sort');
        var direction = getQueryVariable(res, 'direction');
        var sub = getQueryVariable(res, 'sub');

        $.ajax({
            type: 'GET',
            url: 'baseAjax', ///<------do this
            dataType: "html",
            data: {sort: sort, direction: direction, sub: sub},
            cache: false
        }).done(function (rdata) {
            $('#searchContent').html(rdata);
        }).fail(function () {
            console.log('fail on title,artist klick search numbers');
        });
    });

    subcategorie();
    gerne();
});

function reloadNumbers(number, search, genre) {
//    if (number === '0') {
//        alert('there is no category selected');
//    } else {
        if (genre === '0') {
            $.ajax({
                type: 'GET',
                url: 'baseAjax', ///<------do this
                dataType: "html",
                data: {sub: number, search: search},
                cache: false
            }).done(function (rdata) {
                $('#searchContent').html(rdata);
            }).fail(function () {
                console.log('fail');
            });
            console.log('genre is 0: ' + genre);
        } else {
            $.ajax({
                type: 'GET',
                url: 'baseAjax', ///<------do this
                dataType: "html",
                data: {sub: number, search: search, genre: genre},
                cache: false
            }).done(function (rdata) {
                $('#searchContent').html(rdata);
            }).fail(function () {
                console.log('fail');
            });
        }
//    }
}

function loadDefault() {
    $.ajax({
        type: 'GET',
        url: 'baseAjax',
        dataType: "html",
        cache: false
    }).done(function (rdata) {
        $('#searchContent').html(rdata);
//        draggableTable();
        $(document).on("click", ".pagination li a", function () {
            event.preventDefault();
            var inputs = allInputs();
            var id = $(this).data('id');
//            console.log(inputs);
            if (inputs.Search_subcategor !== 0) {
                alert('load sub');
                $.ajax({
                    type: 'GET',
                    url: 'baseAjax', ///<------do this
                    dataType: "html",
                    data: {sub: inputs.Search_subcategory, page: id,genre: inputs.Search_genre, search: inputs.Search_search},
                    cache: false
                }).done(function (rdata) {
                    console.log('load from default!!');
                    $('#searchContent').html(rdata);
                }).fail(function () {
                    console.log('fail on default load');
                });
            } else {
                alert('Error, loading default');
                $.ajax({
                    type: 'GET',
                    url: 'baseAjax', ///<------do this
                    dataType: "html",
                    data: {page: id},
                    cache: false
                }).done(function (rdata) {
                    $('#searchContent').html(rdata);
                }).fail(function () {
                    console.log('fail on default load');
                });
            }

        });
    }).fail(function () {
        console.log('fail on get base search numbers');
    });
}

function getQueryVariable(url, variable) {
    var query = url;//window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) === variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    console.log('Query variable %s not found', variable);
}

function subcategorie() {
    $("#Search_subcategory").change(function () {
        var inputs = allInputs();
        reloadNumbers(inputs.Search_subcategory, inputs.Search_search, inputs.Search_genre);
    });
}
function gerne() {
    $("#Search_genre").change(function () {
        var inputs = allInputs();
        reloadNumbers(inputs.Search_subcategory, inputs.Search_search, inputs.Search_genre);
    });
}
// return all inputs
function allInputs() {
    var $inputs = $(':input');
    var values = {};
    $inputs.each(function () {
        values[this.id] = $(this).val();
    });
    return values;
}