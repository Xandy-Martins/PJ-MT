var medida = $('.dois');
animacao = "anime-start";

function medidaScroll() 
{
	var topo = $(document).scrollTop();
	console.log(topo);
	medida.each(function() {
		var top = $(this);
	});
}

medidaScroll();