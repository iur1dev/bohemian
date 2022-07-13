// funcao de insert
function teste() {
  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();

  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#att_sel").html("");

    att();

    $("#receba").html("");
    $("#receba").append(
      `<div class="alert alert-light col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Preencha todos os campos !!! </div>`
    );
  } else {
    $.ajax({
      url: "adicionar.php",
      type: "POST",
      data: {
        nome: $nome,
        valor: $valor,
        qnt: $qnt,
        categ: $categ,
      },
      dataType: "json",
      success: function (result) {
        alert(result);
        $("#att_sel").html("");

        $("#nome").val("");
        $("#valor").val("");
        $("#qnt").val("");
        $("#categ").val("");

        att();

        $("#receba").html("");
        $("#receba").append(
          `<div class="alert alert-primary col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
          Cadastrado !!! </div>`
        );
      },
    });
  }
}
// funcao de update
function teste2() {
  $("#att_sel").html("");

  let $id = idUserSel;
  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();

  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#att_sel").html("");

    att();

    $("#receba").html("");
    $("#receba").append(
      `<div class="alert alert-success col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Selecione algo para atualizar !!! </div>`
    );
  } else {
    let $retorno = confirm("Tem certeza que quer alterar ???");
    if ($retorno == true) {
      $.ajax({
        url: "atualizar.php",
        type: "POST",
        data: {
          id: $id,
          nome: $nome,
          valor: $valor,
          qnt: $qnt,
          categ: $categ,
        },
        dataType: "json",
        success: function (result) {
          alert(result);
          $("#nome").val("");
          $("#valor").val("");
          $("#qnt").val("");
          $("#categ").val("");

          att();

          $("#receba").html("");
          $("#receba").append(
            `<div class="alert alert-success col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
          Atualizado !!! </div>`
          );
        },
      });
    } else {
      att();

      $("#nome").val("");
      $("#valor").val("");
      $("#qnt").val("");
      $("#categ").val("");
    }
  }
}
// funcao de delete
function teste3() {
  $("#att_sel").html("");

  let $id = idUserSel;

  if (
    $("#nome").val() == "" ||
    $("#valor").val() == "" ||
    $("#qnt").val() == "" ||
    $("#categ").val() == ""
  ) {
    $("#att_sel").html("");

    att();

    $("#receba").html("");
    $("#receba").append(
      `<div class="alert alert-danger col-6 col-md-2 text-center mx-auto mt-5" role="alert"> 
      Selecione algo para deletar !!! </div>`
    );
  } else {
    let $retorno = confirm("Tem certeza que quer deletar ???");
    if ($retorno == true) {
      $.ajax({
        url: "deletar.php",
        type: "POST",
        data: {
          id: $id,
        },
        dataType: "json",
        success: function (result) {
          alert(result);
          $("#nome").val("");
          $("#valor").val("");
          $("#qnt").val("");
          $("#categ").val("");

          att();

          $("#receba").html("");
          $("#receba").append(
            `<div class="alert alert-danger col-6 col-md-2 text-center mx-auto mt-5" 
          role="alert"> Deletado !!! </div>`
          );
        },
      });
    } else {
      att();

      $("#nome").val("");
      $("#valor").val("");
      $("#qnt").val("");
      $("#categ").val("");
    }
  }
}
// funcao de select
function att() {
  $.ajax({
    url: "atualizar2.php",
    method: "GET",
    dataType: "json",
    success: function (data) {
      for (let i = 0; i < data.length; i++) {
        $("#att_sel").append(
          ` <tr onclick="Selecionar(` +
            data[i][0] +
            `)" style="cursor:Pointer;">                
                    <td>` +
            data[i][2] +
            `</td>                        
                    <td>` +
            data[i][3] +
            `</td>     
                    <td>` +
            data[i][4] +
            `</td> 
                    </tr>`
        );
      }
    },
  });
}
// funcao de selecionar
let idUserSel = 0;
function Selecionar(id) {
  let iduser = id;

  $.ajax({
    url: "selecionar.php",
    method: "GET",
    data: {
      id: iduser,
    },
    dataType: "json",
  }).done(function (res) {
    $("#nome").val(res[0][2]);
    $("#valor").val(res[0][3]);
    $("#qnt").val(res[0][4]);
    $("#categ").val(res[0][1]);
    idUserSel = res[0][0];
  });
}
