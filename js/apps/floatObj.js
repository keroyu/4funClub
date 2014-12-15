(function() {
  var floatRightCol, floatShareBox;

  floatRightCol = function(st, obj, hgt) {
    if (st > hgt) {
      obj.css({
        "position": "fixed",
        "bottom": "0px",
        "margin-left": "660px"
      });
    }
    if (st < hgt) {
      return obj.css({
        "position": "static",
        "margin-left": "0px"
      });
    }
  };

  floatShareBox = function(st, obj, hgt) {
    if (st > hgt) {
      obj.css({
        "position": "fixed"
      });
    }
    if (st < hgt) {
      return obj.css({
        "position": "abosolute"
      });
    }
  };

  $(window).scroll(function() {
    var hgt, obj, st;
    st = $(window).scrollTop();
    obj = $('#rightCol');
    hgt = $('.header').height() + $('.adbox-fw').height() + obj.height() + 40;
    floatRightCol(st, obj, hgt);
    obj = $('#articleShareBox');
    hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height();
    return floatShareBox(st, obj, hgt);
  });

}).call(this);
