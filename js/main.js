(function() {
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
        "background-size": wid + 'px ' + hgt + 'px'
      });
    });
  };

  resizeMovieBtn();

  $(window).resize(function() {
    return resizeMovieBtn();
  });

  $('article iframe').each(function() {
    var isYoutube, newSrc, src;
    src = $(this).attr('src');
    isYoutube = src.indexOf('youtube');
    if (isYoutube > 0) {
      newSrc = src + '?wmode=transparent';
      return $(this).attr('src', newSrc);
    }
  });

}).call(this);
