(function() {
  var resizeMovieBtn;

  require(['apps/general', 'apps/tabsControl', 'apps/floatObj', 'apps/popupBox', 'apps/datePicker']);

  resizeMovieBtn = function() {
    return $('.movieplay').each(function() {
      var hgt, wid;
      wid = $(this).parents().find('li img').width();
      hgt = $(this).parents().find('li img').height();
      console.log(wid, hgt);
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

}).call(this);
