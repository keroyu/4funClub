$('#fixedWidgets').css { 
 	"position": "relative"  
	}

floatRightCol = (st,obj,hgt) ->

	# Define the height of fixedWidgets
	hgt = $(window).height() - $('footer').height()

	# Effects
	if st > hgt
		obj.stop(true,true).animate {
			"top": st - 280 + "px"
			"overflow": "scroll"
			"height": hgt + "px"
		}, "easeOutExpo"
	if st < hgt
		obj.stop(true,true).animate {
			"top": "0px"
			"height": "auto"
		}, "easeOutExpo"

floatShareBox = (st,obj,hgt) ->
	if st > hgt
		obj.stop(true,true).animate {
			"top": st+200+"px"
		}, "easeOutExpo"
	if st < hgt
		obj.stop(true,true).animate {
			"top": "337px"
		}, "easeOutExpo"


$(window).scroll ()->
	st = $(window).scrollTop()

	# Right column
	obj = $('#fixedWidgets')
	hgt = $('.header').height() + $('.adbox-fw').height() + obj.height() + 40	
	floatRightCol(st,obj,hgt)

	# Article Facebook share
	obj = $('#articleShareBox')
	hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height()
	floatShareBox(st,obj,hgt)


	


