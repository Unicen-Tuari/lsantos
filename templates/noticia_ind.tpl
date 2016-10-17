<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3">
          </div>
            <div class="col-md-6 ">
              <div class="row">
                <div class="col-md-12">
                    <h1 class="text-invert">
                        <p class="text-invert">{$noticias['noticia']}</p>
                    </h1>
                    <h2>{foreach $categorias as $categoria}
                      {if $categoria['id_categoria'] eq $noticias['fk_id_categoria']}
                      {$categoria['nombre']}
                      {/if}
                      {/foreach}
                    </h2>
                    <h4>{$noticias['descripcion']}.</h4><br><br>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-12">
                  {foreach $noticias['imagenes'] as $imagen}
                    <img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-noticia-{$noticia['id']}" class="img-responsive center-block">
                    {/foreach}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
