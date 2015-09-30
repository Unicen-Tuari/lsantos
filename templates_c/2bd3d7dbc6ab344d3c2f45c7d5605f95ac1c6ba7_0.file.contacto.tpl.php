<?php /* Smarty version 3.1.27, created on 2015-09-30 05:18:42
         compiled from "/opt/lampp/htdocs/lsantos/templates/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:832970166560b5492d065c5_74069714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bd3d7dbc6ab344d3c2f45c7d5605f95ac1c6ba7' => 
    array (
      0 => '/opt/lampp/htdocs/lsantos/templates/contacto.tpl',
      1 => 1443134820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832970166560b5492d065c5_74069714',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560b5492d85132_61068681',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560b5492d85132_61068681')) {
function content_560b5492d85132_61068681 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '832970166560b5492d065c5_74069714';
?>

        <div class="section cort" id="me">
            <div class="container"></div>

            <br>
            <br>
            <br>
            <div class="container">

            </div>
            <div class="section text-center" id="cn">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-offset-3 col-md-6 text-center" id="res">
                            <h1 class="text-center">Reservas</h1>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="inputName3" class="control-label">Nombre</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName3" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="inputName3" class="control-label">Fecha</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputName3" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="inputEmail3" class="control-label">Email</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="inputPassword3" class="control-label">Telefono</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="inputPassword3">Comentario</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10 col-md-2">
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container"><div class="row"></div><div class="row"></div></div><div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1><br></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
?>