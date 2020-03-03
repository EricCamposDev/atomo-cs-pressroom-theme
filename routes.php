<?php
	$theme = new Theme('globalnews');
	if( $theme->uri(1) ){
		# carregando paginas
		switch($theme->uri(1)){
			case "exemplo-de-requisicao":
				$definePage = [
					"title" => "requisição exemplo || um exemplo de requisição",
					"page" => "example-request"
				];
			break;

			default:
				$definePage = [
					"title" => "Error 404 || requisição não encontrou resultados",
					"page" => "404"
				];
			break;
		}
	}else{
		# carregando index
		$definePage = [
			"title" => "site exemplo || um exemplo de home",
			"page" => "home"
		];
	}
?>