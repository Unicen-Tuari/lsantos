<?php /* Smarty version 3.1.27, created on 2015-09-30 18:02:40
         compiled from "/opt/lampp/htdocs/lsantos/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27069511560c07a07b3240_69323557%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5e7c97b278796d328ddee6782939a36ead7d8e7' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/header.tpl',
      1 => 1443628953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27069511560c07a07b3240_69323557',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c07a0892433_42921241',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c07a0892433_42921241')) {
function content_560c07a0892433_42921241 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27069511560c07a07b3240_69323557';
?>
<!DOCTYPE html>
  <head>
    <meta name="keywords" content="asado, carne al asador,parrillada">
    <meta name="description" content="Asador criollo y restaurant estilo campo">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Don Coco</title>
      <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap_custom_style.css" rel="stylesheet">
    <!--link rel="stylesheet" href="css/style.css" type="text/css" media="screen"-->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/navegacion.js"><?php echo '</script'; ?>
>
  </head>
  <body class="cort">
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation ">
      <div class="container ">
        <div class="navbar-header page-scroll ">
          <button type="button " class="navbar-toggle" data-toggle="collapse " data-target=".navbar-ex1-collapse ">
            <span class="sr-only ">Toggle navigation</span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
            <span class="icon-bar "></span>
          </button>
          <a class="navbar-brand page-scroll " href="#ini "><span class="text-invert">Don Coco  </span></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex-collapse ">
          <ul class="nav navbar-nav navbar-right ">
            <li>
              <a id="ini">Inicio</a>
            </li>
            <li>
              <a id="ca">Carta</a>
            </li>
            <li>
              <a id="hi" >Historia/Ubicacion</a>
            </li>
            <li>
              <a id="not" >Noticias</a>
            </li>
            <li>
              <a id="me" >Menu</a>
            </li>
            <li>
              <a id="co" >Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php }
}
?>