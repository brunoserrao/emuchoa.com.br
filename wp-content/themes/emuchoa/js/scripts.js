$(function(){
	
	// Topo Cycle Banners
	$('#banners .content').cycle({
		'fx': 'fade',
		'pause': true,
		'timeout': 5000,
		'prev' : '.cycle-prev',
		'next': '.cycle-next',
		'pager': '.cycle-pager',
		'pagerAnchorBuilder' : function(idx, slide) { 
									return '<div class="cycle-pager-bolinha"></div>';
								}
	});

	// Cycle Projetos Home
	$('#home .projetos-content').jcarousel();

	// Colorbox Imagens do Post
	$('.entry-content a img').parent().colorbox({
		photo: true,
		rel:'gal',
		maxWidth: '80%',
		maxHeight: '80%'
	});

	$('.colorbox').colorbox({
		photo: true,
		rel: 'colorbox',
		maxWdth: '80%',
		maxHeight: '80%'
	});

	// Validar formularios
	$('.wpcf7-form').validate();

	// Mascaras 
	$('.telefone').mask("(99) 99999999?9");

	// Cufon
	Cufon.replace('.helvetica', { 
		fontFamily: 'Helvetica Neue LT Std',
		hover: true
	});

	// Cufon
	Cufon.replace('.title-bar', { 
		fontFamily: 'Helvetica Neue LT Std'
	});

	// Cufon
	Cufon.replace('.entry-title h1, .entry-title h2', { 
		fontFamily: 'Helvetica Neue LT Std'
	});

	// Cufon
	Cufon.replace('#abas', { 
		fontFamily: 'Helvetica Neue LT Std'
	});


	// abas
	// oculta todas as abas
	$("div.contaba").hide();
	// mostra somente  a primeira aba
	$("div.contaba:first").show();
	// seta a primeira aba como selecionada (na lista de abas)
	$("#abas a:first").addClass('selected');
	 
	// quando clicar no link de uma aba
	$("#abas a").click(function(){
		// oculta todas as abas
		$("div.contaba").hide();
		// tira a seleção da aba atual
		$("#abas a").removeClass('selected');
		 
		// adiciona a classe selected na selecionada atualmente
		$(this).addClass('selected');
		// mostra a aba clicada
		$($(this).attr("href")).show();
		// pra nao ir para o link

		// Cufon
		Cufon.refresh();

		return false;
	});

	// Pagina Projetos
	if(window.location.hash) {
		var hash_value = window.location.hash;
		switch(hash_value){
			case '#destaques':
				atualizarAba('destaques');
				break;
			case '#recentes':
				atualizarAba('recentes');
				break;
			case '#gerais':
				atualizarAba('gerais');
				break;
			case '#gerais':
				atualizarAba('reforco');
			break;
			default:
			return false;
		}
	}

	function atualizarAba (aba) {
		$(".selected").removeClass('selected');
		$(".aba-"+aba).find('a').addClass('selected');
		$(".aba-"+aba).show();
		Cufon.refresh();
	}
})