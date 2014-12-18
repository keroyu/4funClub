(function() {
  $(".monthPicker").datepicker({
    showOn: "button",
    buttonImage: "../img/calendar.png",
    dateFormat: "MM yy",
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    onClose: function(dateText, inst) {
      var month, year;
      month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
      year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).val($.datepicker.formatDate("yy-mm", new Date(year, month, 1)));
    }
  });

  $(".monthPicker").focus(function() {
    $(".ui-datepicker-calendar").hide();
    $("#ui-datepicker-div").position({
      my: "center top",
      at: "center bottom",
      of: $(this)
    });
  });

}).call(this);
