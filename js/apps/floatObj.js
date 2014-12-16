(function() {
  var floatRightCol, floatShareBox;

  $('#fixedWidgets').css({
    "position": "relative"
  });

  floatRightCol = function(st, obj, hgt) {
    hgt = $(window).height() - $('footer').height();
    if (st > hgt) {
      obj.stop(true, true).animate({
        "top": st - 280 + "px",
        "overflow": "scroll",
        "height": hgt + "px"
      }, "easeOutExpo");
    }
    if (st < hgt) {
      return obj.stop(true, true).animate({
        "top": "0px",
        "height": "auto"
      }, "easeOutExpo");
    }
  };

  floatShareBox = function(st, obj, hgt) {
    if (st > hgt) {
      obj.stop(true, true).animate({
        "top": st + 200 + "px"
      }, "easeOutExpo");
    }
    if (st < hgt) {
      return obj.stop(true, true).animate({
        "top": "337px"
      }, "easeOutExpo");
    }
  };

  $(window).scroll(function() {
    var hgt, obj, st;
    st = $(window).scrollTop();
    obj = $('#fixedWidgets');
    hgt = $('.header').height() + $('.adbox-fw').height() + obj.height() + 40;
    floatRightCol(st, obj, hgt);
    obj = $('#articleShareBox');
    hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height();
    return floatShareBox(st, obj, hgt);
  });

}).call(this);
