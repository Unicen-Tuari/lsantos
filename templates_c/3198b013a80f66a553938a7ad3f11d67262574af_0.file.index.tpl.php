<?php /* Smarty version 3.1.27, created on 2015-09-30 05:18:34
         compiled from "/opt/lampp/htdocs/lsantos/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180224745560b548a481b53_69055846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3198b013a80f66a553938a7ad3f11d67262574af' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/index.tpl',
      1 => 1443141830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180224745560b548a481b53_69055846',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560b548a55e7f6_81907919',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560b548a55e7f6_81907919')) {
function content_560b548a55e7f6_81907919 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180224745560b548a481b53_69055846';
?>
 <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div  id="conten">
      <?php echo $_smarty_tpl->getSubTemplate ('inicio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>