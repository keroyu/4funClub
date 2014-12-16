floatRightCol = (st,obj,hgt) ->
	# Effects
	if st > hgt
		obj.css {
			"position": "fixed" 
			"bottom": "75px"
		}
	if st < hgt
		obj.css {
			"position": "static"
		}

floatShareBox = (st,obj,hgt) ->
	if st > hgt
		obj.stop(true,true).animate {
			"top": st+200+"px"
		}, "easeOutExpo"
	if st < hgt
		obj.stop(true,true).animate {
			"top": "337px"
		}, "easeOutExpo"

floatModule = () ->
	winWid = $(window).width()
	if winWid > 768
		$('#fixedWidgets').css "width": "300px"
		$(window).scroll ()->
			st = $(window).scrollTop()

			# Right column
			obj = $('#fixedWidgets')
			hgt = 605
			floatRightCol(st,obj,hgt)

			# Article Facebook share
			obj = $('#articleShareBox')
			hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height()
			floatShareBox(st,obj,hgt)


floatModule()
$(window).resize () ->
	floatModule()







	


