<?php
	//Template Name: Hands Safe
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hands Safe</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/logo_CNPH.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css?26" rel="stylesheet" />
		<link href="<?php echo get_template_directory_uri(); ?>/style.css?22" rel="stylesheet" />
		
		<?php wp_head(); ?>
		
		<style>
			p{color:#5d5d5d;}
			footer a{font-size:16px}
		</style>
		
    </head>
    
    <body>
        <header>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/banner-handssafe.jpg" class="img-fluid d-md-block d-none">
			 <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/header_mobile.png" class="img-fluid d-md-none">
            <div class="container py-5">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 style="font-size:36px;color:#319e9a">
                           Desenvolvido por enfermeiros especialistas em controle<br>
                           de infecção relacionada à assistência à Saúde. 
                       </h2>
                       <p class="mt-5" style="font-size:22px;line-height:25px">
                           O HANDS Safe é o primeiro aplicativo para auditoria de observação direta de higiene das mãos que permite além da avaliação da adesão dos 5 
                           momentos para higiene das mãos, avaliar também a qualidade de técnica dessa prática.
                       </p>
                    </div>
                </div>
            </div>
        </header>
        <section class="mt-4" style="background:url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/banner-versao-handssafe1.jpg) no-repeat;background-size:cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-align">
                        <img class="img-fluid" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/mobile-device.png">
                    </div>
                    <div class="col-md-6">
                        <h3 style="font-size:36px;color:#00348e">A versão disponível permite:</h3>
						<p style="font-size:20px;line-height:30px">
							• Auditar os 5 momentos de higiene das mãos.<br>
							• Personalizar categoria profissional, turno de trabalho e setor auditado.<br>
							• Auditar a qualidade da técnica de higiene das mãos dos profissionais da saúde.<br>
							• Auditar mais de um momento por avaliação.<br>
							• Avaliar adesão à higiene das mãos por tipo de precaução.<br>
							• Visualizar relatórios detalhados e em tempo real.<br>
							• Capturar dados offline.
						</p>
                    </div>
                </div>
            </div>
        </section>
		<section style="background:#f8f9fa;padding:70px 0 40px 0;border-bottom:4px solid #00348e">
            <div class="container">
                <div class="row">
					<div class="col-12 text-center pb-5">
						<h3 style="font-size:29px;color:#00348e">
							Prático e intuitivo, com HANDS Safe entregamos uma solução completa para o gerenciamento 
							do seu indicador de adesão à higiene das mãos.
						</h3>
					</div>
                    <div class="col-md-6 text-align">
                        <img class="img-fluid" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/5-momentos-1.png">
                    </div>
                    <div class="col-md-6">
						<img class="img-fluid" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/planilhas.png">
                    </div>
                </div>
            </div>
        </section>
		<section class="py-5 text-center">
			<div class="rodape">
				<h3 style="color:#00348e;font-weight:800">BAIXE AGORA</h3>
				<div class="redes-app py-3">
					<img class="px-2" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/appstore.png">
					<img class="px-2" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/10/google.png">
				</div>
			</div>
		</section>
		<footer class="py-4 text-center text-uppercase" style="background-color:#00348e">
			<a class="text-white px-3" href="#" data-toggle="modal" data-target="#politica_privacidade">Política de Privacidade</a>
			<a class="text-white px-3" href="#" data-toggle="modal" data-target="#termo_uso">Termo de Uso</a>
			<a class="text-white px-3" href="#" data-toggle="modal" data-target="#saiba_mais">Saiba Mais</a>
		</footer>
		
		<div class="modal fade" id="politica_privacidade" tabindex="-1" role="dialog" aria-labelledby="politica_privacidadeLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="politica_privacidadeLabel">Política de Privacidade</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<!-- wp:paragraph -->
				<p>A sua privacidade é importante para nós. É política do <em>HANDS Safe</em> respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no aplicativo <em>HANDS Safe</em>, e outros sites que possuímos e operamos.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Solicitamos informações pessoais apenas quando realmente precisamos delas para fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados. Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei. Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contato conosco.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Compromisso do Usuário, o usuário se compromete a fazer uso adequado dos conteúdos e da informação que o <em>HANDS Safe</em> oferece no site e com caráter enunciativo, mas não limitativo:  </p>
				<!-- /wp:paragraph -->

				<!-- wp:list -->
				<ul><li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública; </li><li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, ou casas de apostas online, jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos; </li><li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do <em>HANDS Safe</em>, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li></ul>
				<!-- /wp:list -->

				<!-- wp:paragraph -->
				<p>Esperamos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site. Esta política é efetiva a partir de setembro de 2022.</p>
				<!-- /wp:paragraph -->
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="termo_uso" tabindex="-1" role="dialog" aria-labelledby="termo_usoLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="termo_usoLabel">Termo de Uso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					<!-- wp:paragraph -->
					<p><strong>1. GERAL</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>1.1. Ao baixar o HANDS Safe, você concorda em ficar vinculado a estes termos de uso . Por<br>favor, revise-os cuidadosamente antes do uso e/ou aceitação. “Podemos alterar esses termos<br>do aplicativo a qualquer momento publicando uma nova versão deles no site.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>2. DEFINIÇÕES</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>2.1. O HANDS Safe é um software fornecido pela Comercial Nacional de Produtos<br>Hospitalares (CNPH), podendo a ser utilizado em aparelhos com sistema ​ Apple iOS, Android<br>OS ou computadores.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>3. PROTEÇÃO DE DADOS E POLÍTICA DE PRIVACIDADE</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>3.1. Qualquer informação pessoal que você fornecer ao HANDS Safe ao usar o aplicativo não<br>será utilizada pela CNPH, todos os dados são protegidos pela LPGD.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>4. Cnph.com/handsafe</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>4.1. O Aplicativo permite que você acesse determinadas funcionalidades disponíveis por meio<br>do Aplicativo HANDS Safe</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p> <strong>5. DIREITOS DE PROPRIEDADE E LICENÇA</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>5.1. Todas as marcas comerciais, direitos autorais, direitos de banco de dados e outros<br>direitos de propriedade intelectual de qualquer natureza no Aplicativo, juntamente com o<br>código de software subjacente, são de propriedade direta da CNPH ou dos licenciadores ou<br>parceiros da CNPH</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>5.2 Este Aplicativo contém material que é de nossa propriedade ou licenciado para nós. Este<br>material inclui, mas não se limita a, imagens, design, layout, aparência, gráficos, conteúdo e</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>fluxo de trabalho. A reprodução é proibida, exceto de acordo com o aviso de direitos<br>autorais, que faz parte destes termos e condições.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>5.3. O aplicativo HANDS Safe concede a você uma licença limitada, não exclusiva, isenta de<br>royalties e revogável para usar o aplicativo para seu uso comercial e pessoal de acordo com<br>estes termos do aplicativo ou conforme modificado ou substituído por acordo por escrito.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>6. CONDIÇÕES DE USO</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>6.1. Exceto para material de domínio público sob as leis de direitos autorais do Brasil, todo o<br>material contido neste Aplicativo (incluindo todo o software) é protegido pelas leis de direitos<br>autorais do Brasil. Você não irá, nem permitirá que terceiros em seu nome (i) façam e<br>distribuam cópias do Aplicativo (ii) tentem copiar, reproduzir, alterar, modificar, fazer<br>engenharia reversa, desmontar, descompilar, transferir, trocar, armazenar em um sistema,<br>ou traduzir o Aplicativo; ou (iii) criar trabalhos derivados do Aplicativo de qualquer tipo. Você<br>não licenciará ou venderá qualquer material contido no HANDS Safe sem o consentimento<br>prévio do proprietário dos direitos autorais. A violação desta disposição pode resultar em<br>severas penalidades civis e criminais.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>6.2. Se o Aplicativo estiver atualmente disponível para você gratuitamente para seu uso, a<br>CNPH se reserva o direito de alterar ou retirar o Aplicativo, ou cobrar pelo aplicativo ou<br>serviço fornecido a você de acordo com estes termos do aplicativo ou conforme o acordo<br>comercial previamente estabelecido.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>6.3. Você reconhece que os termos do contrato com seu respectivo provedor de rede móvel<br>('Provedor Móvel') continuarão a ser aplicados ao usar o Aplicativo. Como resultado, você<br>pode ser cobrado pelo Provedor Móvel pelo acesso aos serviços de conexão de rede pela<br>duração da conexão durante o acesso ao Aplicativo ou quaisquer encargos de terceiros que<br>possam surgir. Você aceita a responsabilidade por quaisquer cobranças que surjam.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>6.4. Se você não for o pagador da conta do telefone celular ou dispositivo portátil usado para<br>acessar o Aplicativo, será considerado que você recebeu permissão do pagador da conta para<br>usar o Aplicativo.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>7. DISPONIBILIDADE</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>7.1. Este aplicativo está disponível para dispositivos móveis portáteis e computadores<br>pessoais. A CNPH envidará esforços razoáveis ​​para disponibilizar o Aplicativo em todos os<br>momentos. No entanto, você reconhece que o Aplicativo é fornecido pela Internet e redes<br>móveis e, portanto, a qualidade e a disponibilidade do Aplicativo podem ser afetadas por<br>fatores fora do controle razoável da CNPH.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>7.2. A CNPH, seus diretores, funcionários, subcontratados e afiliados não aceitam qualquer<br>responsabilidade pela indisponibilidade do Aplicativo, ou qualquer dificuldade ou<br>incapacidade de baixar ou acessar o conteúdo ou qualquer outra falha do sistema de<br>comunicação que possa resultar na indisponibilidade do Aplicativo.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>8. REQUISITOS DO SISTEMA</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>8.1. Para usar o Aplicativo, você precisa ter um telefone celular compatível, dispositivo<br>portátil ou computador pessoal, bem como acesso à Internet.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>8.2. O Aplicativo pode ser atualizado de tempos em tempos para adicionar suporte a novas<br>funções e serviços.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>9. RESCISÃO</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>9.1. A CNPH pode rescindir o uso do Aplicativo a qualquer momento, notificando você de<br>rescisão.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>9.2. Após qualquer rescisão, (a) os direitos e licenças concedidos a você aqui serão<br>rescindidos; (b) você deve interromper todo o uso do Software/Aplicativo;</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>10. LIMITAÇÃO DE RESPONSABILIDADE</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>10.1. O uso de qualquer informação ou material deste Aplicativo é inteiramente por sua<br>conta e risco, pelo qual não seremos responsáveis. Será de sua própria responsabilidade<br>garantir que quaisquer produtos, serviços ou informações disponíveis por meio deste<br>Aplicativo atendam aos seus requisitos específicos. Em nenhum caso a CNPH será<br>responsável por quaisquer perdas ou danos diretos, indiretos, especiais, punitivos,</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>exemplares ou consequenciais de qualquer tipo decorrentes de seu uso ou acesso ao<br>Aplicativo, incluindo lucros cessantes ou similares, sejam ou não no contemplação das partes,<br>seja com base em quebra de contrato, ato ilícito (incluindo negligência), responsabilidade<br>pelo produto ou de outra forma.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>10.2. A CNPH não é responsável perante você por qualquer dano ou alteração em seu<br>equipamento, incluindo, mas não limitado a, equipamento de computador, dispositivo<br>portátil ou telefones celulares como resultado da instalação ou uso do aplicativo.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>10.3 O uso não autorizado deste Aplicativo pode dar origem a uma reclamação por danos<br>e/ou ser uma ofensa criminal.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>11. ISENÇÃO DE GARANTIAS </strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>O Aplicativo e o software são fornecidos "como estão" e "conforme disponíveis" sem garantia de qualquer tipo.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>12. CONFORMIDADE COM AS LEIS DE PRIVACIDADE APLICÁVEIS </strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>A natureza do ServiçoHandyAudit é tal que não há exigência de que Informações Pessoais sejam inseridas pelo Hospital no software HandyAudit e o Hospital está estritamente proibido de fazê-lo, sendoassim o aplicativo está de acordo com a Lei Geral de Proteção de Dados Pessoais (LGPD – Lei nº 13.709/2018)</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><strong>13. DIVERSOS</strong> </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Se uma ou mais destas disposições forem consideradas ilegais ou inexequíveis,<br>este Contrato não será tornado inoperante, mas as demais disposições continuarão em pleno<br>vigor e efeito.</p>
					<!-- /wp:paragraph -->
			  </div>
			</div>
		  </div>
		</div>
		
		
<!-- 		saiba mais -->
		<div class="modal fade" id="saiba_mais" tabindex="-1" role="dialog" aria-labelledby="saiba_maisLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="saiba_maisLabel">Para mais informações sobre higiene das mãos clique nos links abaixo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					<!-- wp:paragraph -->
					<p>WHO (World Health Organization). WHO Guidelines on Hand Hygiene in Health Care (Full version). First Global Patient Safety Challenge. Clean Care is Safer Care. Geneva. 2009. 270 p. Disponível em:</p>
					<!-- /wp:paragraph -->
				  
				  <!-- wp:paragraph -->
					<p><a href="http://apps.who.int/iris/bitstream/10665/44102/1/9789241597906_eng.pdf" target="_blank">				http://apps.who.int/iris/bitstream/10665/44102/1/9789241597906_eng.pdf</a></p>
				  <!-- /wp:paragraph -->
				  
				  	<!-- wp:paragraph -->
					<p>WHO (World Health Organization). Guide to Implementation. A Guide to the Implementation of the WHO Multimodal Hand Hygiene Improvement Strategy. Geneva. 2009. 48 p. Disponível em:</p>
					<!-- /wp:paragraph -->
				  
				  <!-- wp:paragraph -->
					<p><a href="http://apps.who.int/iris/bitstream/10665/70030/1/WHO_IER_PSP_2009.02_eng.pdf" target="_blank">http://apps.who.int/iris/bitstream/10665/70030/1/WHO_IER_PSP_2009.02_eng.pdf</a></p>
				  <!-- /wp:paragraph -->
				  					
				  	<!-- wp:paragraph -->
					<p>Manual para observadores: estratégia multimodal da OMS para a melhoria da higienização das mãos. Brasília: Organização Pan-Americana da Saúde; Agência Nacional de Vigilância Sanitária. 2008. 58 p. Disponível em:</p>
					<!-- /wp:paragraph -->
				  
				  <!-- wp:paragraph -->
					<p><a href="https://www.anvisa.gov.br/servicosaude/controle/higienizacao_oms/manual_para_observadores-miolo.pdf" target="_blank">https://www.anvisa.gov.br/servicosaude/controle/higienizacao_oms/manual_para_observadores-miolo.pdf</a></p>
				  <!-- /wp:paragraph -->
			  </div>
			</div>
		  </div>
		</div>		
    </body>
</html>

<!-- Bootstrap core JS-->
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		if(window.location.href.indexOf('#politica_privacidade') != -1) {
		  $('#politica_privacidade').modal('show');
		}
	});
	document.addEventListener("DOMContentLoaded", function() {
		if(window.location.href.indexOf('#termo_uso') != -1) {
		  $('#termo_uso').modal('show');
		}
	});
	document.addEventListener("DOMContentLoaded", function() {
		if(window.location.href.indexOf('#saiba_mais') != -1) {
		  $('#saiba_mais').modal('show');
		}
	});
</script>