var resultado_pesquisa, id_da_linha, telefone;

// Descreva esta função...
function pesquisar() {
  if (document.getElementById('pesquisa_box').value == '') {
    Swal.fire('Preencha com a pesquisa');
  } else {
    document.getElementById("loading").style.display = "block";
    var url_search = bb_url_gs + "&func=search&columnName=" + 'nome' + "&condition=" + document.getElementById('pesquisa_box').value;
    fetch(url_search)
    .then(response => response.json())
    .then(data => {
    var resultado_pesquisa = data;
      if (!resultado_pesquisa.length) {
        Swal.fire('Nenhum resultado Encontrado!');
      } else {
        resultado_pesquisa = resultado_pesquisa[1];
        id_da_linha = resultado_pesquisa[0];
        telefone = resultado_pesquisa[2];
        $("#").val(telefone);
      }
      document.getElementById("loading").style.display = "none";
    });
  }
}


//feito com bootblocks.com.br

        $(document).ready(function(){
            $("#loading-page-bb").css("opacity", "1");
        });