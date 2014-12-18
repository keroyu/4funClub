(function() {
  $('#menuBtn').click(function() {
    return $('#menuList').slideToggle('fast');
  });

  $('.switchToggle').click(function() {
    var target;
    target = $(this).data('show');
    $(this).hide();
    $(target).show();
    return false;
  });

  $('.switchToggleClose').click(function() {
    var hideTarget, showTarget;
    hideTarget = $(this).data('hide');
    showTarget = $(this).data('show');
    $(hideTarget).hide();
    $(showTarget).show();
    return false;
  });

}).call(this);
