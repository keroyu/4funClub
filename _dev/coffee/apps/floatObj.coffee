floatRightCol = (st,obj,hgt) ->
	if st > hgt
		obj.css {
				"position": "fixed"
				"bottom": "0px"
				"margin-left": "660px"
			}
	if st < hgt
		obj.css {
			"position": "static",
			"margin-left": "0px"
		}

floatShareBox = (st,obj,hgt) ->
	if st > hgt
		obj.css {
				"position": "fixed"
				# "margin-top": "5px"
			}
	if st < hgt
		obj.css {
			"position": "abosolute"
			# "margin-top": "-1px"
		}


$(window).scroll ()->
	st = $(window).scrollTop()
	# Right column
	obj = $('#rightCol')
	hgt = $('.header').height() + $('.adbox-fw').height() + obj.height() + 40	
	floatRightCol(st,obj,hgt)
	# Article Facebook share
	obj = $('#articleShareBox')
	hgt = $('.header').height() + $('.adbox-fw').height() + $('.breadcrumb').height() + 15 + $('#articleShareBox').height()
	floatShareBox(st,obj,hgt)


	


