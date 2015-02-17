/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("#Search_category").change(function () {
        var inputs = allInputs();
//        console.log(inputs);
        console.log(inputs.Search_search);
        
        var number = $(this).val();
            console.log(number);
        if (inputs.Search_category === '0') {
//                console.log('geen');
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
                reloadNumbers(rdata['allOrder'][0]['id'], inputs.Search_search);
            }).fail(function () {
                console.log('fail on change Search_category');
            });
        }
    });

    loadDefault();

    $(document).on('click', ".thead th a", function (e) {
        e.preventDefault();
//        console.log($(this));
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

        console.log(url);
        console.log(sub);
//        console.log(res);
//        console.log(sort);
//        console.log(direction);
    });

    subcategorie();
    gerne();
});

function reloadNumbers(number, search) {
//    alert('reload and number ' + number);
//    console.log(search);
    $.ajax({
        type: 'GET',
        url: 'baseAjax', ///<------do this
        dataType: "html",
        data: {sub: number, search:search},
        cache: false
    }).done(function (rdata) {
//                console.log(rdata);
        $('#searchContent').html(rdata);
    }).fail(function () {
        console.log('fail');
    });
}

function loadDefault() {
    //      get base search numbers
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
            var id = $(this).data('id');
//            var id = $(this).data('id');
            var url = $(this).attr('href');
            console.log(url);
            var res = url.split("?")[1];
            console.log(res);
            var sub = getQueryVariable(res, 'sub');
            console.log(sub);
            var search = getQueryVariable(res,'search');
            console.log('search: ' + search);
            if (sub) {
//                alert('load sub');
                $.ajax({
                    type: 'GET',
                    url: 'baseAjax', ///<------do this
                    dataType: "html",
                    data: {sub: sub, page: id, search: search},
                    cache: false
                }).done(function (rdata) {
                    $('#searchContent').html(rdata);
                }).fail(function () {
                    console.log('fail on default load');
                });
            } else {
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
    //    click on subcatergorie
    $("#Search_subcategory").change(function () {
        var number = $(this).val();
        var inputs = allInputs();
        console.log(inputs.Search_search);
        reloadNumbers(number, inputs.Search_search);
    });
}
function gerne() {
    //    click on subcatergorie
    $("#Search_genre").change(function () {
//        var number = $(this).val();
//        console.log(number);
        var inputs = allInputs();
//        var $inputs = $('#Search :input');
//
//        // not sure if you wanted this, but I thought I'd add it.
//        // get an associative array of just the values.
//        var values = {};
//        $inputs.each(function () {
//            values[this.name] = $(this).val();
//        });
        console.log(inputs);
//        reloadNumbers(number);
    });
}

function allInputs() {
    var $inputs = $(':input');

    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
    var values = {};
    $inputs.each(function () {
        values[this.id] = $(this).val();
    });
//    console.log(values.Search);
    return values;
}
