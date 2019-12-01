$("#default").on("submit",function(event) {
  event.preventDefault();
  var form = $(this);
  var data = $(form).serialize();
  $.ajax({
    url:  $(form).attr("action"),
    method:  $(form).attr("method"),
    data:  data,
      success: function(data){
        console.log(data)
        window.location.href = "/concessionaria/index.php";
      },
      error: function(errorMessage) {
        console.log(errorMessage)
      }
  })
});

$("#carro").on("submit",function(event) {
  event.preventDefault();
  var form = $(this);
  $.ajax({
    url:  $(form).attr("action"),
    method:  $(form).attr("method"),
    enctype: 'multipart/form-data',
    processData: false,
    contentType: false,
    data: new FormData(this) ,
    success: function(data){
      console.log('registrado')
    },
    error: function(jqXHR, textStatus, errorMessage) {
      console.log(errorMessage)
    },
  })
});

function carregarCategorias(){
  $.getJSON("/concessionaria/controllers/concessionaria/get.php",{  },
    function(data){
      $.each(data, function(i, concessionaria) {
        $('concessionaria').append($('<option>').text(concessionaria.nome).attr('value', concessionaria.idconcessionaria));
      });

      $('#carro').formSelect();
    }
  );
}