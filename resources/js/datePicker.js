$(function () {
    $("#period_from").datepicker({
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        dayNamesMin: [ "S", "P", "A", "T", "K", "Pn", "Š" ],
        monthNames: [ "Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis" ],
        defaultDate: "+1w",
        onClose: function (selectedDate) {
            $("#period_to").datepicker("option", "minDate", selectedDate);
            var date = $(this).datepicker('getDate');
            var maxDate = new Date(date.getFullYear(), date.getMonth() + 1, -0);
            $("#period_to").datepicker("option", "maxDate", maxDate);
        }
    });
    $("#period_to").datepicker({
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        dayNamesMin: [ "S", "P", "A", "T", "K", "Pn", "Š" ],
        monthNames: [ "Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis" ],
        defaultDate: "+1w",
        onClose: function (selectedDate) {
            $("#period_from").datepicker("option", "maxDate", selectedDate);
        }
    });
});
