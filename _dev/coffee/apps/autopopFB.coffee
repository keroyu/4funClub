addHtml = '<div class="black-mode" id="black-mode"> </div>
<div class="keroslightbox"> <div class="box"> <span class="close"></span> <div class="inner-box"> </div> </div> </div>'
$('.page').append addHtml

basicLightBoxStart = (boxWid, boxHgt, closeHgt) ->
  dw = $(document).width()
  dh = $(document).height()
  $("#black-mode").css
    width: "100%"
    height: dh + "px"

  ww = $(window).width()
  wh = $(window).height()
  sch = $(document).scrollTop() 
  $(".keroslightbox").show()
  $(".keroslightbox .box").css
    width: boxWid + "px"
    height: boxHgt + "px"
    left: (ww - boxWid) / 2 + "px"
    top: sch + (wh - boxHgt) / 2 - 50

  $(".keroslightbox .inner-box").css "height", boxHgt - 40 + "px"
  $(".keroslightbox .close").css height: closeHgt + "px"
  return

popFB = () ->
	basicLightBoxStart "80%", 500, 24
	$(".keroslightbox .inner-box").load "/popup/pop_CM.html"
	console.log 'hi'
	return

popFB()
