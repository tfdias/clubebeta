//$(document).ready(function() {
	
//carregaProdutos();	
	
function carregaProdutos(opcao) {
	
	$.getJSON('bd/dados-produtos.php?opcao=' + opcao, function (dados) {

		if (dados.length > 0) {
		
			var columncount = 0;	
			var div = '&nbsp;';
			$.each(dados, function(i, obj) { 
								   
			div += "<div class='span3' style='margin-left:0px;'>" +
					"<div class='product-item'>" +
//						"<a href='bd/dados-produtos.php?opcao=unico-produto?id_prod=" + obj.id + "'>" +
						"<a href='products-page.php'>" +
							"<img style='height:200px;' src='img_produtos/" + obj.foto_exibicao + "' />" +
								"<h1>" + obj.marca + "</h1>" +
						"</a>" +
						"<div class='tag-line'>" +
							"<span>" + obj.descricao + "</span>" +
						"</div>" +
						"<div class='tag-line'>" +
							"Duração prevista: 3 meses" +
						"</div>" +
						"<div class='price'>R$" + obj.valor + "</div>" +
					<!--	"<div class='tag-line'>" +
					<!--			"<span>ou 2x de R$<div class='price-divided'>" + parseFloat(obj.valor / 2).toFixed(2) + "</div></span>" +
					<!--		"</div>" +
					<!--		"<div class='tag-line'>" +
					<!--			"<span>ou 3x de R$<div class='price-divided'>" + parseFloat(obj.valor / 3).toFixed(2) + "</div></span>" +
					<!--		"</div>" +
					<!--			"<a class='cusmo-btn add-button' href='#'>Adicionar</a>" +
							"</div>" +
				"</div>";
				
			//Quando chegar a 3 produtos exibidos, quebra a linha.
			if ( columncount == 4 ) {
				div += '<br>';
				columncount = 0;
			} else
				columncount++; 
			});
			
		} else { 
					
			$('#hot-products-row').html('<span>N�o foram encontrados produtos!</span>'); 
			
		}
		
		if (opcao == 'hot-products') {
	//			$(div).appendTo('#hot-products-row');
				$('#hot-products-row').html(div); 

		} else
		if (opcao == 'new-products') {
	//			$(div).appendTo('#new-products-row');
				$('#new-products-row').html(div); 

		} else
		if (opcao == 'best-sellers') {
	//			$(div).appendTo('#best-sellers-products-row');
				$('#best-sellers-products-row').html('<span>Não foram encontrados produtos!</span>'); 

		}
		else
		if (opcao == 'hot-products-load-more') {
			
				if (columncount <=2)
					$(div).appendTo('#hot-products-row');
		} else
		if (opcao == 'new-products-load-more') {
				$(div).appendTo('#new-products-row');
		} else
		if (opcao == 'best-sellers-load-more') {
//				$(div).appendTo('#best-sellers-products-row');
				$('#best-sellers-products-row').html('<span>Não foram encontrados produtos!</span>'); 
		}
	});
}
//});