$(".monthPicker").datepicker
  dateFormat: "MM yy"
  changeMonth: true
  changeYear: true
  showButtonPanel: true
  onClose: (dateText, inst) ->
    month = $("#ui-datepicker-div .ui-datepicker-month :selected").val()
    year = $("#ui-datepicker-div .ui-datepicker-year :selected").val()
    $(this).val $.datepicker.formatDate("yy-mm", new Date(year, month, 1))
    return

$(".monthPicker").focus ->
  $(".ui-datepicker-calendar").hide()
  $("#ui-datepicker-div").position
    my: "center top"
    at: "center bottom"
    of: $(this)

  return
