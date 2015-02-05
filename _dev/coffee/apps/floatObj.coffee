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

# FLOAT FB BOX ON RIGHT BOTTOM
floatRbFB = () ->
	html = '<div id="floatRbFB" class="floatRbFB hidden-md">
	<div class="popup">
		<h3>立刻按「讚」！讓您隨時看到更多有趣的內容</h3>
		<div class="fb-like-box" data-href="https://www.facebook.com/pages/4fun-club/405053299661627" data-width="100%" data-height="450px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
	</div>
</div>'
	$('body').append html
	FB.XFBML.parse()

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
			if( st == 0 )
				$('#articleShareBox').animate {
					"top": "-1px"
				}
			# console.log st,obj,hgt

winWid = $(window).width()
if winWid > 768			
	floatRbFB()


floatModule()

$(window).resize () ->
	floatModule()


	


