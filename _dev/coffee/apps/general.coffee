$('#menuBtn').click () ->
	$('#menuList').slideToggle 'fast'

$('.switchToggle').click () ->
	target = $(this).data 'show'
	$(this).hide()
	$(target).show()
	return false
$('.switchToggleClose').click () ->
	hideTarget = $(this).data 'hide'
	showTarget = $(this).data 'show'
	$(hideTarget).hide()
	$(showTarget).show()
	return false