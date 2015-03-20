(function() {
  /* 彈出燈箱 （註冊、登入 等） */

  var addHtml, basicLightBoxStart;

  addHtml = '<div class="black-mode" id="black-mode"> </div> <div class="keroslightbox"> <div class="box"> <span class="close"></span> <div class="inner-box"> </div> </div> </div>';

  $('.page').append(addHtml);

  basicLightBoxStart = function(boxWid, boxHgt, closeHgt) {
    var dh, dw, sch, wh, ww;
    dw = $(document).width();
    dh = $(document).height();
    $("#black-mode").css({
      width: "100%",
      height: dh + "px"
    });
    ww = $(window).width();
    wh = $(window).height();
    sch = $(document).scrollTop();
    $(".keroslightbox").show();
    $(".keroslightbox .box").css({
      width: boxWid + "px",
      height: boxHgt + "px",
      left: (ww - boxWid) / 2 + "px",
      top: sch + (wh - boxHgt) / 2 - 50
    });
    $(".keroslightbox .inner-box").css("height", boxHgt - 40 + "px");
    $(".keroslightbox .close").css({
      height: closeHgt + "px"
    });
  };

  $(".ltbox-mode").click(function(event) {
    var boxHgt, boxWid, closeHgt, isblack, targetPage;
    event.preventDefault();
    isblack = $("#black-mode").css("height");
    if (isblack === "0px") {
      targetPage = $(this).data("page");
      boxWid = $(this).data("lbwid");
      boxHgt = $(this).data("lbhgt");
      closeHgt = $(this).data("clshgt");
      basicLightBoxStart(boxWid, boxHgt, closeHgt);
      $(".keroslightbox .inner-box").load(targetPage);
    }
  });

  $(".keroslightbox .close").click(function() {
    $("#black-mode").css({
      height: "0px"
    });
    $(".keroslightbox").hide();
    $(".keroslightbox .box, .keroslightbox .close").css({
      height: "0px"
    });
    $(".keroslightbox .inner-box").html("");
  });

}).call(this);
