addHtml = '<div class="black-mode" id="black-mode"> </div>
<div class="keroslightbox"> <div class="box"> <span class="close">X</span> <div class="inner-box"> </div> </div> </div>'

$('body').append addHtml


# TARGET ELEMENT TO APPLY LIGHTBOX MODE 

# CHECK IF THE BLACK MODE IS ON 

# IF NOT, ENTER BLACK MODE 

# POPUP LIGHTBOX 
basicLightBoxStart = (boxWid, boxHgt, closeHgt) ->
  
  #DEFINE SCALE OF BLACK DIV
  dw = $(document).width()
  dh = $(document).height()
  $("#black-mode").css
    width: dw + "px"
    height: dh + "px"

  ww = $(window).width()
  wh = $(window).height()
  sch = $(document).scrollTop() # DEFINE POSTION OF LIGHTBOX
  $(".keroslightbox").show()
  $(".keroslightbox .box").css
    width: boxWid + "px"
    height: boxHgt + "px"
    left: (ww - boxWid) / 2 + "px"
    top: sch + (wh - boxHgt) / 2 - 50

  $(".keroslightbox .inner-box").css "height", boxHgt - 40 + "px"
  $(".keroslightbox .close").css height: closeHgt + "px"
  return
$(".ltbox-mode").click (event) ->
  event.preventDefault()
  isblack = $("#black-mode").css("height")
  if isblack is "0px"
    targetPage = $(this).data("page")
    boxWid = $(this).data("lbwid")
    boxHgt = $(this).data("lbhgt")
    closeHgt = $(this).data("clshgt")
    basicLightBoxStart boxWid, boxHgt, closeHgt
    $(".keroslightbox .inner-box").load targetPage
    console.log targetPage
  return


# DEFINE CLOSE BUTTON EVENT 
$(".keroslightbox .close").click ->
  
  # REMOVE EVERY POPUP ELEMENT BY SET THE HGT TO ZERO 
  $("#black-mode").css height: "0px"
  $(".keroslightbox").hide()
  $(".keroslightbox .box, .keroslightbox .close").css height: "0px"
  $(".keroslightbox .inner-box").html ""
  return
