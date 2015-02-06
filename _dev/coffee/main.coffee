require([
	# 'lib/jquery-ui.min'
	'apps/general'
	'apps/tabsControl'
	'apps/floatObj'
	'apps/popupBox'
	'apps/datePicker'
])

# RESIZE MOVIE PLAY BUTTON
resizeMovieBtn = ()->
	$('.movieplay').each ()->
		wid = $(this).parents().find('li img').width()
		hgt = $(this).parents().find('li img').height()
		$(this).css {
			"width": wid + 'px'
			"height": hgt + 'px'
			"background": "url(../img/movie.png) no-repeat"
			"background-size": wid+'px '+hgt+'px'
		}

resizeMovieBtn()
$(window).resize () ->
	resizeMovieBtn()

# FIX YOUTUBE OVERLAY
$('article iframe').each ()->
	src = $(this).attr('src')
	isYoutube = src.indexOf('youtube')
	if isYoutube > 0
		newSrc = src + '?wmode=transparent'
		$(this).attr('src', newSrc)