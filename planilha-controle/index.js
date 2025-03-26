var id_da_linha;

// Descreva esta função...
function editar() {
  if (id_da_linha == null) {
    Swal.fire('Pesquise um usuário primeiro');
  } else {
    document.getElementById("loading").style.display = "block";
    var pre_url =  ([document.getElementById('pesquisa_box').value,',',document.getElementById('cliente_box').value,',',document.getElementById('assunto_box').value,',',document.getElementById('form_select').value,',',document.getElementById('data').value,',',document.getElementById('status').value,',',document.getElementById('atualizacao').value].join(''));
    var url_update = bb_url_gs + "&func=Update&row=" + id_da_linha + "&values=" + encodeURIComponent(pre_url);
    $.ajax({
    type: "POST",url: "https://proxy.bootsites.com.br/",data: { url: url_update },success: function (response) {console.log(response);  document.getElementById("loading").style.display = "none";
      limpar();
      Swal.fire('Editado com sucesso!');
    }});
  }
}

// Descreva esta função...
function pesquisar() {
  window.location.href = "pesquisa.html";}

// Descreva esta função...
function criar() {
  if (document.getElementById('pesquisa_box').value == '') {
    Swal.fire('Insira algo');
  } else {
    document.getElementById("loading").style.display = "block";
    var pre_url =  ([document.getElementById('pesquisa_box').value,',',document.getElementById('cliente_box').value,',',document.getElementById('assunto_box').value,',',document.getElementById('form_select').value,',',document.getElementById('data').value,',',document.getElementById('status').value,',',document.getElementById('atualizacao').value].join(''));
    var url_create = bb_url_gs.concat("&func=Create&values=", encodeURIComponent(pre_url));;
    $.ajax({
    type: "POST",url: "https://proxy.bootsites.com.br/",data: { url: url_create },success: function (response) {console.log(response);  document.getElementById("loading").style.display = "none";
      Swal.fire('Linha Inserida');
      limpar();
    }});
  }
}

// Descreva esta função...
function limpar() {
  $("#pesquisa_box").val('');
  $("#telefone_box").val('');
  $("#"+'seletor_ativo').prop("checked", false);
}


var bb_url_gs = "https://script.google.com/macros/s/AKfycbzRjx8mbDHYI3UNj7Tmeya8JfmTVkQQbIFCc-zYAW_YcTrJqsqMKidDmj1NftH734pu/exec" + "?spreadsheetId=" + "1D2SFmEsGFV8V7m-LyTAVwAtMao9iyDLw4ptGFCbDJCc";
//feito com bootblocks.com.br
   function makeLoading(){
  let loading = '<div id="loading" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0); z-index: 9999;"><img id="loading-image" src="assets/loading.gif" alt="Carregando..." style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>'
  document.body.innerHTML += loading;
  }
   makeLoading();

//feito com bootblocks.com.br

        $(document).ready(function(){
            $("#loading-page-bb").css("opacity", "1");
        });