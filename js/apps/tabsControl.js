(function() {
  var changeTab;

  changeTab = function(btn) {
    var target;
    target = btn.data('toggle');
    btn.addClass('active').siblings().removeClass('active');
    return $(target).addClass('active').siblings().removeClass('active');
  };

  $('.tabs-list').each(function() {
    var $tabBtn, triggerMethod;
    triggerMethod = $('.tabs-list').data('trigger');
    $tabBtn = $(this).find('.tabs-list-item');
    if (triggerMethod === 'hover') {
      $tabBtn.hover(function() {
        return changeTab($(this));
      });
    }
    if (triggerMethod === 'click') {
      return $tabBtn.click(function() {
        changeTab($(this));
        return false;
      });
    }
  });

}).call(this);
