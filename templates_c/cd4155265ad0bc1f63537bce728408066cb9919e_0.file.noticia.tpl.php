<?php /* Smarty version 3.1.27, created on 2015-09-30 18:33:01
         compiled from "/opt/lampp/htdocs/lsantos/templates/noticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1162930023560c0ebd3b1ab1_05479369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4155265ad0bc1f63537bce728408066cb9919e' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/noticia.tpl',
      1 => 1443630727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162930023560c0ebd3b1ab1_05479369',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c0ebd4cdd59_03561749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c0ebd4cdd59_03561749')) {
function content_560c0ebd4cdd59_03561749 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1162930023560c0ebd3b1ab1_05479369';
?>
 <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div  id="conten">
      <?php echo $_smarty_tpl->getSubTemplate ('noticiaAjax.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>