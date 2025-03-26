<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="theme-color" content="#103ef2">
            <title>BootBlocks</title>
            <!-- bootstrap css -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- bootstrap icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <!-- sweetalert -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <!--material icons-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
            </head>
        <body>
        <div id="loading-page-bb" style="opacity: 0; height: 100%;">
            <?php
  date_default_timezone_set('America/Sao_Paulo');$data = (date('Y-m-d'));
?>





  <div class="container" id="id_do_container">
    <div style="width:10px;height:10px;"></div>
    <span class="meu_texto" id="info" style="font-size: 16px; color: #000000;  ">Gerenciar Chamados:</span>
    <div style="width:10px;height:10px;"></div>
    <input type="text" class="form-control" id="pesquisa_box" placeholder="Chamado">
    <div style="width:10px;height:10px;"></div>
    <input type="text" class="form-control" id="cliente_box" placeholder="Cliente">
    <div style="width:10px;height:10px;"></div>
    <input type="text" class="form-control" id="assunto_box" placeholder="Assunto">
    <div style="width:10px;height:10px;"></div>
    <select class="form-select" id="form_select">
    <option value="0">Selecione</option>
    <?php foreach((array('a', 'b', 'c', 'd', 'e')) as $elemento){ ?>
    <option value="<?php echo $elemento; ?>"><?php echo $elemento; ?></option>
    <?php } ?>
    </select>
    <div style="width:10px;height:10px;"></div>
    <input type="date" class="tempo" id="data" value="<?php echo $data ; ?>">
    <div style="width:10px;height:10px;"></div>
    <select class="form-select" id="status">
    <option value="0">Selecione</option>
    <?php foreach((array('Pausado', 'Finalizado', 'Visita')) as $elemento){ ?>
    <option value="<?php echo $elemento; ?>"><?php echo $elemento; ?></option>
    <?php } ?>
    </select>
    <div style="width:10px;height:10px;"></div>
    <input type="text" class="form-control" id="atualizacao" placeholder="atualização">
    <div style="width:10px;height:10px;"></div>
    <div class="row " id="Linha">
      <div id="id_da_tela" class="classe_da_tela" style="background-color: #ffffff; height: auto; width: 40%;">
        <button type="button" onclick="pesquisar()" id="pesquisar_btn" class="btn btn-primary">Pesquisar</button>
      </div>
    </div>
    <div style="width:10px;height:10px;"></div>
    <div class="row " id="Linha">
      <div id="id_da_tela" class="classe_da_tela" style="background-color: #ffffff; height: auto; width: 40%;">
        <button type="button" onclick="criar()" id="inserir_btn" class="btn btn-success">Criar</button>
      </div>
    </div>
  </div>

            <!-- bootstrap js -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- firebase-app -->
            <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
            <!-- firebase-database -->
            <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>
            <!-- firebase-auth -->
            <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
            <!-- codigo javascript -->
            <script src= "index.js?v=1.0"> </script>
        </div>
        </body>
        </html>