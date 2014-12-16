(function() {
  var floatModule, floatRightCol, floatShareBox;

  floatRightCol = function(st, obj, hgt) {
    if (st > hgt) {
      obj.css({
        "position": "fixed",
        "bottom": "75px"
      });
    }
    if (st < hgt) {
      return obj.css({
        "position": "static"
      });
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

  floatModule = function() {
    var winWid;
    winWid = $(window).width();
    if (winWid > 768) {
      $('#fixedWidgets').css({
        "width": "300px"
      });
      return $(window).scroll(function() {
        var hgt, obj, st;
        st = $(window).scrollTop();
        obj = $('#fixedWidgets');
        hgt = 605;
        floatRightCol(st, obj, hgt);
        obj = $('#articleShareBox');
        hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height();
        return floatShareBox(st, obj, hgt);
      });
    }
  };

  floatModule();

  $(window).resize(function() {
    return floatModule();
  });

}).call(this);
