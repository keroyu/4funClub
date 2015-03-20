(function() {

  // 在縮圖上覆蓋播放按鈕圖
  var resizeMovieBtn;

  require(['apps/general', 'apps/tabsControl', 'apps/floatObj', 'apps/popupBox', 'apps/datePicker']);

  resizeMovieBtn = function() {
    return $('.movieplay').each(function() {
      var hgt, wid;
      wid = $(this).parents().find('li img').width();
      hgt = $(this).parents().find('li img').height();
      return $(this).css({
        "width": wid + 'px',
        "height": hgt + 'px',
        "background": "url(../img/movie.png) no-repeat",
        "background-size": wid + 'px ' + hgt + 'px',
        "z-index": 0
      });
    });
  };

  resizeMovieBtn();

  $(window).resize(function() {
    return resizeMovieBtn();
  });

  //使內文的youtube不會覆蓋到fb plugin
  $('article iframe').each(function() {
    var isYoutube, newSrc, src;
    src = $(this).attr('src');
    isYoutube = src.indexOf('youtube');
    if (isYoutube > 0) {
      newSrc = src + '?wmode=transparent';
      return $(this).attr('src', newSrc);
    }
  });

  // 使檢舉視窗 RESPONSIVE
  var wid = $(window).width();
  var changeLbwid = function(){
    if( wid < 561 ) {
      $('#reportBtn').attr('data-lbwid', 300);
      $('#reportBtn').attr('data-lbhgt', 420);
    }
    if ( wid < 360) {
      $('#reportBtn').attr('data-lbwid', 260);
      $('#reportBtn').attr('data-lbhgt', 400);
    }
  } 
  changeLbwid();
   $(window).resize(function() {
    return changeLbwid();
  });

}).call(this);
