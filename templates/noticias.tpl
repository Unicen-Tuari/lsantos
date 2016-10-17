<div id="conten2"class="container">
  <div class="row">
    <div class="col-md-6" >
      <label class="control-label" for="nombre"><h1>Lista de Noticias</h1></label>
      <ul class="list-group" >
        {foreach $noticias as $noticia}
        <li class=""><h3>

                {$noticia['noticia']} |
                {foreach $categorias as $categoria}
                  {if $categoria['id_categoria'] eq $noticia['fk_id_categoria']}
                  {$categoria['nombre']}
                  {/if}
                  {/foreach}
                </h3>

            <a class="btn btn-primary btn-not " Action="noticia"  data-idnot="{$noticia['id']}">Ver Noticia</a><br><br>

              {foreach $noticia['imagenes'] as $imagen}
              <img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-noticia-{$noticia['id']}" class="img-responsive" />
              {/foreach}</li>
        {/foreach}
      </ul>
    </div>
  </div>
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

           $('#conten2').html(data);

         },
         error: function(){
           alert("No anduvo la llamada AJAX");
         }

       });

     });
   </script>
