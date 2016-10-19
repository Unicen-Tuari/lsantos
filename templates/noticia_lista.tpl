<ul class="">
  {foreach $noticias as $noticia}
    <li class="">
      {if $noticia['realizada']}
        <s>{$noticia['noticia']}</s>
      {else}
      <h4>{foreach $categorias as $categoria}

              {if $categoria['id_categoria'] eq $noticia['fk_id_categoria']}

                {assign var="categoria_nombre"  value=$categoria['nombre']}
                {assign var="categoria_id"  value=$categoria['id_categoria']}

                {$categoria_nombre}
              {/if}
            {/foreach}
            | {$noticia['noticia']}|<br>{$noticia['descripcion']}
      {/if}

      <a class="glyphicon glyphicon-trash eliminarNoticias" idnot="{$noticia['id']}"></a>
      <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregar_imagenes&id_task={$noticia['id']}"></a>
      <a class="glyphicon glyphicon-pencil modificarNoticia" data-cat="{$categoria_nombre}" data-catid="{$categoria_id}" data-not="{$noticia['noticia']}"
      data-desc="{$noticia['descripcion']}" data-img="{$noticia['imagenes'][0]['path']}"  data-id="{$noticia['id']}"></a>
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
<script>

$('.btn-not').click(function(){
event.preventDefault();
$.get( "index.php?action=noticia",{ id_not: $(this).attr("data-idnot") }, function(data) {
  $('#conten').html(data);
});
});

     $(".glyphicon glyphicon-trash").on("click", function(event){
       event.preventDefault();
       $.ajax({
         type: "GET",
         dataType: "HTML",
         url: event.target.href,
         success: function(data){
           $("#listaNoticias").html(data);
         },
         error: function(){
           alert("No anduvo la llamada AJAX");
         }
       });

     });
   </script>
