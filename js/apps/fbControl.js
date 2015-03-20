/* 控制 FB RELOAD 以防不出現或視窗大小調整後寬度爆炸 */

(function() {
  $(window).resize(function() {
    return FB.XFBML.parse();
  });

}).call(this);
