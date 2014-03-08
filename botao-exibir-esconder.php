<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow" />
<title>Botão exibir/esconder</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
</head>

<body>

<style type="text/css">
.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}

h1 { text-align:center }

#botaoExibir, #botaoExibirFade  {
	width:920px;
	height:30px;
	text-align:center;
	color:#FFF;
	background:url('http://seudominio.com.br/exibir.jpg');
	cursor:pointer;	
}
#form-oculto, #form-ocultoFade {
    background: none repeat scroll 0 0 #CCCCCC;
    border: 2px solid;
    float: left;
    padding: 10px;
    width: 896px;
}
div.active, div.activeFade {
	cursor:pointer; 
	text-align:center; 
	background:url('http://seudominio.com.br/esconder.jpg');
	width:920px; 
	height:30px;  
}
</style>
<div class="conteudo">

<!-- EXEMPLO COM SLIDE --> 
<script>
jQuery(document).ready(
function() {
jQuery("#botaoExibir").toggle(
function() {
jQuery("div#form-oculto").slideDown(); // slideDown() na div #form-oculto
jQuery("#botaoExibir").find('div').addClass('active'); // altera para botão esconder
},
function() {
jQuery("div#form-oculto").slideUp(); // slideUp()na div #form-oculto
jQuery("#botaoExibir").find('div').removeClass('active'); //retorna para botão exibir
}
);
}); 
</script>
  <h1>Botão exibir/esconder conteúdo com efeito de slide</h1>
  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

  <!-- BOTÃO EXIBIR -->
  <div id="botaoExibir">
    <div></div> <!-- BOTÃO ESCONDER -->
  </div>

  <!-- CONTEÚDO OCULTO -->
  <div id="form-oculto" style="display: none;">
   <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

  </div>
 <!-- FIM EXEMPLO COM SLIDE --> 
  
  <!-- EXEMPLO COM FADE -->
  <script>
jQuery(document).ready(
function() {
jQuery("#botaoExibirFade").toggle(
function() {
jQuery("div#form-ocultoFade").fadeIn(); // fadeIn() na div #form-oculto
jQuery("#botaoExibirFade").find('div').addClass('activeFade'); // altera para botão esconder
},
function() {
jQuery("div#form-ocultoFade").fadeOut(); // fadeOut() na div #form-oculto
jQuery("#botaoExibirFade").find('div').removeClass('activeFade'); //retorna para botão exibir
}
);
}); 
</script>
   <h1>Botão exibir/esconder conteúdo com efeito de fade</h1>
  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

  <div id="botaoExibirFade">
    <div></div>
  </div>

  <div id="form-ocultoFade" style="display: none;">
   <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

  </div>
<!-- FIM EXEMPLO COM FADE -->  
</div>    


</body>
</html>
