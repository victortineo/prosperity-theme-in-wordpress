<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#ed1846">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#ed1846">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="author" content="Joel Santos ( MadGO" />
  <meta name="contact" content="joel.santos@madgo.com.br" />
	<title>Framework docs</title>
  <!-- Bootstrap -->
  <link href="./bower_components/animate.css/animate.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- My Style -->
  <link href="./dist/assets/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- Menu --> 
<body class="body" data-spy="scroll" data-target="#menu-wrapper" data-offset="64">
<header>
<nav id="mod-navbar" class="navbar navbar-default navbar-fixed-top">
  <div class="container navbar-wrapper">
    <div class="branding col-xs-8 col-sm-2 text-right">
      <a href="index.php" title="Empower IT">
        <img src="./dist/assets/img/logo.png" alt="">
      </a>
    </div><!-- fim branding -->
    <div class="menu-collapse pull-right">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="menu col-xs-9 col-sm-10">
      <div class="row">
        <div class="col-xs-12">
          <div id="menu-wrapper" class="menu__wrapper link-animation">
            <ul class="nav navbar-nav menu__list" id="menu-list">
              <li><a href="https://bitbucket.org/madgoodones/framework-docs" target="_blank">Bitbucket</a></li>
              <li><a href="http://madgo.com.br/" target="_blank">MadGO</a></li>
              <li><a href="http://intrustweb.com.br/" target="_blank">Intrust WEB</a></li>
            </ul>
          </div>
        </div> <!-- /.col-xs-12 -->
      </div><!-- fim row -->
    </div><!-- fim menu -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<!-- ./ Menu -->

<div class="container panel-framework">
  <div class="row text-center">
    <div class="col-xs-12">
    <div class="list-group">
    <a href="#" class="list-group-item active">Viaje em nossos módulos</a>
      <a href="./mods/menu.php" class="list-group-item">Menu</a>
      <a href="./mods/slider.php" class="list-group-item">Slider</a>
      <a href="./mods/cases.php" class="list-group-item">Carousel Cases</a>
      <a href="./mods/forms.php" class="list-group-item">Formulários de contato</a>
      <a href="./mods/abas.php" class="list-group-item">Sistema de abas</a>
      <a href="./mods/zigzag.php" class="list-group-item">Zigzag</a>
      <a href="./mods/newsletter.php" class="list-group-item">Newsletter</a>
      <a href="./mods/modal.php" class="list-group-item">Modal</a>
      <a href="./mods/grid-programatic.php" class="list-group-item">Grid Programatica</a>
      <a href="./mods/posts.php" class="list-group-item">Posts</a>
      <a href="./mods/about.php" class="list-group-item">About</a>
    </div>
    </div>
  </div>
</div>

<div class="text-center">
  <small>Framework em desenvolvimento por <strong>MadGO</strong> e <strong>Intrust WEB</strong>.</small>
</div>

<!-- Scripts -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./dist/assets/js/all.js"></script>
<!-- ./ Scripts -->
</body>
</html>