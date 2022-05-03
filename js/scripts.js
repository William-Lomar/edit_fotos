$(function(){
	$('form').ajaxForm({
			dataType:'json',
			success: function(data){
				$('form').each(function(){
					this.reset();
				});
				alert(data.mensagem);
			}
	});
})