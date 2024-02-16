var resultado = $("#resultado");
var resultadoLabel = $("#resultado-label");

$(document).ready(function () {
  $('.calcular').click(function (e) {
    e.preventDefault();
    
    $.ajax({
      url: "../Controller/Resultado.php",
      type: 'post',
      data: {
        "valor": $("#valor").val()
      },
      dataType: 'json',
      beforeSend: function () {
        $("#resultado").html("ENVIANDO...");
      },
      success: function (data) {
        //atualizaTabela(data);
      },
    }).done(function (msg) {
      //$("#resultado").html(msg);
      $("#resultado-label").removeClass('hidden');
      atualizaTabela(msg);

    }).fail(function (jqXHR, textStatus, msg) {
      alert(msg);

    });

  });
  //resultadoLabel.removeClass('hidden');
});




function atualizaTabela(data) {

  $("#resultado").empty();
  $.each(data, function (index, element) {
    console.log(element);
    resultado.append(`
        <p>Quantidade de notas de ${element[0]}: ${element[1]}</p>

        `);
  });


}

function showElement(){
  $("#resultadoLabel").removeClass('hidden');

}

