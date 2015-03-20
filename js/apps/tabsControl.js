(function() {
  /*  更換 TAB 通用 FUNCTION */
  var changeTab;

  changeTab = function(btn) {
    var target;
    target = btn.data('toggle');
    btn.addClass('active').siblings().removeClass('active');
    return $(target).addClass('active').siblings().removeClass('active');
  };

  $('.tabs-list, .tabs-vertical').each(function() {
    var $tabBtn, triggerMethod;
    triggerMethod = $(this).data('trigger');
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
