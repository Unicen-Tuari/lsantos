$(".botonAgregarImagenes").on("click", function(event){
  event.preventDefault();

  var archivos = $("#imagesToUpload").prop('files');

  if(typeof(archivos) == 'undefined'){
    alert("No pusiste imagenes");
    return;
  }

  var datos = new FormData();

  $.each(archivos, function(key,value){
    datos.append(key,value);
  });

  $.ajax({
    type: "POST",
    dataType: "json",
    url: event.target.href,
    data: datos,
    success: function(data){
      alert(data.result);
    },
    error: function(){
      alert("No anduvo la llamada AJAX");
    },
    contentType : false,
    processData : false
  });

});
