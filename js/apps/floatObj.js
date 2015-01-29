(function() {
  var floatModule, floatRbFB, floatRightCol, floatShareBox, winWid;

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

  floatRbFB = function() {
    var html;
    html = '<div id="floatRbFB" class="floatRbFB hidden-md"> <div class="popup"> <h3>立刻按「讚」！讓您隨時看到更多有趣的內容</h3> <div class="fb-like-box" data-href="https://www.facebook.com/pages/4fun-club/405053299661627" data-width="100%" data-height="450px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div> </div> </div>';
    $('body').append(html);
    return FB.XFBML.parse();
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
        floatShareBox(st, obj, hgt);
        if (st === 0) {
          return $('#articleShareBox').animate({
            "top": "-1px"
          });
        }
      });
    }
  };

  winWid = $(window).width();

  if (winWid > 768) {
    floatRbFB();
  }

  floatModule();

  $(window).resize(function() {
    return floatModule();
  });

}).call(this);
