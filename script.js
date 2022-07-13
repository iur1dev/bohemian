// funcao de insert
function teste() {
  $("#att_sel").html("");

  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();

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
      $("#nome").val("");
      $("#valor").val("");
      $("#qnt").val("");
      $("#categ").val("");
      att();
    },
  });
}
// funcao de update
function teste2() {
  $("#att_sel").html("");

  let $id = idUserSel;
  let $nome = $("#nome").val();
  let $valor = $("#valor").val();
  let $qnt = $("#qnt").val();
  let $categ = $("#categ").val();

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
    },
  });
}
// funcao de delete
function teste3() {
  $("#att_sel").html("");

  let $id = idUserSel;

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
    },
  });
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
