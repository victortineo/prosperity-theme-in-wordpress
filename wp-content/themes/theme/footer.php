<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer id="footer" class="footer" role="contentinfo">
<div class="wrapper">
	<div class="widget form">
		<strong class="title">FALE CONOSCO</strong>
		<form action="">
			<div class="input-group">
				<input type="text" placeholder="Nome" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Empresa" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="E-mail" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Telefone" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Cidade" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Estado" required>
			</div>
			<div class="textarea">
				<textarea placeholder="Mensagem" required></textarea>
			</div>
			<div class="input-submit">
				<input class="submit" type="submit" value="ENVIAR">
			</div>
		</form>
	</div>
	<div class="widget">
		<strong class="title">ARTIGOS RECENTES</strong>
		<ul>
			<li>> <a href="#">Lorem ipsum.</a></li>
			<li>> <a href="#">Distinctio, dolorum!</a></li>
			<li>> <a href="#">Recusandae, laborum.</a></li>
			<li>> <a href="#">Repellat, eum.</a></li>
			<li>> <a href="#">Repellendus, excepturi!</a></li>
		</ul>
	</div>
	<div class="widget">
		<strong class="title">CASES DE SUCESSOS</strong>
		<ul>
			<li>> <a href="#">Lorem ipsum.</a></li>
			<li>> <a href="#">Distinctio, dolorum!</a></li>
			<li>> <a href="#">Recusandae, laborum.</a></li>
			<li>> <a href="#">Repellat, eum.</a></li>
			<li>> <a href="#">Repellendus, excepturi!</a></li>
		</ul>
	</div>
	<div class="widget">
		<strong class="title">SERVIÇOS</strong>
		<ul>
			<li>> <a href="#">Lorem ipsum.</a></li>
			<li>> <a href="#">Distinctio, dolorum!</a></li>
			<li>> <a href="#">Recusandae, laborum.</a></li>
			<li>> <a href="#">Repellat, eum.</a></li>
			<li>> <a href="#">Repellendus, excepturi!</a></li>
		</ul>
	</div>

	<div class="widgetfull locale">
		<strong class="title">ESCRITÓRIO</strong>
		<div class="content">
			<i class="icon-marker"></i>
			<a href="#">Rua Lorem impsum, 123, São Paulo - SP</a>
		</div>
		<div class="content">
			<i class="icon-phone"></i>
			<a href="tel:(11) 3566-1234">(11) 3566-1234</a>
		</div>
		<div class="content">
			<i class="icon-envelope"></i>
			<a href="mailto:contato@prosperity.com.br">contato@prosperity.com.br</a>
		</div>
	</div>
</div>
<div class="widgetfull corporate">
<div class="wrapper">
	<div class="content">
		<i class="icon-prosperity-logo"></i>
		<p>Copyright © 2016 Prosperity Consultoria em Logística e Supply Chain.</p>
	</div>
	<div class="content">
		<span class="creditos">
			by <strong><a href="http://madgo.com.br" target="_blank">MadGO</a></strong>
		</span>
	</div>
</div><!-- .wrapper -->
</div><!-- .corporate -->
</footer><!-- #footer -->

<div class="mod-postits">
<a href="#"><i class="icon-phone"></i></a>
<a href="#"><i class="icon-marker"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>
