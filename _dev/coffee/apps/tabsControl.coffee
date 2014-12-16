changeTab = (btn) ->
	target = btn.data('toggle')
	btn.addClass('active').siblings().removeClass('active')
	$(target).addClass('active').siblings().removeClass('active')

$('.tabs-list').each ()->
	triggerMethod = $('.tabs-list').data('trigger')
	$tabBtn = $(this).find('.tabs-list-item')

	if triggerMethod == 'hover'
		$tabBtn.hover () ->
			changeTab( $(this) )
	if triggerMethod == 'click'
		$tabBtn.click () ->
			changeTab( $(this) )
			return false
	


