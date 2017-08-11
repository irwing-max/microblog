jQuery(document).ready(function(){

	var conteudo = jQuery("textarea#content").val();

	jQuery("input#postar").click(function(){
		jQuery("#show").append(conteudo);
	});
});