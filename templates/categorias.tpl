<ul class="list-group">
  {foreach $categorias as $categoria}
  <li class="">
    {$categoria['nombre']}<a class="glyphicon glyphicon-trash" action="borrar_categoria"  idcat="{$categoria['id_categoria']}"></a>
    <a class="glyphicon glyphicon-pencil modificarCat" data-cat="{$categoria['nombre']}" idcat="{$categoria['id_categoria']}"></a>
    </li>
  {/foreach}
</ul>
