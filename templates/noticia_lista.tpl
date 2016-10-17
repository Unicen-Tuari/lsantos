<ul class="">
  {foreach $noticias as $noticia}
    <li class="">
      {if $noticia['realizada']}
        <s>{$noticia['noticia']}</s>
      {else}
      <h4>{foreach $categorias as $categoria}
              {if $categoria['id_categoria'] eq $noticia['fk_id_categoria']}
                {$categoria['nombre']}
              {/if}
            {/foreach}| {$noticia['noticia']}|<br>{$noticia['descripcion']}
      {/if}
      <a class="glyphicon glyphicon-trash eliminarTareas" idnot="{$noticia['id']}"></a>
      <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregar_imagenes&id_task={$noticia['id']}"></a>
      <a class="glyphicon glyphicon-pencil modificarCat" data-cat="{$categoria['nombre']}" idcat="{$categoria['id_categoria']}"></a>
     </h4>
      {foreach $noticia['imagenes'] as $imagen}
          <img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-noticia-{$noticia['id']}" class="img-thumbnail" >
      {/foreach}
    </li>
  {/foreach}
</ul>
</div>

<div class="col-md-6">
  {if count($errores) gt 0}
  <div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">Errores</h3>
    </div>
    <ul>
      {foreach $errores as $error}
        <li>{$error}</li>
      {/foreach}
    </ul>
  </div>
  {/if}
</div>
