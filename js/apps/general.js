(function() {
  /* 左上角MENU按鈕和彈出list */
  $('#menuBtn').click(function() {
    return $('#menuList').slideToggle('fast');
  });

  /* 一般的顯示隱藏 通用FUNCTION */
  /* 
  1. 將觸發按鈕加上 .normalToggle 
  2. 顯示或隱藏的對象寫入 data-show=
  */
  $('.normalToggle').click(function() {
    var target;
    target = $(this).data('show');
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
    $(target).toggle();
    return false;
  });

  /* 特殊的顯示隱藏 通用FUNCTION  */
  /* 
  1. 將觸發按鈕加上 .normalToggle 
  2. 顯示或隱藏的對象ID寫入 data-show
  3. 按鈕按過後將被隱藏
  4. 將返回按鈕加上 .switchToggleClose
  5. 顯示的對象ID寫入 data-show, 隱藏的對象ID寫入 data-hide
  */

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
