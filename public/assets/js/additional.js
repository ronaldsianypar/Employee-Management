$(function() {
    $(".table-default").DataTable({
        responsive: true,
        autoWidth: false,
        order: [],
    });
    $(".select2").select2({
        theme: "bootstrap4",
    });
    $(".colorpicker").colorpicker();
    $(".number").number(true, 0);
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
    });
    $(".daterange").daterangepicker();
    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
    $(".todo-list").sortable({
        placeholder: "sort-highlight",
        handle: ".handle",
        forcePlaceholderSize: true,
        zIndex: 999999,
    });
});

function addSummerNote(element) {
    $(element).summernote();
}

function addCKEditor(id, option = {}) {
    CKEDITOR.replace(id, option);
}

function addDaterangepicker(selected, option = {}) {
    $(selected).daterangepicker(option);
}

function addNumber(element, money = false) {
    $(element).number(true, money ? 2 : 0);
}

function addSelect2(element) {
    $(element).select2({
        theme: "bootstrap4",
    });
}

function number_format(value) {
    value += "";
    x = value.split(".");
    x1 = x[0];
    x2 = x.length > 1 ? "." + x[1] : "";
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, "$1" + "." + "$2");
    }
    return x1 + x2;
}

function datatable(element, url, column, columnDef = []) {
    $(element).DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: url,
        columns: column,
        order: [],
        columnDefs: columnDef,
    });
}

function getUrlParameter(sParam = "", opt = {}) {
    if (sParam.trim() != "") {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split("&"),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split("=");

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ?
                    true :
                    decodeURIComponent(sParameterName[1]);
            }
        }

        return false;
    } else {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split("&");
        var arr = [];
        var except =
            opt.except == null || !Array.isArray(opt.except) ? [] : opt.except;

        $.each(sURLVariables, (k, p) => {
            var parameter = p.split("=");

            if (parameter[1] != undefined) {
                if (except.indexOf(parameter[0]) == -1) {
                    arr[parameter[0]] = decodeURIComponent(parameter[1]);
                }
            }
        });

        return arr;
    }
}

function toast(type = "info", title, message) {
    switch (type) {
        case "success":
            toastr.success(message, title);
            break;

        case "error":
            toastr.error(message, title);
            break;

        case "warning":
            toastr.warning(message, title);
            break;

        default:
            toastr.info(message, title);
            break;
    }
}

function get(url, headers = {}, onSuccess, onError) {
    header = {};

    $.each(headers, function(key, value) {
        header[key] = value;
    });

    return $.ajax({
        type: "GET",
        url: url,
        headers: header,
        success: onSuccess,
        error: onError,
    });
}

function post(url, headers = {}, data, onSuccess, onError) {
    header = {};

    $.each(headers, function(key, value) {
        header[key] = value;
    });

    return $.ajax({
        type: "POST",
        url: url,
        headers: header,
        data: data,
        success: onSuccess,
        error: onError,
    });
}

function getImageUrl($path = "") {
    return "https://mfgs3bucket.s3.ap-southeast-1.amazonaws.com/" + $path;
}

function showAlert(
    $opt = { title, text, icon, confirmText, cancelText },
    $callback
) {
    Swal.fire({
        title: $opt.title != undefined ? $opt.title : "",
        text: $opt.text != undefined ? $opt.text : "",
        icon: $opt.icon != undefined ? $opt.icon : "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: $opt.confirmText != undefined ? $opt.confirmText : "Ya",
        cancelButtonText: $opt.cancelText != undefined ? $opt.cancelText : "Batal",
    }).then($callback);
}

function isUrlValid(url) {
    return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(
        url
    );
}

function createLink(Text, pattern = "-") {
    return Text.toLowerCase()
        .replace(/ /g, pattern)
        .replace(/[^\w-]+/g, "");
}