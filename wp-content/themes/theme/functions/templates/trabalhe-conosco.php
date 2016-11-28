<?php
$template = '<h1 style="color: #010d1c;">Trabalhe conosco - Prosperity</h1>';
$template .= '<ul style="display: block;list-style:none;margin:0;padding:0;">';
foreach($_POST as $campo => $valor){
	$template .= '<li style="padding: 2.5px;display:block;margin:0;font-size: 10px; line-height: 1.4;">';
	$template .= '<strong>' . str_replace("_"," ",$campo) . ':</strong><br>' . $valor;
	$template .= '</li>';
}
$template .= '</ul>';