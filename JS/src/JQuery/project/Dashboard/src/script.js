$(document).ready(() => {
	
	$('#documentacao').on('click', () => {
		//$('#pagina').load('documentacao.html')

		/*
		$.get('documentacao.html', data => { 
			$('#pagina').html(data)
		})
		*/
		$.post('documentacao.html', data => { 
			$('#pagina').html(data)
		})
	})

	$('#suporte').on('click', () => {
		//$('#pagina').load('suporte.html')

		/*
		$.get('suporte.html', data => { 
			$('#pagina').html(data)
		})
		*/
		$.post('suporte.html', data => { 
			$('#pagina').html(data)
		})
	})


	//ajax
	$('#competencia').on('change', e => {

		let competencia = $(e.target).val()
		
		$.ajax({ // É preciso definir: O método da requisição, a URL dessa requisição, se vamos ou não enviar dados e o que será feito se der sucesso ou se der erro?
			type: 'GET', // Método da requisição
			url: 'app.php', // URL
			data: `competencia=${competencia}`, // Dado a ser enviado - x-www-form-urlencoded
			dataType: 'json', // Adicional - formato dos dados que serão recebidos (neste caso, JSON)
			success: dados => { // Se der sucesso
				$('#numeroVendas').html(dados.numeroVendas)
				$('#totalVendas').html(dados.totalVendas)
			},
			error: erro => { console.log(erro) } // Se der erro
		})
	})
})