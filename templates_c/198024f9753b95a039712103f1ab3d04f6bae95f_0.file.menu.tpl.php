<?php /* Smarty version 3.1.27, created on 2015-09-30 05:18:41
         compiled from "/opt/lampp/htdocs/lsantos/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1364872181560b54919ee0e8_74408488%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '198024f9753b95a039712103f1ab3d04f6bae95f' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/menu.tpl',
      1 => 1443582240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1364872181560b54919ee0e8_74408488',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560b5491a74093_34826874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560b5491a74093_34826874')) {
function content_560b5491a74093_34826874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1364872181560b54919ee0e8_74408488';
?>
        <div class="section cort" id="me">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Menu</h1>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>HORARIO</th>
                            <th>SABADO</th>
                            <th>DOMINGO</th>
                        </tr>
                    </thead>
                    <tbody id="menu-lista"></tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <select id="horario">
                                    <option value="Almuerzo">Almuerzo</option>
                                    <option value="Cena">Cena</option>
                                </select>
                            </td>
                            <td>
                                <input id="sabado" class="form-control" type="text" maxlength="20" placeholder="ingrese el menu">
                            </td>
                            <td>
                                <input id="domingo" class="form-control" type="text" maxlength="20" placeholder="ingrese el menu">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <button id="agregar-menu" type="button" class="btn btn-success btn-lg center-block">Agregar Menu</button>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row"></div><div class="row"></div><div class="row"></div>
            </div>
            <div class="section text-center" id="cn">
                <div class="container"></div>

            </div>
        </div>
  <?php echo '<script'; ?>
 src="js/tabla.js"><?php echo '</script'; ?>
>
<?php }
}
?>