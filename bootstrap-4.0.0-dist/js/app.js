var medida = $('.anime');
animacao = "anime-start";

function medidaScroll() 
{
	var topo = $(document).scrollTop();
	
	console.log(topo);

	medida.each(function() {
		var top = $(this).offset().top();
		if (topo>top) {
			$(this).addClass(".anime-start");			
		}else{
			$(this).removeClass(".anime-start");		
		}
	});
}
