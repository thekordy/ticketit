$(function(){
	$('.jquery_agent_cat').click(function(){
		var checked=$(this).hasClass('checked');
		if (checked){
			$(this).removeClass('checked');
			$('#'+$(this).attr('id')+"_auto").prop('checked',false).prop('disabled','disabled');			
		}else{
			$(this).addClass('checked');
			$('#'+$(this).attr('id')+"_auto").prop('checked','checked').prop('disabled',false);
		}
	});
});
