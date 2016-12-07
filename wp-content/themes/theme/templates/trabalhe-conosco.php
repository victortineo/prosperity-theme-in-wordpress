<?php
/**
 * The main template file.
 *
 * Template Name: Trabalhe Conosco
 *
 */
get_header();
// Vars
?>

<?php while ( have_posts() ) : the_post(); ?>
<figure class="mod-banner-page" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
	<img class="sr-only" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>">
	<figcaption class="banner-caption">
		<div class="underline"></div>
		<h1><?php the_title(); ?></h1>
	</figcaption>
	<div class="mouse"></div>
</figure>
</header>

<main id="content" class="mod-page trabalhe-conosco" tabindex="-1" role="main">
	<?php if (get_the_content()):?>
	<article class="page-content">
		<div class="wrapper">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endif; ?>

	<form id="formTrabalheConosco" method="POST" action="<?php echo get_template_directory_uri(); ?>/functions/sendEmail.php" enctype="multipart/form-data" class="mod-form-trabalhe-conosco jquery-form">
		<div class="section section-dados-pessoais">
			<div class="wrapper">
				<div class="page-header">
					<h1>Dados Pessoais</h1>
				</div>
				<input type="hidden" name="Assunto" value="Trabalhe conosco - Prosperity">
				<div class="inputs-group">
					<input required name="Nome" type="text" placeholder="Nome completo">
					<input required name="RG" type="text" placeholder="RG/Emissão">
				</div>
				<div class="inputs-group">
					<input required name="CPF" type="text" placeholder="CPF">
					<input required name="Telefone comercial" type="tel" placeholder="Telefone comercial">
					
				</div>
				<div class="inputs-group">
					<input required name="Telefone residencial fora do Brasil" type="tel" placeholder="Telefone residencial fora do Brasil">
					<input required name="Telefone residencial" type="tel" placeholder="Telefone residencial">
					
				</div>
				<div class="inputs-group">
					<input required name="Celular" type="tel" placeholder="Celular">
					
					<input required name="E-mail" type="email" placeholder="E-mail">
				</div>
				<div class="inputs-group">
					<input required name="Data de Nascimento" type="date" data-placeholder="Data de Nascimento"  min="1997-01-01" onClick="$(this).removeClass('placeholderclass')" class="dateclass placeholderclass">
					<input required name="Deficiente" type="text" placeholder="Deficiente">
				</div>
				<div class="inputs-group">
					<input required name="Qual deficiência" type="text" placeholder="Qual deficiência">
					<input required name="Endereço" type="text" placeholder="Endereço">
					
				</div>
				<div class="inputs-group">
					<input required name="CEP" type="number" placeholder="CEP">
					<div class="inputs-group">
						<input required name="Bairro" type="text" placeholder="Bairro">
						<input required name="Cidade" type="text" placeholder="Cidade">
						
					</div>
				</div>
				<div class="inputs-group">
					<input required name="Estado" type="text" placeholder="Estado">
					<input required name="Pais" type="text" placeholder="Pais">
				</div>
			</div>
		</div>
		<div class="section section-informacoes">
			<div class="wrapper">
				<div class="page-header">
					<h1>Informações profissionais educação</h1>
					<input type="hidden" name="1" value="Informações profissionais educação">
				</div>
				<div class="escolaridade">
					<div class="escola">
						<div class="inputs-group">
							<select required name="Nível de Formação 1">
								<option selected disabled>Nível de formação *</option>
								<option value="none">Sem formação</option>
								<option value="fundamental">Ensino Fundamental</option>
								<option value="medio">Ensino Médio</option>
								<option value="superior">Superior</option>
								<option value="pos">Pós-graduado</option>
								<option value="mestrado">Mestrado</option>
								<option value="doutor">Doutor</option>
							</select>
							<input required name="Instituição 1" type="text" placeholder="Instituição">
						</div>
						<div class="inputs-group">
							<input required name="Área de formação 1" type="text" placeholder="Área de formação">
							<input required name="Ano de conclusão 1" type="number" placeholder="Ano de conclusão">
						</div>
						<div class="textarea-group">
							<textarea required name="Informações complementares 1" placeholder="Informações complementares"></textarea>
						</div>
					</div>
					<div class="escola desactived">
						<div class="inputs-group">
							<select name="Nível de Formação 2">
								<option selected disabled>Nível de formação *</option>
								<option value="none">Sem formação</option>
								<option value="fundamental">Ensino Fundamental</option>
								<option value="medio">Ensino Médio</option>
								<option value="superior">Superior</option>
								<option value="pos">Pós-graduado</option>
								<option value="mestrado">Mestrado</option>
								<option value="doutor">Doutor</option>
							</select>
							<input name="Instituição 2" type="text" placeholder="Instituição">
						</div>
						<div class="inputs-group">
							<input name="Área de formação 2" type="text" placeholder="Área de formação">
							<input name="Ano de conclusão 2" type="number" placeholder="Ano de conclusão">
						</div>
						<div class="textarea-group">
							<textarea name="Informações complementares 2" placeholder="Informações complementares"></textarea>
						</div>
					</div>
					<div class="escola desactived">
						<div class="inputs-group">
							<select name="Nível de Formação 3">
								<option selected disabled>Nível de formação *</option>
								<option value="none">Sem formação</option>
								<option value="fundamental">Ensino Fundamental</option>
								<option value="medio">Ensino Médio</option>
								<option value="superior">Superior</option>
								<option value="pos">Pós-graduado</option>
								<option value="mestrado">Mestrado</option>
								<option value="doutor">Doutor</option>
							</select>
							<input name="Instituição 3" type="text" placeholder="Instituição">
						</div>
						<div class="inputs-group">
							<input name="Área de formação 3" type="text" placeholder="Área de formação">
							<input name="Ano de conclusão 3" type="number" placeholder="Ano de conclusão">
						</div>
						<div class="textarea-group">
							<textarea name="Informações complementares 3" placeholder="Informações complementares"></textarea>
						</div>
					</div>
				</div>
				<a id="adicionaEscola" href="#" class="button">Adicionar escolaridade <i class="fa fa-plus-square-o" aria-hidden="true"></i></a>

				<div class="inputs-group-four idiomas">
					<select name="Idiomas 1">
						<option selected disabled>Idiomas</option>
						<option value="ingles">Inglês</option>
						<option value="espanhol">Espanhol</option>
						<option value="frances">Francês</option>
						<option value="italiano">Italiano</option>
						<option value="alemao">Alemão</option>
					</select>
					<select name="Leitura 1">
						<option selected disabled>Leitura *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Escrita 1">
						<option selected disabled>Escrita *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Conversação 1">
						<option selected disabled>Conversação *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
				</div>
				<div class="inputs-group-four idiomas">
					<select name="Idiomas 2">
						<option selected disabled>Idiomas</option>
						<option value="ingles">Inglês</option>
						<option value="espanhol">Espanhol</option>
						<option value="frances">Francês</option>
						<option value="italiano">Italiano</option>
						<option value="alemao">Alemão</option>
					</select>
					<select name="Leitura 2">
						<option selected disabled>Leitura *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Escrita 2">
						<option selected disabled>Escrita *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Conversação 2">
						<option selected disabled>Conversação *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
				</div>
				<div class="inputs-group-four idiomas">
					<select name="Idiomas 3">
						<option selected disabled>Idiomas</option>
						<option value="ingles">Inglês</option>
						<option value="espanhol">Espanhol</option>
						<option value="frances">Francês</option>
						<option value="italiano">Italiano</option>
						<option value="alemao">Alemão</option>
					</select>
					<select name="Leitura 3">
						<option selected disabled>Leitura *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Escrita 3">
						<option selected disabled>Escrita *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
					<select name="Conversação 3">
						<option selected disabled>Conversação *</option>
						<option value="basica">Básica</option>
						<option value="intermediaria">Intermediária</option>
						<option value="avancada">Avançada</option>
					</select>
				</div>
			</div>
		</div>
		<div class="section section-profissao">
			<div class="wrapper">
				<div class="page-header">
					<h1>Informações profissionais experiências anteriores</h1>
					<h2>Experiência profissional atual</h2>
					<input type="hidden" name="Informações profissionais experiências anteriores" value="Experiência profissional atual">
				</div>
				<div class="inputs-group">
					<select required name="Nível profissional">
						<option selected disabled>Nível profissional *</option>
						<option value="auxiliar">Auxiliar</option>
						<option value="diretor">Diretor</option>
						<option value="supervisor">Supervisor</option>
					</select>
					<select required name="Tipo de relacionamento funcional">
						<option selected disabled>Tipo de relacionamento funcional *</option>
						<option value="auxiliar">Auxiliar</option>
						<option value="diretor">Diretor</option>
						<option value="supervisor">Supervisor</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="Áreas nas quais possui maior experiência">
						<option selected disabled>Áreas nas quais possui maior experiência *</option>
						<option value="auxiliar">Auxiliar</option>
						<option value="diretor">Diretor</option>
						<option value="supervisor">Supervisor</option>
					</select>
					<input required name="Remuneração Atual/Última" type="text" placeholder="Remuneração Atual/Última">
				</div>
				<div class="page-header">
					<h2>Trajetória Profissional: (Da mais recente para a mais antiga)</h2>
				</div>
				<div class="profissoes">
					<div class="profissao">
						<div class="inputs-group">
							<input required name="Empresa 1" type="text" placeholder="Empresa">
							<select required name="Segmento 1">
								<option selected disabled>Segmento</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input required name="Nacionalidade 1" type="text" placeholder="Nacionalidade">
							<select required name="Porte 1">
								<option selected disabled>Porte</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input required name="Pais 1" type="text" placeholder="Pais">
							<input required name="Descrição 1" type="text" placeholder="Descrição">
						</div>
						<div class="inputs-group">
							<input required name="Início mm/aa 1" type="text" placeholder="Início mm/aa">
							<input required name="Término mm/aa 1" type="text" placeholder="Término mm/aa">
						</div>
						<div class="inputs-group">
							<input required name="Último cargo 1" type="text" placeholder="Último cargo">
							<input required name="Remuneração mensal 1" type="text" placeholder="Remuneração mensal">
						</div>
						<div class="textarea-group">
							<textarea required name="Resultados obtidos/alcançados 1" placeholder="Resultados obtidos/alcançados"></textarea>
						</div>						
					</div>
					<div class="profissao desactived">
						<div class="inputs-group">
							<input name="Empresa 2" type="text" placeholder="Empresa">
							<select name="Segmento 2">
								<option selected disabled>Segmento</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input name="Nacionalidade 2" type="text" placeholder="Nacionalidade">
							<select name="Porte 2">
								<option selected disabled>Porte</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input name="Pais 2" type="text" placeholder="Pais">
							<input name="Descrição 2" type="text" placeholder="Descrição">
						</div>
						<div class="inputs-group">
							<input name="Início mm/aa 2" type="text" placeholder="Início mm/aa">
							<input name="Término mm/aa 2" type="text" placeholder="Término mm/aa">
						</div>
						<div class="inputs-group">
							<input name="Último cargo 2" type="text" placeholder="Último cargo">
							<input name="Remuneração mensal 2" type="text" placeholder="Remuneração mensal">
						</div>
						<div class="textarea-group">
							<textarea name="Resultados obtidos/alcançados 2" placeholder="Resultados obtidos/alcançados"></textarea>
						</div>						
					</div>
					<div class="profissao desactived">
						<div class="inputs-group">
							<input name="Empresa 3" type="text" placeholder="Empresa">
							<select name="Segmento 3">
								<option selected disabled>Segmento</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input name="Nacionalidade 3" type="text" placeholder="Nacionalidade">
							<select name="Porte 3">
								<option selected disabled>Porte</option>
								<option value="auxiliar">Auxiliar</option>
								<option value="diretor">Diretor</option>
								<option value="supervisor">Supervisor</option>
							</select>
						</div>
						<div class="inputs-group">
							<input name="Pais 3" type="text" placeholder="Pais">
							<input name="Descrição 3" type="text" placeholder="Descrição">
						</div>
						<div class="inputs-group">
							<input name="Início mm/aa 3" type="text" placeholder="Início mm/aa">
							<input name="Término mm/aa 3" type="text" placeholder="Término mm/aa">
						</div>
						<div class="inputs-group">
							<input name="Último cargo 3" type="text" placeholder="Último cargo">
							<input name="Remuneração mensal 3" type="text" placeholder="Remuneração mensal">
						</div>
						<div class="textarea-group">
							<textarea name="Resultados obtidos/alcançados 3" placeholder="Resultados obtidos/alcançados"></textarea>
						</div>						
					</div>
				</div>
				<a id="adicionaProfissao" href="#" class="button">Adicionar novo <i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="section section-prosperity">
			<div class="wrapper">
				<div class="page-header">
					<h1>Informações específicas para a Prosperity</h1>
					<p>Informações específicas para a consultoria</p>
					<p>Indique o grau de seus conhecimentos, enumerando numa escala de 1 a 5 ( 1 - pouco, 5 - muito ) </p>
					<input type="hidden" name="Informações específicas para a Prosperity" value="Informações específicas para a consultoria">
				</div>
				<div class="page-header">
					<h2>Atividades operacionais</h2>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="armazenagem">Armazenagem - Operação</label>
						<select required name="Armazenagem - Operação" id="armazenagem">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="comercio">Comércio Exterior</label>
						<select required name="Comércio Exterior" id="comercio">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="rodoviario">Transporte Rodoviário</label>
						<select required name="Transporte Rodoviário" id="rodoviario">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="importacao">Importação</label>
						<select required name="Importação" id="importacao">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="ferroviario">Transporte Ferroviário</label>
						<select required name="Transporte Ferroviário" id="ferroviario">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="exportacao">Exportação</label>
						<select required name="Exportação" id="exportacao">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="aereo">Transporte Aéreo</label>
						<select required name="Transporte Aéreo" id="aereo">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="portuarias">Atividades Portuárias</label>
						<select required name="Atividades Portuárias" id="portuarias">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="maritimo">Transporte Marítimo</label>
						<select required name="Transporte Marítimo" id="maritimo">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="aeroportuarias">Atividades Aeroportuárias</label>
						<select required name="Atividades Aeroportuárias" id="aeroportuarias">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="roteirizacao">Roteirização</label>
						<select required name="Roteirização" id="roteirizacao">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="suprimentos">Suprimentos / Compras</label>
						<select required name="Suprimentos / Compras" id="suprimentos">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="pcp">PCP</label>
						<select required name="PCP" id="pcp">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="page-header">
					<h2>Gestão e Planejamento</h2>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="processosProdutivos">Processos produtivos</label>
						<select required name="Processos produtivos" id="processosProdutivos">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="logisticaReversa">Logística reversa</label>
						<select required name="Logística reversa" id="logisticaReversa">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="custosLogisticos">Custos logísticos</label>
						<select required name="Custos logísticos" id="custosLogisticos">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="planoDiretor">Plano diretor de logística</label>
						<select required name="Plano diretor de logística" id="planoDiretor">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="gestaoEstoque">Gestão de estoques</label>
						<select required name="Gestão de estoques" id="gestaoEstoque">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="terceirizacao">Terceirização em logística</label>
						<select required name="Terceirização em logística" id="terceirizacao">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="planejamentoDemanda">Planejamento de demanda</label>
						<select required name="Planejamento de demanda" id="planejamentoDemanda">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="operadoresLogisticos">Operadores logísticos</label>
						<select required name="Operadores logísticos" id="operadoresLogisticos">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="indicadoresDesempenho">Indicadores de desempenho</label>
						<select required name="Indicadores de desempenho" id="indicadoresDesempenho">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="page-header">
					<h2>Projetos e sistemas avançados</h2>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="planejamentoEstrategico">Planejamento estratégico para logística</label>
						<select required name="Planejamento estratégico para logística" id="planejamentoEstrategico">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="automacaoArmazenagem">Automação para movimentação e armazenagem</label>
						<select required name="Automação para movimentação e armazenagem" id="automacaoArmazenagem">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="armazenagemProjeto">Armazenagem - projeto</label>
						<select required name="Armazenagem - projeto" id="armazenagemProjeto">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="pesquisaOperacional">Pesquisa Operacional</label>
						<select required name="Pesquisa Operacional" id="pesquisaOperacional">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="movimentacaoMateriais">Sistema de movimentação de materiais</label>
						<select required name="Sistema de movimentação de materiais" id="movimentacaoMateriais">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="procurement">Suprimentos (Procurement)</label>
						<select required name="Suprimentos (Procurement)" id="procurement">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="apsApo">Sistema de otimização - APS, APO</label>
						<select required name="Sistema de otimização - APS, APO" id="apsApo">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="input">
						<label for="treinamento">Treinamento</label>
						<select required name="Treinamento" id="treinamento">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="inputs-group-label">
					<div class="input">
						<label for="simuladores">Simuladores - Arena, promodel e outros</label>
						<select required name="Simuladores - Arena, promodel e outros" id="simuladores">
							<option selected disabled>-</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
			</div>
		</div><!-- .informacoes-prosperity -->
		<div class="section section-atividades-paralelas">
			<div class="wrapper">
				<div class="page-header">
					<h1>Atividades paralelas atuais</h1>
					<input type="hidden" name="3" value="Atividades paralelas atuais">
				</div>
				<div class="textarea-group">
					<textarea required name="Aulas em curso superior | Instituição/Data" placeholder="Aulas em curso superior | Instituição/Data"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Palestras proferidas" placeholder="Palestras proferidas"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Artigos escritos" placeholder="Artigos escritos"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Outras" placeholder="Outras"></textarea>
				</div>
				<div class="inputs-group">
					<input required name="Valor de ganho esperado pelo consultor por dia" type="text" placeholder="Valor de ganho esperado pelo consultor por dia">
					<input required name="Por mês" type="text" placeholder="Por mês">
				</div>
				<div class="inputs-group">
					<select required name="Flexibilidade para viagens">
						<option selected disabled>Flexibilidade para viagens</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
					<select required name="Veículo próprio">
						<option selected disabled>Veículo próprio</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
		</div>
		<div class="section section-informatica">
			<div class="wrapper">
				<div class="page-header">
					<h1>Informática</h1>
					<h2>Nível de habilidade</h2>
				</div>
				<div class="inputs-group">
					<select required name="Microsoft Word" id="">
						<option selected disabled>Microsoft Word</option>
					</select>
					<select required name="Microsoft Project" id="">
						<option selected disabled>Microsoft Project</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="Microsoft Excel" id="">
						<option selected disabled>Microsoft Excel</option>
					</select>
					<select required name="Tableau" id="">
						<option selected disabled>Tableau</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="Microsoft Power Point" id="">
						<option selected disabled>Microsoft Power Point</option>
					</select>
				</div>
			</div>
		</div>
		<div class="section section-implantacoes">
			<div class="wrapper">
				<div class="page-header">
					<h1>Experiência em implantações</h1>
				</div>
				<div class="inputs-group">
					<select required name="ERP" id="">
						<option selected disabled>ERP</option>
					</select>
					<select required name="SIX SIGMA" id="">
						<option selected disabled>SIX SIGMA</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="LEAN" id="">
						<option selected disabled>LEAN</option>
					</select>
					<select required name="WMS" id="">
						<option selected disabled>WMS</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="MRP/MRP2" id="">
						<option selected disabled>MRP/MRP2</option>
					</select>
					<select required name="BPM" id="">
						<option selected disabled>BPM</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="Roteirização" id="">
						<option selected disabled>Roteirização</option>
					</select>
					<select required name="ISO" id="">
						<option selected disabled>ISO</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="RFID" id="">
						<option selected disabled>RFID</option>
					</select>
					<select required name="TMS" id="">
						<option selected disabled>TMS</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="S&OP" id="">
						<option selected disabled>S&OP</option>
					</select>
					<select required name="APS" id="">
						<option selected disabled>APS</option>
					</select>
				</div>
			</div>
		</div>
		<div class="section section-habilidades">
			<div class="wrapper">
				<div class="page-header">
					<h1>Habilidades em apresentações orais</h1>
				</div>
				<div class="inputs-group">
					<select required name="Em Português" id="">
						<option selected disabled>Em Português</option>
					</select>
					<select required name="Em inglês" id="">
						<option selected disabled>Em inglês</option>
					</select>
				</div>
				<div class="inputs-group">
					<select required name="Em outros idiomas" id="">
						<option selected disabled>Em outros idiomas</option>
					</select>
					<select required name="Quais" id="">
						<option selected disabled>Quais</option>
					</select>
				</div>
				<div class="textarea-group">
					<textarea required name="Conhecimento de Metodologias? Quais?" placeholder="Conhecimento de Metodologias? Quais?"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Descreva os principais projetos realizados, implantados e resultados obtidos" placeholder="Descreva os principais projetos realizados, implantados e resultados obtidos"></textarea>
				</div>
			</div>
		</div>
		<div class="section section-questoes">
			<div class="wrapper">
				<div class="page-header">
					<h1>Questões</h1>
				</div>
				<div class="textarea-group">
					<textarea required name="O que representa a atividade de consultoria para você?" placeholder="O que representa a atividade de consultoria para você?"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Qual a disponibilidade atual para projetos?" placeholder="Qual a disponibilidade atual para projetos?"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Além da consultoria, você está procurando uma recolocação em posição executiva?" placeholder="Além da consultoria, você está procurando uma recolocação em posição executiva?"></textarea>
				</div>
				<div class="textarea-group">
					<textarea required name="Escreva uma carta de apresentação." placeholder="Escreva uma carta de apresentação."></textarea>
				</div>
				<div class="inputs-group">
					<input required name="curriculo" type="file">
				</div>
				<div class="submit">
					<input required class="submit-button" type="submit" value="Enviar">
				</div>
				<div id="response">
					<div class="waiting">
						<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Aguarde, estamos enviando.
					</div>
					<div class="success">
						<i class="fa fa-check-square" aria-hidden="true"></i> Enviado com sucesso.
					</div>
					<div class="error">
						<i class="fa fa-dot-circle-o" aria-hidden="true"></i> Erro ao enviar.
					</div>
				</div>
			</div>
		</div>
	</form>

</main><!-- #main -->
<?php endwhile; ?>
<?php
get_footer();
